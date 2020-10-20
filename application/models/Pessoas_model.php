<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pessoas_model extends CI_Model
{

	//Resgata os arquivos pessoas do db
	public function getPessoas()
	{
		$query = $this->db->get('pessoas');
		return $query->result();
	}

	//Resgata uma única pessoa do banco
	public function getPessoa($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('pessoas');

		if($query->num_rows() > 0)
		{
			return $query->row();
		}
		else
		{
			return null;
		}
	}

	//Adiciona cláusula where da query e da update no banco pelo id do indivíduo
	public function editaPessoa($data)
	{
		$this->db->where('id', $data['id']);
		return $this->db->update('pessoas', $data);
	}

	//Insere no banco os dados do indivíduo
	public function inserePessoa($data)
	{
		return $this->db->insert('pessoas',$data);
	}

	//Deleta do banco os dados do indivíduo
	public function deletaPessoa($data)
	{
		return $this->db->delete('pessoas', $data);
	}

}
