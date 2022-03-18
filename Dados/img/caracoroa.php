<html>
    <head>
        <title>Jogo de Dados</title>
        <meta charset="UTF-8">
        <style>
            
        </style>
    </head>
<body>
    <h1>Cara ou Coroa</h1>

    <p>Criar um programa que mostre uma moeda lançada 100 vezes e ao final mostrar quantas caras e 
        quantas coroas foram sorteadas
    </p>

    <?php

       $cont1 = 0;
       $cont2 = 0;
        for ($i = 0; $i < 5; $i++) {
            $lado = rand (1, 2);
            echo "<img src= 'Moeda_". $lado. ".jpg'>";
            if ($lado == 1) {
                $cont1++;
                
                }else{
                    $cont2++;
                }
        }
echo "<br><br>Resultado <br>Cara repetiu: ". $cont1. " vezes".
                "<br>Coroa repetiu: ". $cont2. " vezes";

    ?>
</body>

</html>