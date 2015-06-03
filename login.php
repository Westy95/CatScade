<?php


//connects to the database
$servername = "localhost";
$username = "root";
$pwd = "";
$db = "westgame";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $pwd, $db);

// links from the login page
$email = $_POST["user"];
$password = $_POST["pwd"];



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// string for query
$sql = "SELECT password FROM users WHERE email = '$email';";

// database query & and action after result
$result = $conn->query($sql);
if ($result->num_rows == 0){
	echo "Login failed. UserName does not match.";
    echo 'Back to <a href= "login.html">Login<a>';
}
else {
	$foundPassword = $result->fetch_assoc()['password'];
	if ($foundPassword != $password){
		echo "Login failed. Password Incorrect.";
		echo 'Back to <a href= "login.html">Login<a>';
	}
	else{
        $_SESSION["email"] = $email; 
		header("Location: main.php"); 
	}
}

?>