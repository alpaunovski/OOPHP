<?php
require_once 'FileReaderInterface.php';

class CsvFileReader implements FileReaderInterface

{
    public function readFileAsAssociatvieArray(string $filename): array
    {
        $rows = array_map('str_getcsv', file($filename));

        $header = array_shift($rows);

        $items= [];

        foreach($rows as $row){
            $items[] = array_combine($header, $row);
        }

        return $items;
    }
}

// $fileReader = new CsvFileReader();
// $items = $fileReader->readFileAsAssociatvieArray('inventory.csv');
// print_r($items) . PHP_EOL;