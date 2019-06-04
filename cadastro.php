<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Receitas Cult</title>

   
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    
</head>

<body>
    <header>

        <main role="main">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Receitas Cult</h1>
                    <p class="lead text-muted">Trabalho desenvolvido para a aual de Tec Web</p>
                    <p>
                        <a href="index.php" class="btn btn-primary my-2" style="width:300px">Receitas</a>
                        <a href="#" class="btn btn-secondary my-2" style="width:300px">Cadastrar Receita</a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">
                        <form  method="POST">
                                <div class="form-group">
                                  <label for="titulo">Título</label>
                                  <input type="text" class="form-control" id="titulo" name="titulo">
                                </div>
                                <div class="form-group">
                                  <label for="url">URL</label>
                                  <input class="form-control" id="urlimg" name="urlimg" type="text">
                                </div>
                                <div class="form-group">
                                  <label for="receita">Receita</label>
                                  <textarea class="form-control" id="receita" name="receita" rows="8"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" style="width: 100%">Salvar Receita</button>
                              </form>
                </div>
            </div>
            </div>

        </main>

        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="#">Voltar ao Ínicio</a>
                </p>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')
        </script>
</body>
</html>
<?php

    /*Faz conexão com o banco de dados*/
    $connect = mysqli_connect('localhost','root');
    /*Escolhe o banco de dados a ser conectado*/
    $db = mysqli_select_db($connect,'receitasweb');
    /*Váriaveies do formulário*/

    
    /*Insere dados na tabela de receitas*/
 
        if($_POST){
        $titulo = $_POST['titulo'];
        $urlimg = $_POST['urlimg'];
        $receita = $_POST['receita'];

        $query = "INSERT INTO receitas (titulo,urlimg,receita) VALUES ('$titulo','$urlimg','$receita')";
        /*Executa a query. É necessário passar a string de conexão com o banco*/
        $insert = mysqli_query($connect,$query) or die (mysqli_error($connect));;
        /*Se a consulta executou com sucesso*/
        if($insert){
            echo"<script language='javascript' type='text/javascript'>
                    alert('Receita cadastrado com sucesso!');window.location.href='index.php'
                </script>";
        }else{
            echo"<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse receita');window.location
            .href='cadastro.php'</script>";
        }
    }
    
?>