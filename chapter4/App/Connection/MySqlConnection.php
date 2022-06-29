<?php

namespace App\Connection;

class MySqlConnection

{
    

    public function __construct(public string $databaseUrl = 'mysql-db-url' )
    {
    }
}