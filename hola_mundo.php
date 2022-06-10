<html>
    <head>
        <title>eeeeeee</title>
    </head>
<body>
    <form action="hola_mundo.php" method="post">
        Base:
        <input type="number" name="base" required id="base">
        Altura:
        <input type="number" name="altura" required id="altura">
        <br>
        <input type="submit" name="button" id="buttom" value="envio">
    </form>

</body>
</html>
<?php
    echo "Hola Mundillo";
    echo "<br>";
    echo "que ondaaa?";

    echo "<br>";

    if (isset ($_POST['base']) and isset ($_POST['altura'])) {
        $base = $_POST['base'];
        $alt = $_POST['altura'];
        $resul = $base*$alt/2;
    }
    echo "el resultado es: " . $resul;
    ?>