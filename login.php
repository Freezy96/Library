<?php session_start();
require_once('config.php');
$username = mysqli_escape_string($conn, $_POST['username']);
$password = mysqli_escape_string($conn, md5($_POST['password']));
$sql = "SELECT * FROM users WHERE username = '$username'AND password = '$password' LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$sessionid = $row['id'];
$identity = $row['identity'];
if($result->num_rows>0){
	$_SESSION['id'] = $sessionid;
	$_SESSION['username'] = $username;
	$_SESSION['identity'] = $identity;
	header("location: catalogue.php");
}else{
	$_SESSION['flash'] = "Wrong Username or Password!";
	header("location: catalogue.php");
}
$conn->close();
 ?>