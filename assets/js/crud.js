//Fucoes js

//Funcao submit do formularioadd
$('#formulario').submit(function(e){
	//Get nos campos do formulario
	e.preventDefault();
	$data = {
		//Variavel nome recebe os elementos de nome... da tag input
		nome : $('input[name="nome"]').val(),
		cpf : $('input[name="cpf"]').val(),
		telefone : $('input[name="telefone"]').val(),
		data_nascimento : $('input[name="data_nascimento"]').val(),
		email : $('input[name="email"]').val(),
		endereco : $('input[name="endereco"]').val(),
		numero : $('input[name="numero"]').val(),
		complemento : $('input[name="complemento"]').val(),
		cidade : $('input[name="cidade"]').val()
	}

	//Printa no console os valores da variavel data
	console.log($data)

	//Faz o post dos elementos recuperados da variavel data
	$.ajax({
        url: 'http://localhost/ci/pessoas/salvar',
        dataType: 'json',
        type: 'POST',
        data:$data,
        //Faz o tratamento do resultado do post
    success: function(result)
    {
        if(result.success == true){
            $('#resultado').append('<div class="alert alert-primary alert-dismissible fade show" role="alert">'+result.txt+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');      
			window.setTimeout(function() { window.location.href = 'http://localhost/ci/'; }, 1500);             
        }else{
            console.log(result);
            $('#resultado').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+result.txt+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
        }
    }
    });
});


//Fucao carregar mascaras de cpf e telefone
$(document).ready(function(){
	console.log('qualquer coisa')
	$('#cpf').mask('000.000.000-00', {reverse: false});

	$('#telefone').mask('(00) 00000-0000');

});

//Fucao apagar no banco uma pessoa
$('.apagar').click(function(){

	var confirma = confirm('Deseja realmente excluir essa pessoa?');
	if(confirma == true)
	{
		//Apaga os dados da pessoa no banco
		$.ajax({
        url: 'http://localhost/ci/pessoas/deletar',
        dataType: 'json',
        type: 'POST',
        data:{id:$(this).data('id')},
        //Faz o tratamento do resultado do post
    	success: function(result)
    	{
       	 if(result.success == true){
				window.setTimeout(function() { window.location.href = 'http://localhost/ci/'; }, 2000);             
	    }else{
	            console.log(result);
	            alert('Ocorreu um erro!');
	    }
	}
    });
	}
});


//Funcao atualizar/editar uma pessoa existente
$('#formulario-edit').submit(function(e){
	//Get nos campos do formulario
	//e.preventDefault -> cancela a acao anterior -> robinho passou
	e.preventDefault();
	$data = {
		//Variavel nome recebe os elementos de nome... da tag input
		id : $('input[name="id"]').val(),
		nome : $('input[name="nome"]').val(),
		cpf : $('input[name="cpf"]').val(),
		telefone : $('input[name="telefone"]').val(),
		data_nascimento : $('input[name="data_nascimento"]').val(),
		email : $('input[name="email"]').val(),
		endereco : $('input[name="endereco"]').val(),
		numero : $('input[name="numero"]').val(),
		complemento : $('input[name="complemento"]').val(),
		cidade : $('input[name="cidade"]').val()
	}

	//Printa no console os valores da variavel data
	console.log($data)

	//Faz o post dos elementos recuperados da variavel data
	$.ajax({
        url: 'http://localhost/ci/pessoas/editar',
        dataType: 'json',
        type: 'POST',
        data:$data,
        //Faz o tratamento do resultado do post
    success: function(result)
    {
        if(result.success == true){
            $('#resultado').append('<div class="alert alert-primary alert-dismissible fade show" role="alert">'+result.txt+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');      
			window.setTimeout(function() { window.location.href = 'http://localhost/ci/'; }, 1500);             
        }else{
            console.log(result);
            $('#resultado').append('<div class="alert alert-danger alert-dismissible fade show" role="alert">'+result.txt+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'); 
        }
    }
    });
});