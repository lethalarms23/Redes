<!DOCTYPE html>
<html>
    <head>
        <title>
            Projeto Módulo 5
        </title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if($_POST['nome'] != null){
                $nome = $_POST['nome'];
                $datanasc = new Datetime($_POST['datanasc']);
                $dataAtual = new Datetime(date('Y-m-d'));
                $diff = $dataAtual->diff($datanasc);
                printf('Sua idade: %d anos, %d meses, %d dias <br>', $diff->y, $diff->m, $diff->d);
                if($diff->y >= 18){
                    echo "Já tem idade para votar <br>";
                }
                if($_POST['nome'] == 'Ana' && date_format($datanasc, "Y") == 2000){
                    session_name('VariaveisNomeIdade');
                    session_start();
                    $_SESSION['Nome'] = $nome;
                    $_SESSION['Idade'] = $_POST['datanasc'];
                    echo "<a href='reservado.php'>Ir para página reservada</a>";
                }
            }
            else{
                include 'ex6.php';
            }
            
        ?>
    </body>
</html>