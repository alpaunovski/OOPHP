<?php

class Connection

{
    private static int $count = 0;

    private string $connectionId;

    public function __construct()
    {
        self::$count++;
    }

    private int $conferenceId = 10;

    public function __destruct()
    {
        self::$count--;
    }

    public function getCount()

    {
        return self::$count;
    }

    public function setConnectionId($ipAddress)
    {

        if(filter_var($ipAddress, FILTER_VALIDATE_IP)){
            $this->connectionId = $ipAddress . '_' . self::$count;
        }
        
    }

    public function getConnectionId(){
        return $this->connectionId;
    }

    public function __get($name){
        return $this->$name;
    }
}