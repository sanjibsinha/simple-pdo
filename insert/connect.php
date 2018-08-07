<?php

class Connection
{
    protected $dsn = "mysql:host=localhost;dbname=test";
    protected $user = "root";
    protected $pass = "";    
    
}

class Connect extends Connection
{
    public function connect() {
        
        $db = new \PDO($this->dsn, $this->user, $this->pass);
        return $db;
        
    }    
    
}

