<?php
class Database
{
    public $conn;
    protected $serverName = "localhost";
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'mvc';

    public function __construct()
    {
        $this->conn = mysqli_connect($this->serverName, $this->username, $this->password);
        mysqli_select_db($this->conn, $this->dbname);
        mysqli_query($this->conn, 'SET NAMES "utf8"');
    }
}
