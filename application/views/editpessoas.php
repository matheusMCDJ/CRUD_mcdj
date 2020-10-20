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

    <title>Editar</title>

  </head>
  <body>

    <div class="container">


            <h1>Editar Pessoa Física</h1> 
            <!--Link para voltar para a página inicial-->
            <ol class="breadcrumb">
                <li><a href="/ci"><div class="text-danger font-weight-bold">Início</div></a></li>
                &nbsp;/&nbsp;
                <li class="active"> Editar</li>
            </ol>

            <!-- Formulário de atualização de cadastro -->
            <form name="form_edit" id="formulario-edit">
                
                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <!-- Input nome da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Nome*</label>
                        <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control">
                    </div>
                </div> 

                <!-- Input cpf da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>CPF*</label>
                        <input type="text" id="cpf" name="cpf" value="<?php echo $cpf; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input telefone da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Telefone*</label>
                        <input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input data de nascimento da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Data de Nascimento</label>
                        <input type="date" name="data_nascimento" value="<?php echo $data_nascimento; ?>" class="form-control">
                    </div>
                </div>                 

                <!-- Input email da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>E-mail*</label>
                        <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input endereco da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Endereço</label>
                        <input type="text" name="endereco" value="<?php echo $endereco; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input numero da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Número</label>
                        <input type="text" name="numero" value="<?php echo $numero; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input complemento da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Complemento</label>
                        <input type="text" name="complemento" value="<?php echo $complemento; ?>" class="form-control">
                    </div>                    
                </div>

                <!-- Input cidade da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Cidade</label>
                        <input type="text" name="cidade" value="<?php echo $cidade; ?>" class="form-control">
                    </div>                    
                </div>

                <br >

                <!-- Botao para enviar formulario -->
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>                    
                </div>

            </form>
            
    		<br >
            <div id="resultado"></div>

    </div> <!--Container-->



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--Jquery da mascara -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>    
    <!--Crud.js -->
    <script src="http://localhost/ci/assets/js/crud.js"></script>


  
  </body>
</html>