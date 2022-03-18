<html>
    <head>
        <title>Produtos</title>
        <meta charset= "UTF-8">

    </head>

<body>
    <h1>Produtos</h1>

    <?php
            $produto = $_REQUEST["produto"];
            $quantidade = $_REQUEST["quantidade"];
            $unidade = $_REQUEST["unit"];
            $desconto = $_REQUEST["desc"];
            $total = ($quantidade * $unidade) - $desconto;

            echo "O valor final do produto:<br><br> ". $produto. "<br><br> é de R$". $total;

?>
</body>

</html>