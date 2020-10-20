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

    <title>Visualizar</title>

  </head>
  <body>

    <div class="container">

            <h1>Visualizando Pessoa Física</h1> 
            <!--Link para voltar para a página inicial-->
            <ol class="breadcrumb">
                <li><a href="/ci"><div class="text-danger font-weight-bold">Início</div> </a></li>
                &nbsp;/&nbsp;
                <li class="active"> <?php echo $nome; ?></li>
            </ol>

            <!--Lista para mostrar o individuo selecionado (read) -->
            <ul class="list-group">
                <li class="list-group-item"><label class="text-primary">Nome:</label> <?php echo $nome; ?></li>
                <li class="list-group-item"><label class="text-primary">CPF:</label> <?php echo $cpf; ?></li>
                <li class="list-group-item"><label class="text-primary">Telefone:</label> <?php echo $telefone; ?></li>
                <li class="list-group-item"><label class="text-primary">Data de Nascimento:</label> <?php echo date('d/m/Y',strtotime($data_nascimento)); ?></li>
                <li class="list-group-item"><label class="text-primary">E-mail:</label> <?php echo $email; ?></li>
                <li class="list-group-item"><label class="text-primary">Endereço:</label> <?php echo $endereco; ?></li>
                <li class="list-group-item"><label class="text-primary">Número:</label> <?php echo $numero; ?></li>
                <li class="list-group-item"><label class="text-primary">Complemento:</label> <?php echo $complemento; ?></li>
                <li class="list-group-item"><label class="text-primary">Cidade:</label> <?php echo $cidade; ?></li>
            </ul>
 
                <br >
            
            <br >
            

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
