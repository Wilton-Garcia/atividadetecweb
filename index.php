<?php
     /*Faz conexão com o banco de dados*/
     $connect = mysqli_connect('localhost','root');
     /*Escolhe o banco de dados a ser conectado*/
     $db = mysqli_select_db($connect,'receitasweb');
    /*Insere dados na tabela de receitas*/
    $query = "SELECT CODIGO,TITULO,URLIMG,RECEITA,VOTOS FROM RECEITAS ORDER BY VOTOS DESC";
    $dados = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $linha = mysqli_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <script>
           function votos(codigo) {
            $.ajax({
                url:'votos.php?codigo='+codigo,
                cache: false,
                complete: function(response){
                    $(".row").load("index.php");
                  
                }
                e.preventDefault();
            });
        }
   

 
    $(document).ready(function(){
            $(document).on('click','.btVoto',function()
            {   
                var id = $(this).attr("data-id");
                votos(id);
                
            }
            );	
      });
      
    </script>
   
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
                <div class="container"  id="cont">
                    <h1 class="jumbotron-heading">Receitas Cult</h1>
                    <p class="lead text-muted">Trabalho desenvolvido para a aual de Tec Web</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Receitas</a>
                        <a href="cadastro.php" class="btn btn-secondary my-2">Cadastrar Receita</a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container" id="cont">
                    <div class="row">      
                            <?php
                            
                           
                            if($total > 0) {
                                $codigo = $linha['CODIGO'];
                                // inicia o loop que vai mostrar todos os dados
                                do {
                                    echo '<div class="col-md-4">
                                            <div class="card mb-4 shadow-sm">
                                                <img src="'.$linha['URLIMG'].'" width="100%" height="225">
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            <h3>'.$linha['TITULO'].'</h3>
                                                            <br/>
                                                        <p>'.$linha['VOTOS'].' Vezes favoritada</p>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <div class="btn-group">
                                                                    <button type="button" data-id="'.$linha["CODIGO"].'" class="btn btn-sm btn-outline-secondary alig btVoto">Favoritar Receitas</button>
                                                                <form method="get" action="receita.php">
                                                                    <button name="codigo" data-id="'.$linha["CODIGO"].'" type="submit" class="btn btn-sm btn-outline-secondary alig" value="'.$linha['CODIGO'].'">Abrir Receitas</button>
                                                                </form>
                                                                </div>
                                                                    <!-- <small class="text-muted">9 mins</small>-->
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>';
                                // finaliza o loop que vai mostrar os dados
                                }while($linha = mysqli_fetch_assoc($dados));
                            // fim do if 
                            }
                       
                        ?>
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
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.3.1.min.js"><\/script>')
        </script>
</body>
</html>
