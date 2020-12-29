<?php
//code by: farhan ilhamdi
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FASILKOM";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$varMIN = $_POST["varMIN"];
$varMAX = $_POST["varMAX"]; 
$sql = "DELETE FROM MAHASISWA WHERE NILAI >= $varMIN and NILAI<=$varMAX";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully: ";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>