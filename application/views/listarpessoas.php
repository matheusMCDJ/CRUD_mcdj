<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>CRUD-Cadastro-PF</title>

  </head>
  <body>

    <div class="container">

    	
            <!--Cabeçalho -->
            <div class="d-flex justify-content-around">
                
                <div>
                    <h1 class="text-left">Lista de pessoas</h1>
                </div>
            <!--Botao para ir para a pagina de adicionar pessoas-->
                <div>
                    <a href="pessoas/add" class="btn btn-success" style="margin-top: 10px"><i class="fas fa-user-plus"></i> Nova Pessoa</a>
                </div>

            </div>

            <!--Tabela -->
    		<table class="table table-bordered">

    			<thead>
    				<tr>
    					<th class="text-center">Pessoa</th>
    					<th class="text-center">CPF</th>
    					<th class="text-center">Telefone</th>
                        <th class="text-center">E-mail</th>
                        <th class="text-center">Ações</th>
    				</tr>
    			</thead>

                <!--Printa os campos de maior importancia do banco -->
	    		<?php
	    			$contador = 0;
	    			foreach ($pessoas as $pessoa)
	    			{
	    				echo '<tr>';
	    					echo '<td class = "text-center">'.$pessoa->nome.'</td>';
	    					echo '<td class = "text-center">'.$pessoa->cpf.'</td>';
	    					echo '<td class = "text-center">'.$pessoa->telefone.'</td>';
                            echo '<td class = "text-center">'.$pessoa->email.'</td>';
	    				   //Coloca os botões
                            echo '<td class = "text-center"> <a href="pessoas/visualizar/'.$pessoa->id.'" class="btn btn-outline-primary" title="Consultar"><i class="fab fa-readme"></i></a> <a href="pessoas/atualizar/'.$pessoa->id.'" class="btn btn-outline-warning" title="Atualizar"><i class="fas fa-pencil-alt"></i></a> <button data-id="'.$pessoa->id.'" class="btn btn-outline-danger apagar" title="Apagar"><i class="far fa-trash-alt"></i></button>  </td>';
	    				echo '</tr>';
	    			$contador++;
	    			}
	    		?>
    		</table>

    		<div class="row">
    			<div class="col-md-12">
    				Total de Registros: <?php echo $contador ?>
    				
    			</div>
    		</div>

    	

    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b114e33623.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Jquery da mascara -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>  
    <!--Crud.js -->
    <script src="http://localhost/ci/assets/js/crud.js"></script>
  
  </body>
</html>