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
        require 'Sphere.php';

        $cylinder = new Cylinder(['radius' => 5, 'height' => 10]);

        echo $cylinder->volume();

        echo '<p>';
        $sphere = new Sphere(['radius' => 3]);

        print_r($sphere->volume());

    ?>
</body>
</html>