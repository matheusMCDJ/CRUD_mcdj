<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas extends CI_Controller 
{
	//Funcao para listagem de Pessoas
	public function index()
	{
		//Carrega a model
		$this->load->model('pessoas_model', 'pessoas');

		//Pega os dados da model e armazena num array de dados
		$data['pessoas'] = $this->pessoas->getPessoas();

		//Carrega a view listar pessoas com o array criado como parametro
		$this->load->view('listarpessoas', $data);
	}

	//Funcao para a carregar a view add
	public function add()
	{
		//Carrega a model
		$this->load->model('pessoas_model', 'pessoas');

		//Carrega a view add pessoas
		$this->load->view('addpessoas');
	}

	//Funcao para atualizar valores no banco
	public function atualizar()
	{
		//Carrega a model
		$this->load->model('pessoas_model', 'pessoas');
		//Pega o segmento 3 da url e armazena em id
		$id = $this->uri->segment(3);
		//Data recebe os dados da pessoa pelo id
		$data = $this->pessoas->getPessoa($id);
		//Se os dados forem vazios, retorna para a tela inicial
		if($data == null)
		{
			redirect('https://localhost/ci');
		}
		//Carrega a view edit pessoas
		$this->load->view('editpessoas', $data);
	}

	//Fucao para editar dados já existentes
	public function editar()
	{
		
		//Carrega a biblioteca form_validation
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		//Criacao das regras de validação de formulário
		$this->form_validation->set_rules('id', 'Pessoa', 'required', array('required' => 'Pessoa nao encontrada!'));
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('cpf', 'Cpf', 'required|callback_cpfValido');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		//Verifica a validação das regras
 		if ($this->form_validation->run() == FALSE)
        {
       	    $json = ['success'=>false,'txt'=>validation_errors()];
        }
        else
        {
	 		$post = $this->input->post();

			$this->load->model('pessoas_model', 'pessoas');

			$formulario = $this->pessoas->editaPessoa($post);

			if($formulario == 1)
			{
				$json = ['success'=>true,'txt'=>"Atualizado com Sucesso"];
			}
			else
			{
				$json = ['success'=>false,'txt'=>"Ocorreu um erro ao tentar atualizar"];
			}
        }

        //Retorna pro ajax a resposta
		echo json_encode($json);		
	}

	//Funcao para inserir a pessoa no banco
	public function salvar()
	{	
		
		//Carrega a biblioteca form_validation
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		//Criacao das regras de validação de formulário
		$this->form_validation->set_rules('nome', 'Nome', 'required');
		$this->form_validation->set_rules('cpf', 'Cpf', 'required|is_unique[pessoas.cpf]|callback_cpfValido');
		$this->form_validation->set_rules('telefone', 'Telefone', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pessoas.email]');

		//Verifica a validação das regras
 		if ($this->form_validation->run() == FALSE)
        {
       	    $json = ['success'=>false,'txt'=>validation_errors()];
        }
        else
        {
	 		$post = $this->input->post();

			$this->load->model('pessoas_model', 'pessoas');

			$formulario = $this->pessoas->inserePessoa($post);

			if($formulario == 1)
			{
				$json = ['success'=>true,'txt'=>"Cadastrado com Sucesso"];
			}
			else
			{
				$json = ['success'=>false,'txt'=>"Ocorreu um erro ao tentar cadastrar"];
			}
        }



        //Retorna pro ajax a resposta
		echo json_encode($json);
	}


	//Funcao para validar cpf (stackoverflow)
	public function cpfValido($cpf = null)
	{
		// Verifica se um número foi informado
		if(empty($cpf)) {
			$this->form_validation->set_message('cpfValido', 'O {field} é obrigatório');
			return false;
		}

		// Elimina possível mascara
		$cpf = preg_replace("/[^0-9]/", "", $cpf);
		$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		
		// Verifica se o numero de digitos informados é igual a 11 
		if (strlen($cpf) != 11) {
			$this->form_validation->set_message('cpfValido', 'O {field} não é válido');
			return false;
		}
		// Verifica se nenhuma das sequências invalidas abaixo 
		// foi digitada. Caso afirmativo, retorna falso
		else if ($cpf == '00000000000' || 
			$cpf == '11111111111' || 
			$cpf == '22222222222' || 
			$cpf == '33333333333' || 
			$cpf == '44444444444' || 
			$cpf == '55555555555' || 
			$cpf == '66666666666' || 
			$cpf == '77777777777' || 
			$cpf == '88888888888' || 
			$cpf == '99999999999') {
			$this->form_validation->set_message('cpfValido', 'O {field} não é válido');
			return false;
		 // Calcula os digitos verificadores para verificar se o
		 // CPF é válido
		 } else {   
			
			for ($t = 9; $t < 11; $t++) {
				
				for ($d = 0, $c = 0; $c < $t; $c++) {
					$d += $cpf[$c] * (($t + 1) - $c);
				}
				$d = ((10 * $d) % 11) % 10;
				if ($cpf[$c] != $d) {
					$this->form_validation->set_message('cpfValido', 'O {field} não é válido');
					return false;
				}
			}

			return true;
		}
	}

	//Funcao deletar pessoa do banco
	public function deletar()
	{
		//Carrega a variável post com os inputs que o ajax envia
		$post = $this->input->post();

		if($post['id'] == null)
		{
			$json = ['success'=>false];
		}
		else
		{
			$this->load->model('pessoas_model', 'pessoas');

			//Envia id para deletar na model
			if($this->pessoas->deletaPessoa($post))
			{
				$json = ['success'=>true];
			}
			else
			{
				$json = ['success'=>false];
			}
		}

		//Retorna pro ajax a resposta
		echo json_encode($json); 
	}

	public function visualizar()
	{

		$this->load->model('pessoas_model', 'pessoas');

		//Resgata o 3° segmento da url de visualização
		$id = $this->uri->segment(3);

		//Chama a funcao get da model pelo id da pessoa resgatado antes
		$data = $this->pessoas->getPessoa($id);

		if($data == null)
		{
			redirect('https://localhost/ci');
		}
		
		//Carrega a view com os dados do indivíduo
		$this->load->view('visualizarpessoas', $data);		
	}
}