<?php
require_once 'FileReaderInterface.php';

class StockManager

{
    public function updateStockFromFile(string $filename, FileReaderInterface $fileReader)
    {
        $stockItems = $fileReader->readFileAsAssociatvieArray($filename);

        foreach ($stockItems as $stockItem){
            print('Updating the Database with item: '. $stockItem['name'] . '</br>');
        }
    }

}