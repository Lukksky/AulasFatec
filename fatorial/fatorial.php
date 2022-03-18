<html>
    <head>
        <title>Tarefa 1 - Fatorial</title>
        <meta charset= "UTF-8">

    </head>
   
    <body>
        <?php
                $fator = $_REQUEST["nmrfator"];
               $cont = 1;
               echo $fator;
               while ($fator > 1) {
                   $cont *= $fator;
                   $fator--;

                   echo " x ". $fator;   
               }
               echo " = " .$cont;
        ?>
               
    </body>

</html>