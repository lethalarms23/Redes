<?php
    $numero = rand(1,7);
     switch($numero){
         case 1: echo "domingo";
            break;
        case 2: echo "segundo";
            break;
        case 3: echo "terça";
             break;
         case 4: echo "quarta";
             break;
          case 5: echo "quinta";
              break;
         case 6: echo "sexta";
              break;
        case 7: echo "sabado";
            break;
        default: echo "Dia Inválido";
            break;
    }
?>