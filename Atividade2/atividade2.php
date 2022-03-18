<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    
<h1>XYZ Seguros</h1>
<h3>Sua cotação!</h3>

<?php

    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $sexo = $_REQUEST['sexo'];
    $valorveiculo = $_REQUEST['valor'];
    $anofabricacao = $_REQUEST['AnoFabricacao'];

    if($anofabricacao == 1){
       $valorapolice = $valorveiculo + ($valorveiculo * 5 / 100);
        
        }elseif($anofabricacao == 2){
            $valorapolice = $valorveiculo + ($valorveiculo * 10 / 100);

                }elseif($anofabricacao == 3){
                    $valorapolice = $valorveiculo + ($valorveiculo * 20 / 100);
    }else{
        echo "[ERROR]";
    }

    

    if($idade == 1 || $idade == 4){
        $acrecimoidade = $valorapolice * 12 / 100;
        
    }elseif($idade == 2){
        $acrecimoidade = null;

    }elseif($idade == 3){
        $acrecimoidade = $valorapolice * 4 / 100;
    }else {
        echo "[ERROR] verificar informações";
    }


    if($sexo == 'feminino'){
        $totalp = $acrecimoidade + $valorapolice;
        $porcent = $totalp * 10 * 0.01;
        $total = $totalp - $porcent;

            }elseif($sexo == 'masculino'){
                $total = $acrecimoidade + $valorapolice;

                    }else {
                        echo "[ERROR] Verifique as informações e tente novamente";
                    }
    
        
        echo "Olá ".$nome. ", <br /><br />O valor da sua apólice é de R$". number_format($total, 2);
?>

</body>
</html>