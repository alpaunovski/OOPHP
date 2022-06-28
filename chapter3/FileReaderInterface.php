<?php

interface FileReaderInterface

{
    public function readFileAsAssociatvieArray(string $filename): array;
}