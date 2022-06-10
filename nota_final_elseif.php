<html>
    <head>
        <title>Nota Final ElseIf</title>
    </head>
    <body>
        <?php
            $nota = rand(1,10);
            echo "El alumno tiene: " . $nota . "<br>";
            if($nota<4){
                echo "El alumno debe rendir en marzo.";
            }elseif($nota<7){
                echo "El alumno debe rendir en diciembre.";
            }else{
                echo "El alumno esta aprobado.";
            }
        ?>
    </body>   
</html>