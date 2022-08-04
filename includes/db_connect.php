<?php

class db_connection
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name  = "grocery";

    public $connection;

    public function __construct()
    {

        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->db_name);

        if (mysqli_connect_error()) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        } else {
            return $this->connection;
        }
    }
}
