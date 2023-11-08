<?php

class Database
{
    private $localhost;
    private $host;
    private $pass;
    private $dbname;
    private $pdo;

    public function __construct()
    {
        $this->localhost = "localhost";
        $this->host = "root";
        $this->pass = "mysql321";
        $this->dbname = "information";

        try {
            $this->pdo = new PDO("mysql:dbname=" . $this->dbname . ";host=" . $this->localhost, $this->host, $this->pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->pdo;
    }
    public function setConnection($new_connection)
    {
        $this->pdo = $new_connection;
    }
    public function getHost()
    {
        return $this->host;
    }
    public function setHost($new_host)
    {
        $this->host = $new_host;
    }
    public function getdbname()
    {
        return $this->dbname;
    }
    public function setdbname($new_dbname)
    {
        $this->dbname = $new_dbname;
    }
    public function getLocalhost()
    {
        return $this->localhost;
    }
    public function setLocalhost($new_localhost)
    {
        $this->localhost = $new_localhost;
    }
}
