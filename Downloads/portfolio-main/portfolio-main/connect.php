<?php
$host = "127.0.0.1";
$user = "root";
$password = ""; // no password by default
$dbname = "portfolio";
$port = 3308; // or 3307 if you changed it

$conn = new mysqli($host, $user, $password, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Successfully connected to the database!";
}
?>
