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

        use App\Utility\JsonFileReader;
        use App\Exceptions\FileNotFoundException;
        use App\Exceptions\BadJsonException;

        require_once 'autoload.php';

        $filename = './../files/inventory.json';

        $jsonFilereader = new JsonFileReader();

        try {        
            
            $inventory = $jsonFilereader->readFileAsAssociativeArray($filename);
            print_r($inventory);

        } catch(FileNotFoundException $exception) {
            print_r('The file ' . $filename . ' could not be found');
        } catch (BadJsonException $exception) {
            print_r('The File ' . $filename . ' is not properly formatted JSON');
        }

        
    ?>

</body>
</html>