<?php

    /*Faz conexão com o banco de dados*/
    $connect = mysqli_connect('localhost','root');
    /*Escolhe o banco de dados a ser conectado*/
    $db = mysqli_select_db($connect,'receitasweb');
    /*Váriaveies do formulário*/
    $titulo = $_POST['titulo'];
    $urlimg = $_POST['urlimg'];
    $receita = $_POST['receita'];
    /*Insere dados na tabela de receitas*/
    $query = "INSERT INTO receitas (titulo,urlimg,receita) VALUES ('$titulo','$urlimg','$receita')";
    /*Executa a query. É necessário passar a string de conexão com o banco*/
    $insert = mysqli_query($connect,$query) or die (mysqli_error($connect));;
    /*Se a consulta executou com sucesso*/
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html'
            </script>";
    }else{
        echo"<script language='javascript' type='text/javascript'>
        alert('Não foi possível cadastrar esse usuário');window.location
        .href='cadastro.html'</script>";
    }
?>