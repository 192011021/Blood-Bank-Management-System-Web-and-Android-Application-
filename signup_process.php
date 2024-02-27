<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blood_donation"; // Change this to your actual database name

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);
	
$message = "Register successful";
	
	


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password']; // Plain text password
$mobile = $_POST['mob_no'];

     $sql = "INSERT INTO user_info(donor_username, donor_password, email, phone_number) VALUES('$username', '$password', '$email', '$mobile')";
	 

if ($conn->query($sql) === TRUE) {
  
  echo "<script type='text/javascript'>alert('$message');window.location.href='login.php';</script>";
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>



