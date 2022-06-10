<html>
    <head>
        <title>Aleatorio</title>
    </head>
</html>
<?php
    $num = rand(1,100);
    echo "el numero aleatorio es: " . $num;
    echo "<br>";
    echo "<br>";
    if ($num>=50)
    {
        echo "es mayor a 50";
    }
    else {
        echo "no es mayor a 50";
    }
?>