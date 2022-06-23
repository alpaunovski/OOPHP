<?php

class Song 

{
    public $songID;
    public $title;
}

$octopus_Garden = new Song();
$octopus_Garden->songID = 8;
$octopus_Garden->title = "Octopus's Garden";

//var_dump($octopus_Garden);

class Playlist

{

    public $name;
    public $songs = [];

    public function addSong($song){
        $this->songs[] = $song;
    }

}

$playlist = new Playlist();

$playlist->name = "Rock!";
$playlist->addSong($octopus_Garden);

$myFavSong = new Song();

$myFavSong->songID = 1;
$myFavSong->title = "My favorite song";


$playlist->addSong($myFavSong);

var_dump($playlist->songs);