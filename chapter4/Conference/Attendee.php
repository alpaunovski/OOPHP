<?php

namespace App\Conference;

class Attendee
{
    public static int $count = 0;

    public function __construct()
    {
        self::$count++;
    }
}