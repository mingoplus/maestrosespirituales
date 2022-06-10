<html>
<head>
  		<title>pipo2</title>
</head>
<body>
  		<form method="post" action="prueba1.php">

    		Ingrese a:
    		<input type="number" name="a">
    		<br>
			Ingrese b:
			<input type="number" name="b">
    		<br>
            <input type="checkbox" name="sum">Suma
            <br>
            <input type="checkbox" name="res">Resta
            <br>
            <input type="checkbox" name="mul">Multiplicacion
            <br>
            <input type="checkbox" name="div">Division
            <br>
            <input type="checkbox" name="pot">Potencia
            <br>
            <input type="checkbox" name="mod">Modulo
            <br>
			
    		<input type="submit" value="confirmar">

  		</form>

        <?php
        if(isset($_REQUEST['a']) && isset($_REQUEST['b'])){

            $a = $_REQUEST['a'];
            $b = $_REQUEST['b'];

            echo $a . " y " . $b . " dan en: " .  "<br>";
            
            if(isset($_REQUEST['sum'])){
                echo "Suma: " . $a + $b . "<br>";}
        
            if(isset($_REQUEST['res'])){
                echo "Resta: " . $a - $b . "<br>";}

            if(isset($_REQUEST['mul'])){
                echo "Multiplicacion: " . $a * $b . "<br>";}

            if(isset($_REQUEST['div'])){
                echo "Division: " . $a / $b . "<br>";}

            if(isset($_REQUEST['pot'])){
                echo "Potencia: " . pow($a, $b) . "<br>";}

            if(isset($_REQUEST['mod'])){
                echo "Mod: " . $a % $b ;}

        }
        ?>
</body>
</html>
