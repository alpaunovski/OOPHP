<?php

class User

{
    //create properties
    public $name;
    public $username;
    public $followerCount;
}

$garyObject = new User();

$garyObject->name = 'Gary Clarke';
$garyObject->username = '@garyclarketech';
$garyObject->followerCount = 8;

print_r($garyObject);