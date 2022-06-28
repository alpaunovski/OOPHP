<?php

require_once 'FileReaderInterface.php';

class JsonFileReader implements FileReaderInterface

{
    public function readFileAsAssociatvieArray(string $filename): array
    {
        $contentString = file_get_contents($filename);

        $items = json_decode($contentString, true);

        return $items;


    }
}