<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras fechamento</title>
</head>
<body>
    <?php
            $produtos = $_REQUEST['produto'];
            $quantidades = $_REQUEST['quantidade'];
            $valorunitario = $_REQUEST['valorunit'];

            //echo "Produto é ".$produtos." e a quantidade é ".$quantidades. " e o preço é ". number_format($valorunitario, 2);
            $precototal = $valorunitario * $quantidades;
            $bruto = $valorunitario * $quantidades;

            if($precototal > 1250){
                
                $desconto = $precototal * 4.5 / 100;
                $precototal = $bruto - $desconto;
               //$precototal -= $porcent;
                echo "acima de 1250<br/>".$desconto;
            
            }else{
                $desconto = null;
            }
            //echo "O preço total é: ". number_format($precototal, 2);

        if($precototal < 500){
                $valorimposto = $bruto * 2.5 / 100;
                //echo $valorimposto;
                //echo "abaixo de 500<br/>".$valorimposto;
            }elseif($precototal >= 500 and $precototal < 1500){
                $valorimposto = $bruto * 5 / 100;
                //echo "acima ou igual a 500 e menor que 1500<br/>".$valorimposto;
            }elseif($precototal >= 1500 and $precototal < 5000){
                $valorimposto = $bruto * 8.25 / 100;
                //echo "maior ou igual a 1500 e menor que 5000<br/>".$valorimposto;
            }elseif($precototal >= 5000){
                $valorimposto = $bruto * 25.125 / 100;
               // echo "acima ou igual a 5000<br/>".$valorimposto;
            }

            $precofinal = $bruto + $valorimposto - $desconto;
            $total = $precofinal + $bruto;

            echo "O valor final do produto é R$". number_format($precofinal, 2);
    ?>
</body>
</html>