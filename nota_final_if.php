<html>
    <head>
        <title>Nota Final If</title>
    </head>
    <body>
        <?php
            $nota = rand(1,10);
            echo "La nota es: " . $nota . "<br>";
            if($nota<4){
                echo "El alumno debe rendir en marzo.";
            }else{if($nota<7){
                echo "El alumno debe rendir en diciembre.";
            }else{
                echo "El alumno esta aprobado.";
            }}
        ?>
    </body>   
</html>