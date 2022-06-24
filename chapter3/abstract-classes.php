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

        require 'Cylinder.php';

        $cylinder = new Cylinder(['radius'=> 2, 'height' =>3]);

        echo $cylinder->volume();


    ?>
</body>
</html>