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
        <select name="dias">
        <?php
        for($i=0;$i<7;$i++){  
              echo "<option value='".$diasSemana[$i]."'>".$diasSemana[$i]."</option>";
          }
        ?>
        </select>
        <select name="meses">
        <?php
        for($i=0;$i<12;$i++){  
              echo "<option value='".$mesesAno[$i]."'>".$mesesAno[$i]."</option>";
          }
        ?>
        </select>
        <input type="submit" value="Enviar">
        </form>
        
    </body>
</html>