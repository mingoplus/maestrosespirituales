<html>
    <head>
        <title>Un programa mas util que Hola Mundo</title>
    </head>
    <body>
        <h2>Sitio xd</h2>
        <?php
        $dia = date("d");
        if ($dia<=10)
        {
            echo "sitio activo";
        }
        else
        {
            echo "sitio inactivo";
        }
        ?>
    </body>
</html>