<?php 
require_once('config.php');

$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, md5($_POST['password']));
$email = mysqli_escape_string($conn, $_POST['email']);
$sql = "INSERT INTO users(username, password, email, identity) VALUES('$username', '$password', '$email', 'Student')";
 $result = $conn->query($sql);
if($result){
	header('location: index.php');
}else{
	echo $conn->error;
}
 $conn->close();
 ?>