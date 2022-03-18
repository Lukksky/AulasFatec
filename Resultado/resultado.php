<html>
    <head>
        <title>Calculo da Idade</title>
        <meta charset= "UTF-8">

    </head>

    <body>
     <h1>Calcular Idade</h1>
         
         <?php
                $nome = $_REQUEST["nome"];
                $nasc = $_REQUEST["nasc"];
                $atual = date("Y");
                $idade = $atual - $nasc;

    echo $nome. " a sua idade é: ". $idade. " anos.";

        ?>

    </body>
</html>