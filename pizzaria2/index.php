<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
</head>
<body background= "img/pizzaria2.png">
<font color= "white">
    <h1>Pizzaria do Lucão</h1>
    <h2>Monte sua pizza</h2>
    <p>Ingredientes: </p>

    <p>

    <form action="resultado.php" method="POST">
        <input type="checkbox" name="ingrediente1" value="1">Muçarela<br />
        <input type="checkbox" name="ingrediente2" value="2">Calabresa<br />
        <input type="checkbox" name="ingrediente3" value="3">Catupiry<br />
        <input type="checkbox" name="ingrediente4" value="4">Aliche<br />
        <input type="checkbox" name="ingrediente5" value="5">Frango<br />
        <input type="checkbox" name="ingrediente6" value="6">Milho<br />
        <input type="checkbox" name="ingrediente7" value="7">Atum<br />
        <input type="checkbox" name="ingrediente8" value="8">Tomate<br />
        <input type="checkbox" name="ingrediente9" value="9">Presunto<br />
        <input type="checkbox" name="ingrediente10" value="10">Siciliana<br />
        <input type="checkbox" name="ingrediente11" value="11">Portuguesa<br />
        <input type="checkbox" name="ingrediente12" value="12">Dois queijos<br />
        <input type="checkbox" name="ingrediente13" value="13">A moda do chef<br />

        </p>

        <input type="submit" value="Calcular preço">

    </form>
</font>
</body>
</html>