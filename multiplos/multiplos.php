<html>
    <head>
        <title>Vetores</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <h1>Vetores (Multiplos de 2 e 3)</h1>
    <p>3)  Considerando um vetor contendo 200 números inteiros 
com valores entre 1 e 1000, gerado aleatoriamente, exibir 
quantos e quais números são múltiplos de 2 e de 3 
simultaneamente.
</p>

<?php
$num = array();
$cont = 0;
for ($i = 0; $i < 200; $i++ ) {
    $num[$i] = rand(1, 1000);
    if (($num[$i] % 2 == 0) and ($num[$i] % 3 == 0)) {
        echo $num[$i];
        $cont++;
    }
}

echo "o maior numero é ". $cont; 
?>
</body>

</html>