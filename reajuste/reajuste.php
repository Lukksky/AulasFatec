<html>
    <head>
        <title>Reajuste salarial</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <?php
            $salario = $_REQUEST["salar"];
            $categoria = $_REQUEST["categ"];

            if ($categoria == "a" or $categoria == "A" or $categoria == "c" or $categoria == "C") {
                $porcent = $salario * 10 / 100;
                echo $salario + $porcent;
            }
            elseif ($categoria == "b" or $categoria == "B" or $categoria == "d" or $categoria == "D" or $categoria == "e" or $categoria == "E") {
                $porcent = $salario * 15 / 100;
                echo $salario + $porcent;
            }
            elseif ($categoria == "f" or $categoria == "F" or $categoria == l or $categoria == L) {
                $porcent = $salario * 25 / 100;
                echo $salario + $porcent;
            }
            elseif ($categoria == "g" or $categoria == "G" or $categoria == "h" or $categoria == "H") {
                $porcent = $salario * 35 / 100;
                echo $salario + $porcent;
            }elseif ($categoria == "i" or $categoria == "I" or $categoria == "j" or $categoria == "J") {
                $porcent = $salario * 50 / 100;
                echo $salario + $porcent;
            }
            else {
                echo "[ERROR] Verifique as informações e tente novamente.";
            }
        ?>
    </body>

</html>