<html>
    <head>
        <title>Nota de Concepto</title>
    </head>

    <body>
        <?php
        $notaa = rand(1,10);
        $notab = rand(1,10);
        $notac = rand(1,10);
        $nota = $notaa+$notab+$notac;
        $promedio=$nota/3;
        if($promedio<7){
            echo "el alumno desaprobo con " . $promedio;
        }else{
            echo "el alumno aprobo con " . $promedio;
        }
        ?>
    </body>
</html>