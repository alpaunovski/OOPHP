<?php

class Comment

{
    public $text;
    public $userID;


    public function __construct($text)
    {
        $this->text = $text;
        $this->userID = rand(0,9);
    }
}