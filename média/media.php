<html>
    <head>
        <title>Calculo de média</title>
        <meta charset= "UTF-8">

    </head>

    <body>
      <?php
            $nmr1 = $_REQUEST["nmr1"];
            $nmr2 = $_REQUEST["nmr2"];
            $nmr3 = $_REQUEST["nmr3"];
            $nmr4 = $_REQUEST["nmr4"];

            $media = $nmr1 + $nmr2 + $nmr3 + $nmr4 / 4;

            echo "A média é igual a ". $media;
      ?>
    </body>
</html>