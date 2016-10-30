<?php 
require_once('config.php');

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, md5($_POST['password']));
$email = mysqli_escape_string($_POST['email']);
$sql = "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')";
 $result = $conn->query($sql);
if($result){
	header('location: loginpage.php');
}else{
	echo $conn->error;
}
 $conn->close();
 ?>