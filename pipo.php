<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

            $pipo = rand(1,3);

            if($pipo==1){

                echo "Pipo es: " . $pipo . "/uno.";

            }else{if($pipo==2){

                echo "Pipo es: " . $pipo . "/dos.";

            }else{

                echo "Pipo es: " . $pipo . "/tres.";

            }}
    ?>

</body>
</html>