<?php
     /*Faz conexão com o banco de dados*/
     $connect = mysqli_connect('localhost','root');
     /*Escolhe o banco de dados a ser conectado*/
     $db = mysqli_select_db($connect,'receitasweb');
      /*Insere dados na tabela de receitas*/
    $query = "SELECT TITULO,URLIMG,RECEITA,VOTOS FROM RECEITAS";
    $dados = mysqli_query($connect,$query) or die(mysqli_error($connect));
    $linha = mysqli_fetch_assoc($dados);
    // calcula quantos dados retornaram
    $total = mysqli_num_rows($dados);
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
            echo '<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                            <img src="'.$linha['URLIMG'].'" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text">
                                        <h3>'.$linha['TITULO'].'</h3>
                                        <br/>
                                        <p>'.$linha['VOTOS'].'Vezes favoritada</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary alig">Favoritar Receitas</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary alig">Abrir Receitas</button>
                                            </div>
                                            <!-- <small class="text-muted">9 mins</small>-->
                                        </div>
                                </div>
                            </div>';
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysqli_fetch_assoc($dados));
    // fim do if 
    }

    echo '<div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                            <img src="'.$linha['URLIMG'].'" width="100%" height="225">
                                <div class="card-body">
                                    <p class="card-text">
                                        <h3>'.$linha['TITULO'].'</h3>
                                        <br/>
                                        <p>'.$linha['VOTOS'].'Vezes favoritada</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-secondary alig">Favoritar Receitas</button>
                                                <button type="button" class="btn btn-sm btn-outline-secondary alig">Abrir Receitas</button>
                                            </div>
                                            <!-- <small class="text-muted">9 mins</small>-->
                                        </div>
                                </div>
                            </div>'




?>


<h1><php? echo $linha['TITULO'] ?></php></h1>
                            <p><php? echo $linha['RECEITA'] ?></p>
<?php  echo  "<img style='width:300px;height:300px' src='".$linha[URLIMG]."'>?>"
<?php  echo "<h1>".$linha['TITULO']."</h1>"?>
<?php echo "<p>".$linha['RECEITA']."</p>" ?>