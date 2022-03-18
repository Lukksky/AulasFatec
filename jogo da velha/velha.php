<html>
    <head>
        <title>Jogo da velha</title>
        <meta charset= "UTF-8">

    </head>

    <body>
        <?php
                $velha = array();
                $velha[0][0] = "X";
                $velha[0][1] = "0";
                $velha[0][2] = "X";
                $velha[1][0] = "0";
                $velha[1][1] = "0";
                $velha[1][2] = "X";
                $velha[2][0] = "X";
                $velha[2][1] = "X";
                $velha[2][2] = "0";

                for ($i = 1; $i < 3; $i++) {
                    for ($j = 0; $j < 3; $j++) {
                        echo $velha [$i][$j]. " ";
                    }
                    echo "<br />";
                }
        ?>
    </body>

    </html>