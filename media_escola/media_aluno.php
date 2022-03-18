<html>
    <head>
        <title>Calculo da média Escola</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <?php
            $n1 = $_REQUEST["nota1"];
            $n2 = $_REQUEST["nota2"];

            $media = ($n1 + $n2) / 2;

            if ($media < 6) {
                echo "A nota é ". $media. " <br>O aluno(a) foi Reprovado(a)";
            }
            elseif ($media >= 6 and $media <= 10) {
                echo "A nota é ". $media. "<br> O aluno(a) foi Aprovado(a)";
            }
            else {
                echo $media."[ERRO] ocorreu algum erro na inserção das notas. Verifique e tente novamente.";
            }
        ?>
    </body>
    </html>