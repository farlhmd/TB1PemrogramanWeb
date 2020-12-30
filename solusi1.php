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

$conn->query("DELETE FROM MAHASISWA WHERE NILAI >= $varMIN and NILAI<=$varMAX");
echo "Record deleted successfully: \n ";
printf("Data yang terhapus sebanyak: %d\n", $conn->affected_rows);
$conn->close();
?>