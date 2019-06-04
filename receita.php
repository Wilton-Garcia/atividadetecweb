<?php
    $codigo = $_GET['codigo'];
    $connect = mysqli_connect('localhost','root');
    /*Escolhe o banco de dados a ser conectado*/
    $db = mysqli_select_db($connect,'receitasweb');
     /*Insere dados na tabela de receitas*/
   $query = "SELECT TITULO,URLIMG,RECEITA,VOTOS FROM RECEITAS WHERE CODIGO = ".$codigo;
   $linha=mysqli_fetch_array(mysqli_query($connect,$query));
?>
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
                        <a href="index.php" class="btn btn-primary my-2">Receitas</a>
                        <a href="cadastro.php" class="btn btn-secondary my-2">Cadastrar Receita</a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <div>   
                                                   
                            <?php  echo  "<img style='width:300px;height:300px' src='".$linha['URLIMG']."'>" ?>
                        </div>
                        <div style="margin-left: 2%"  style="border: solid">
                            <?php  echo "<h1>".$linha['TITULO']."</h1>"?>
                            <?php echo "<p>".$linha['RECEITA']."</p>" ?>
                        </div>
                        <br/>
                        <button type="button" class="btn btn-primary" style="width: 100%; margin-top: 2% ">Voltar</button>
                             
                    </div>
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