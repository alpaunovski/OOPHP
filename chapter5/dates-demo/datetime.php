<?php

require_once 'vendor/autoload.php';

// $dateTime = new DateTime();

// #dd($dateTime->format(DateTime::ISO8601));

// $today = date_create('today');
// $nextWeek = date_create('next week');

// #dd($nextWeek > $today);

// $dateTime = DateTime::createFromFormat('j-M-Y', '21-Jan-2010');
// $dateTime = date_create_from_format('j-M-Y', '04-Nov-2026');
// dd($dateTime);

$past = date_create('1999-12-31');
$present = date_create();

$interval = date_diff($present, $past);

