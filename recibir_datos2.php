<html>
<head>
  		<title>pipo2</title>
</head>
<body>
   <?php
  		echo "El nombre ingresado es: " . $_REQUEST['nombre'] . ". Y su edad es: " . $_REQUEST['edod'] . "<br>" . $_REQUEST['nombre'];
        if($_REQUEST['edod']<18){
            echo " es menor de edad.";
        }else{
            echo " es mayor de edad.";
        }
   ?>
</body>
</html>
