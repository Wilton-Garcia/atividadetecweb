<?php
     /*Faz conexão com o banco de dados*/
     $connect = mysqli_connect('localhost','root');
     /*Escolhe o banco de dados a ser conectado*/
     $db = mysqli_select_db($connect,'receitasweb');
     


     

     function Voto($codigo,$connect)
     {
          $query = "SELECT VOTOS FROM RECEITAS WHERE CODIGO =".$codigo;
          $qntVotos = mysqli_query($connect,$query) or die(mysqli_error($connect));
          $qntVotos = mysqli_fetch_assoc($qntVotos);
          $qntVotos = $qntVotos['VOTOS'];
          $qntVotos = $qntVotos + 1;
          $query = "UPDATE RECEITAS SET VOTOS = ".$qntVotos." WHERE CODIGO =".$codigo;
          mysqli_query($connect,$query) or die(mysqli_error($connect));
       echo"<script language='javascript' type='text/javascript'>
               alert('Voto computado com sucesso');window.location
          .href='cadastro.php'</script>";
     }

     Voto($_GET["codigo"],$connect);
     
?>
