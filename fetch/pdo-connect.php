<?php

interface InterfaceConnect {
    public function connect();    
}

class Connect
{
    protected $dsn;
    protected $user;
    protected $pass;
}

class Connection extends Connect implements InterfaceConnect
{
    public function connect() {
        
        $this->dsn = "mysql:host=localhost;dbname=test";
        $this->user = "root";
        $this->pass = "*****";
        
        $connect = new \PDO($this->dsn, $this->user, $this->pass);
        return $connect;
        
    }
}
