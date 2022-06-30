<?php

namespace App\Logging;

trait LoggableTrait
{
    protected $logger;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}