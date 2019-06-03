<?php
    /*Faz conexão com o banco de dados*/
    $connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
    /*Váriaveies do formulário*/
    $titulo = $_POST['titulo'];
    $url = $_POST['url']);
    $receita = $_POST['receita']);
    /*Insere dados na tabela de receitas*/
    $query = "INSERT INTO usuarios (titulo,url,senha) VALUES ('$titulo','$url','$receita')";
    /*Executa a query. É necessário passar a string de conexão com o banco*/
    $insert = mysql_query($query,$connect);
    /*Se a consulta executou com sucesso*/
    if($insert){
        echo"<script language='javascript' type='text/javascript'>
                alert('Usuário cadastrado com sucesso!');window.location.href='cadastro.html'
            </script>";
?>