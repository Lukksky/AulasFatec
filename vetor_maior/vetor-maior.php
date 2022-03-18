<html>
    <head>
        <title>Vetores</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <h1>Vetores (Maior elemento)</h1>
    <p>1) Considerando um vetor contendo 200 números inteiros 
com valores entre 1 e 1000, gerado aleatoriamente, exibir 
o valor do maior elemento armazenado no vetor.</p>

<?php
$num = array();
$maior = 0;
for ($i = 0; $i < 200; $i++ ) {
    $num[$i] = rand(1, 1000);
    if ($num[$i] > $maior) {
        $maior = $num[$i];
    }
}

echo "o maior numero é ". $maior; 
?>
</body>

</html>