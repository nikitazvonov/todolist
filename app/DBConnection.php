<?php

class DBConnection
{
    private string $host;
    private string $dbname;
    private string $dbuser;
    private string $dbpassword;

    public function __construct(string $host, string $dbname, string $dbuser, string $dbpassword) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
    }

    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        return $pdo = new PDO($dsn, $this->dbuser, $this->dbpassword);
    }
}