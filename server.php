<?php

session_start();

$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "rfid";


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error)
	die ("Cannot connect");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if(isset($_POST['login'])) {

		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$query ="SELECT * FROM user WHERE email ='$email' AND password ='$password' ";
		$result = mysqli_query($conn, $query);
		
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['username']=$email;
			require 'details.php';
		}

	}
}

?>
