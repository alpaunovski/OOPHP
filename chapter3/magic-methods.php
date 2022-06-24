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

        require 'Connection.php';
        $connection1 = new Connection();
        $connection2 = new Connection();

        echo $connection1->getCount();
        echo '</p>';
        unset($connection2);
        echo '</p>';
        echo $connection1->getCount();
        echo '</p>';
        echo $connection1->conferenceId;
    ?>
</body>
</html>