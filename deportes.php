<html>
<head>
  		<title>Deportes</title>
</head>
<body>
  		<form action="deportes.php" method="post">
   		Ingrese su nombre:
    		<input type="text" name="name" required>
    		<br>
    		<input type="checkbox" name="check1" value="futbol">Futbol
    		<br>
    		<input type="checkbox" name="check2" value="basket">Basket
    		<br>
    		<input type="checkbox" name="check3" value="tenis">Tenis
    		<br>
    		<input type="checkbox" name="check4" value="vóley">Vóley
    		<br>
    		<input type="checkbox" name="check5" value="ajedrez">Ajedrez
    		<br>
    		<input type="checkbox" name="check6" value="tenis de mesa">Tenis de mesa
    		<br>
    		<input type="checkbox" name="check7" value="handball">Handball
    		<br>
    		<input type="checkbox" name="check8" value="natación">Natación
    		<br>
    		<input type="checkbox" name="check9" value="remo">Remo
    		<br>
    		<input type="submit" name="operar">
  		</form>

        
        <?php

            if(isset($_REQUEST['name'])){

            echo "Los deportes que " . $_REQUEST['name'] . " practica son: ";

            $a=0;

            echo "<br>" . "<br>";

            if (isset($_REQUEST['check1'])) 
            {

                    echo $_REQUEST['check1'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check2'])) 
            {

                    echo $_REQUEST['check2'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check3'])) 
            {

                    echo $_REQUEST['check3'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check4'])) 
            {

                    echo $_REQUEST['check4'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check5'])) 
            {

                    echo $_REQUEST['check5'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check6'])) 
            {

                    echo $_REQUEST['check6'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check7'])) 
            {

                    echo $_REQUEST['check7'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check8'])) 
            {

                    echo $_REQUEST['check8'] . "<br>";
                    $a=$a+1;
            
            }
            if (isset($_REQUEST['check9'])) 
            {

                    echo $_REQUEST['check9'];
                    $a=$a+1;
            
            }
            echo "<br>" . "La cantidad de deportes que practica ". $_REQUEST['name'] . " son: " . $a;
        }
        ?>
</body>
</html>