<html>
<head>
  		<title>Problema</title>
</head>
<body>
  		<form action="suma_o_resta(checkbox).php" method="post">
   		Ingrese primer valor:
    		<input type="number" name="valor1">
    		<br>
    		Ingrese segundo valor:
    		<input type="number" name="valor2">
    		<br>
    		<input type="checkbox" name="check1">Sumar
    		<br>
    		<input type="checkbox" name="check2">Restar
    		<br>
    		<input type="submit" name="operar">
  		</form>
        <?php

            if (isset($_REQUEST['check1'])) 
            {
                    $suma = $_REQUEST['valor1'] + $_REQUEST['valor2'];
                    echo "La suma es: " . $suma . "<br>";
            }
            if (isset($_REQUEST['check2'])) 
            {
                    $resta = $_REQUEST['valor1'] - $_REQUEST['valor2'];
                    echo "La resta es: " . $resta;
            }
        ?>
</body>
</html>
