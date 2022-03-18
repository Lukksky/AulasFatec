<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>
<body background= "img/pizzaria2.png">
<font color = "white">
    <h1>Pizzaria do Lucao</h1>

    <?php
        $nome = array("(Nenhum)", "Muçarela", "Calabresa", "Catupiry", "Aliche", "Frango", "Milho", "Atum",
        "Tomate", "Presunto" );
        $preco = array(0.00, 9.00, 5.50, 6.50, 8.00, 6.00, 4.50, 7.00, 5.00, 8.00);
        $total = 0.0;
        $resposta = "A sua pizza de: ";

        for ($i = 1; $i <= 13; $i++ ) {
            if(isset($_REQUEST['ingrediente'.$i])) {
                $ingrediente = $_REQUEST['ingrediente' . $i];
                $total = $total + $preco[$ingrediente];
                $resposta = $resposta. $nome[$ingrediente]. ", ";
            }
        }
            $resposta = $resposta. " irá custar R$ ";
            echo $resposta. number_format($total, 2); 
?>

    </font>
</body>
</html>