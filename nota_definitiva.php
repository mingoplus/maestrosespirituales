<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota definitiva</title>
</head>
<body>

    <center>
    <?php

    $n=rand(1,10);
    
    echo "La nota del alumno es: " . $n . "<br>";

        if($n<4)
        {

             echo "El alumno esta aplazado";

        }elseif($n<6)
        {

            echo "El alumno es regular";

        }elseif($n<8)
        {

            echo "El alumno es bueno";

        }elseif($n<10)
        {

            echo "El alumno es muy bueno";

        }else
        {

            echo "El alumno es exelente";

        }

    ?>
    </center>

</body>
</html>