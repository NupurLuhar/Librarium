<?php
$servername = "localhost";
$username = "root";
$password = ""; // Use your MySQL password
$dbname = "LibraryDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>