<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $j=2;
        $k=2;

        echo "tabla con For <br>";
        echo "<br>";

        for($i=2; $i<=20; $i=$i+2){

            echo $i . "<br>";

        }
        
        echo "<br>";
        echo "tabla con While <br>";
        echo "<br>";

        while($j<=20){

            echo $j . "<br>";
            $j=$j+2;

        }

        echo "<br>";
        echo "tabla con Do/While <br>";
        echo "<br>";

        do{

            echo $k . "<br>";

            $k=$k+2;

        }while($k<=20);

    ?>
    
</body>
</html>