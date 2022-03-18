<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade2</title>
</head>
<body>
    <h1>XYZ Seguros</h1>
    <form action="atividade2.php" method="POST">
    <p><strong>Nome do segurado:</strong>
        <input type="text" name="nome">
    </p>

    <p>
        <strong>Idade:</strong>
    </p> 
        <input type="radio" name="idade" value="1" >De 18 a 25 anos<br />
        <input type="radio" name="idade" value="2">De 26 a 40 anos<br />
        <input type="radio" name="idade" value="3">De 41 a 60 anos<br />
        <input type="radio" name="idade" value="4">Acima de 60 anos<br />

<p><strong>Sexo: </strong>
    <select name="sexo">
        <option value="nenhum">(Nenhum)</option> 
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select>
</p>

<p>
    <strong>Valor do veículo:</strong>
    <input type="text" name="valor">
</p>

<p>
    <strong>Ano de fabricação:</strong>
</p>
    <input type="radio" name="AnoFabricacao" value="1">Até 2010<br />
    <input type="radio" name="AnoFabricacao" value="2">De 1990 a 2009<br />
    <input type="radio" name="AnoFabricacao" value="3">Anterior a 1990<br />
<p>
    <input type="submit" value="Calcular">
    </p>

 
</body>
</form>

</html>