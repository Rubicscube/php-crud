<?php

Class Connection
{
    private $server = "mysql:host=localhost;dbname=becode";
    private $user = "username";
    private $pass = "test";
    protected $pdo;


    public function openConnection()
    {
        $pdo = new PDO($this->server, $this->user, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }


    public function closeConnection()
    {
        $this->pdo = null;
    }
}


