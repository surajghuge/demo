<?php

$servername= "localhost";
$dbusername= "root";
$dbpassword= "";
$dbname= "rfid";

$fn=$_POST['fn'];
$ln=$_POST['ln'];
$email=$_POST['email'];
$mobile_no=$_POST['mobile_no'];
$pass=$_POST['pass'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if($conn->connect_error)
	die ("Cannot connect");
$sql= "Insert into user(first_name,last_name,email,mobile_no,password,dob,gender) 
values('$fn','$ln','$email','$mobile_no','$pass','$dob','$gender')";

if($conn->query($sql)===TRUE) {
	header('location: login.html');
}
else {
	echo "Not Updated " ;
}
$conn->close();
?>