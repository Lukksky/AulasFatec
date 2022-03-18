<html>
    <head>
        <title>Descrição dos Produtos</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <?php
            $produto1 = $_REQUEST["prod1"];
            $preco1 = $_REQUEST["preco1"];
            $produto2 = $_REQUEST["prod2"];
            $preco2 = $_REQUEST["preco2"];
            $produto3 = $_REQUEST["prod3"];
            $preco3 = $_REQUEST["preco3"];

            echo "O primeiro produto selecionado foi: ". $produto1. "<br> O segundo produto foi: ". $produto2.
            " <br>E o terceiro produto escolhido foi: ". $produto3. "<br><br>";

            echo "O menor valor encontrado foi de R$" .min($preco1,$preco2, $preco3). ",00";
           


        ?>
    </body>

    </html>