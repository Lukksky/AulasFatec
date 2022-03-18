<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de temperatura</title>
</head>
<body>

<form action="temperatura.php" method="POST">

    <p>
        Digite a temperatura:
        <input type="text" name="temperatura">
    </p>

    <p>Escolha a conversão desejada: </p>
    <p>
        <input type="radio" name="conversao" value="1" checked>
        Celsius para Farenheint<br />

        <input type="radio" name="conversao" value="2" checked>
        Farenheint para Celsius<br />

        <input type="radio" name="conversao" value="3" checked>
        Celsius para Kelvin<br />

        <input type="radio" name="conversao" value="4" checked>
        Kelvin para Celsius<br />

        <input type="radio" name="conversao" value="5" checked>
        Farenheint para Kelvin<br />

        <input type="radio" name="conversao" value="6" checked>
        Kelvin para Farenheint<br />

        </p>
        <p>
            <input type="submit" value="Calcular">
        </p>
   

</form>
<?php
    if(isset ($_REQUEST['temperatura']) and isset($_REQUEST['conversao'])) {
        $temp = $_REQUEST['temperatura'];
        $conv = $_REQUEST['conversao'];
        $res = 0.0;
        $origem = " ";
        $destino = " ";

        switch ($conv) {
            case 1:
                $res = $temp * 1.8 + 32;
                $origem = "Celsius";
                $destino = "Farenheint";
                break;

                case 2: 
                    $res = ($temp - 32) / 1.8;
                    $origem = "Farenheint";
                    $destino = "Celsius";
                    break;

                    case 3: 
                        $res = $temp + 273.15;
                        $origem = "Celsius";
                        $destino = "Kelvin";
                        break;

                        case 4: 
                            $res = $temp - 273.15;
                            $origem = "Kelvin";
                            $destino = "Celsius";
                            break;

                            case 5: 
                                $res = ($temp + 459.67) / 1.8;
                                $origem = "Farenheint";
                                $destino = "Kelvin";
                                break;

                                case 6: 
                                    $res = ($temp - 459.67) / 1.8;
                                    $origem = "Kelvin";
                                    $destino = "Farenheint";
                                    break;


        }
        echo "<strong>".number_format($temp,1). " ". $origem. " equivale a ". number_format($res, 1). " ". $destino. "</strong>";
    }

?>
    
</body>
</html>