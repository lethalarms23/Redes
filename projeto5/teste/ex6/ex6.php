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
          $diasSemana = array('segunda','terça','quarta','quinta','sexta','sábado','domingo');
          $mesesAno = array('janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro');
        ?>
        <form action="resultado.php" method="post">        
        Nome: <input type="text" name="nome"><br>
        Data: <input type="date" name="datanasc" value="<?php echo date('Y-m-d'); ?>" />
        <input type="submit" value="Enviar">
        </form>
        
    </body>
</html>