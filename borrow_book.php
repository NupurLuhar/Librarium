<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $memberID = $_POST["memberID"];
    $bookID = $_POST["bookID"];

    $sql = "UPDATE Books SET Available = FALSE WHERE BookID = $bookID";
    $transactionSQL = "INSERT INTO Transactions (MemberID, BookID) VALUES ($memberID, $bookID)";

    if ($conn->query($sql) === TRUE && $conn->query($transactionSQL) === TRUE) {
        echo "Book borrowed successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>