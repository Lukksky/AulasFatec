<html>
    <head>
        <title>Produto TV</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <?php   
                $produto = array();
                $produto ["codigo"] = 11;
                $produto ["Descrição"] = "Televisor";
                $produto ["preço"] = 1990.00;
/*
                echo "<strong>Código: </strong>". $produto["codigo"]. 
                "<br /><strong>Descrição: </strong>". $produto["Descrição"].
                "<br /><strong>Preço: </strong>". $produto["preço"];
*/
                 //PARA SIMPLIFICAR PODEMOS USAR OUTRO METODO

                $produto= array("codigo" => 11, "descrição" => "Televisor", "preço" => 1990.00);
                echo "Código: ". $produto["codigo"]. "<br />Descrição: ". $produto["descrição"].
                "<br />Preço: ". $produto["preço"]; 


        ?>
    </body>

    </html>