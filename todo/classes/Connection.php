<?php

namespace App;

use mysqli;
use Exception;

abstract class Connection
{
    protected $conn;

    protected function connect()
    {
        $configFile = realpath(__DIR__ . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "database.json");

        if (!file_exists($configFile)) {
            throw new Exception("Database config file not found!");
        }

        $config = json_decode(file_get_contents($configFile), true);

        $this->conn = new mysqli(
            $config['host'],
            $config['username'],
            $config['password'],
            $config['database']
        );

        if ($this->conn->connect_errno) {
            throw new Exception($this->conn->connect_error);
        }
    }
}
