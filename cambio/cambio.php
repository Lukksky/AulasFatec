<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Câmbio</title>
</head>
<body>
    <h1>Conversão de valores de moedas</h1>

    <form action="cambio.php" method="POST">
        Digite um valor:
        <p><input type="text" name="valor"></p>
        <p>Converter de:</p> 

        <input type="radio" name="conversao" value="1" checked>
        Reais(R$) para Dólar(US$)<br />

        <input type="radio" name="conversao" value="2" >
        Dólar(US$) para Reais(R$)<br />

        <input type="radio" name="conversao" value="3" >
        Reais(R$) para Euro(&euro;)<br />

        <input type="radio" name="conversao" value="4" >
        Euro(&euro;) para Real(R$)<br />

       <p> <input type="submit" value="Calcular"></p>


    </form>
    
    <?php

        if(isset($_REQUEST['valor']) and isset($_REQUEST['conversao'])) {
            $val = $_REQUEST['valor'];
            $conv = $_REQUEST['conversao'];
            $cotacao_euro = 6.18;
            $cotacao_dolar = 5.24;
            $origem = " ";
            $destino = " ";
            $res = 0.00;
        
            if ($conv == 1) {
                $res = $val / $cotacao_dolar;
                $origem = "R$";
                $destino = "US$";
                            }elseif ($conv == 2) {
                                 $res = $val * $cotacao_dolar;
                                 $origem = "US$";
                                 $destino = "R$";

                                                }elseif ($conv == 3) {
                                                 $res = $val / $cotacao_euro;
                                                 $origem = "R$";
                                                  $destino = "&euro;";
                                                                    }else {
                                                                        $res = $val * $cotacao_dolar;
                                                                        $origem = "&euro;";
                                                                        $destino = "R$";
                                                                            }
                                                                            echo $origem. " ". number_format($val, 2). " é igual a ". 
                                                                            $destino. " ". number_format($res, 2);

                                                                        }
    ?>
</body>
</html>