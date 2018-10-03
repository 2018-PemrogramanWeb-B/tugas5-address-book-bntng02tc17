<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tugaslima";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO kontak (nama, telp, email)
VALUES ('bintang', '03294454421', 'bnt@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
