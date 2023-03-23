<?php
$servername = "localhost";
$username = "root";
$password = "root";
$bdName = "phpItNow";

// Create connection
$conn = new mysqli($servername, $username, $password, $bdName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
