<?php
     /*Faz conexão com o banco de dados*/
     $connect = mysqli_connect('localhost','root');
     /*Escolhe o banco de dados a ser conectado*/
     $db = mysqli_select_db($connect,'receitasweb');

     function Voto($codigo)
     {
    $query = "SELECT VOTOS FROM RECEITAS WHERE CODIGO =".$codigo;
    $qntVotos = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $qntVotos = $qntVotos + 1;
    $query = "UPDATE RECEITAS SET VOTOS = ".$qntVotos." WHERE CODIGO =".$codigo
    echo"<script language='javascript' type='text/javascript'>
    alert('Voto computado com sucesso');window.location
    .href='cadastro.html'</script>";
     }

     voto($_GET['codigo']);
?>
