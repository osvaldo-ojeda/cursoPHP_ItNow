<?php
const SERVERNAME = "localhost";
const USERNAME = "root";
const PASSWORD = "root";
const DBNAME = "phpItNow";

class Connection
{
    private function __construct()
    {
    }
    static function connect()
    {
        try {
            $conn = new PDO("mysql:host=" . SERVERNAME . ";dbname=" . DBNAME, USERNAME, PASSWORD);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
