<html>
    <head>
        <title>Jogo de Dados</title>
        <meta charset="UTF-8">
        <style>
            
        </style>
    </head>
    <body>
        <h1>Jogo de Dados</h1>
        <?php
    $cont1 = 0;
    $cont2 = 0;
    $cont3 = 0;
    $cont4 = 0;
    $cont5 = 0;
    $cont6 = 0;   

    for ($i = 0; $i < 10; $i++) {

 
            $lado = rand (1, 6);
            echo "<img src= 'img/Dado_". $lado. ".jpg'>";
    if ($lado == 1) {
        $cont1++;
    
        }elseif ($lado == 2){
        $cont2++;
        
            }elseif ($lado == 3){
                $cont3++;
            
                }elseif ($lado == 4) {
                    $cont4++;
                
                    }elseif ($lado == 5) {
                        $cont5++;
                    
                        }elseif ($lado == 6) {
                            $cont6++;
                        
                        }
                    }
    echo "<br><br>Resultado:<br> <br>Lado 1: ". $cont1.
    "<br>Lado 2: ". $cont2.
    "<br>Lado 3: ". $cont3.
    "<br>Lado 4: ". $cont4.
    "<br>Lado 5: ". $cont5.
    "<br>Lado 6: ". $cont6;
        
       ?>
    </body>
</html>