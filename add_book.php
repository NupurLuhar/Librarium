<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];

    $sql = "INSERT INTO Books (Title, Author, Genre) VALUES ('$title', '$author', '$genre')";
    if ($conn->query($sql) === TRUE) {
        echo "New book added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>