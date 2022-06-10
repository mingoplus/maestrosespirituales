<html>
<head>
  		<title>Problema</title>
</head>
<body>
  		<?php
            $dia = 24; //Se declara una variable de tipo integer.
  			$sueldo = 758.43; //Se declara una variable de tipo double.
  			$nombre = "juan"; //Se declara una variable de tipo string.
                $a=rand(0,1);
                if($a == 0){
                    $exite = false; //Se declara una variable boolean.
                } else {
                    $exite = true;
                }
  			echo "Variable entera:";
  			echo $dia;
  			echo "<br>";
  			echo "Variable double:";
  			echo $sueldo;
  			echo "<br>";
  			echo "Variable string:";
  			echo $nombre;
  			echo "<br>";
  			echo "Variable boolean:";
 			echo $exite;
  		?>
</body>

</html>
 