<html>
<head>
  		<title>Nivel de estudios</title>
</head>
<body>
    <?php

        echo "El nivel de estudios de " . $_REQUEST['name'] . " es ";

 		if ($_REQUEST['estudios'] == "pri")

        {
            echo "primarios";

  		} else {

  			if ($_REQUEST['estudios'] == "sec") {

                echo "secundarios";

    		} else {

                echo "superiores";

            }
  		}
  	?>
</body>
</html>
