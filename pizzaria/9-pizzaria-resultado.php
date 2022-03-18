<html>

 <head>

 <title>Pizzaria</title>
 <meta charset="UTF-8">

 </head>
<h1>Pizzaria</h1>

 <body>
        <?php
            $nome = array(("Nenhum"), "Muçarela", "Calabresa", "Catupiry", "Aliche", "Frango", "Milho",
            "Atum", "Tomate", "Presunto");
            
            $preco = array(0.00, 9.00, 5.50, 6.50, 8.00, 6.00, 4.50, 7.00, 5.00, 8.00);
            $total = 0;
            $resposta = "A sua pizza de ";
            for ($i = 1; $i < 5; $i++) {
                $ingrediente = $_REQUEST["Ingrediente". $i];
                if ($ingrediente > 0) {
                    $total += $preco[$ingrediente];
                    $resposta .= $nome[$ingrediente]. ", ";
                }
            }
            $resposta .= "irá custar R$ ";
            echo $resposta. $total. ",00";
        ?>
        <p>
            <input type="button" value= "Voltar" onclick= 
            "javascript:history.back();">
        </p>
 </body>


 </html>