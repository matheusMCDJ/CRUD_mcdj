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

    <title>Cadastro</title>

  </head>
  <body>

    <div class="container">


            <h1>Cadastrar Pessoa Física</h1> 

            <ol class="breadcrumb">
                <li><a href="/ci"><div class="text-danger font-weight-bold">Início</div> </a></li>
                &nbsp;/&nbsp;
                <li class="active"> Nova pessoa</li>
            </ol>

            <!-- Formulário de novo cadastro -->
            <form name="form_add" id="formulario">
                
                <!-- Input nome da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Nome*</label>
                        <input type="text" name="nome" value="" class="form-control">
                    </div>
                </div> 

                <!-- Input cpf da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>CPF*</label>
                        <input type="text" id="cpf" name="cpf" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input telefone da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Telefone*</label>
                        <input type="text" id="telefone" name="telefone" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input data de nascimento da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Data de Nascimento</label>
                        <input type="date" name="data_nascimento" value="" class="form-control">
                    </div>
                </div>                 

                <!-- Input email da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>E-mail*</label>
                        <input type="text" name="email" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input endereco da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Endereço</label>
                        <input type="text" name="endereco" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input numero da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Número</label>
                        <input type="text" name="numero" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input complemento da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Complemento</label>
                        <input type="text" name="complemento" value="" class="form-control">
                    </div>                    
                </div>

                <!-- Input cidade da pessoa -->
                <div class="row">
                    <div class="col-md-8">
                        <label>Cidade</label>
                        <input type="text" name="cidade" value="" class="form-control">
                    </div>                    
                </div>

                <br >

                <!-- Botao para enviar formulario -->
                <div class="row">
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
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