<?php

// Database details
$servername = "localhost";
$username = "root";
$pwd = "";
$db = "westgame";

 //create connection
 $conn = new mysqli($servername, $username, $pwd, $db);

 // links form from the register page
$FirstName= $_POST["first"];
$LastName = $_POST["last"];
$emailr = $_POST["email"];
$password = $_POST ["pswd"];
$ConPasword = $_POST["cpswd"];

 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO westgame.users (`first_name`, `last_name`, `email`, `password`) 
VALUES ('$FirstName', '$LastName', '$emailr', '$password')";

if ($conn->query($sql) === TRUE) {
	echo "New record created successfully.";
	echo "Back to <a href= 'login.html'>login<a>";
} else{
	echo "Error: ' . $sql . ' <br>" . $conn->error;
}

$conn->close();

?> 