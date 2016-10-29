<?php session_start();
require_once('config.php');
// $sessionid = $_SESSION['id'];
$bookid = $_SESSION['bookid'];
$userid = $_POST['id'];
$sql = "SELECT reserve FROM books WHERE id='$bookid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

	$sqlb = "UPDATE books SET loan='$userid' WHERE id='$bookid'";
	$conn->query($sqlb);
	echo $conn->error;


echo $conn->error;

$conn->close();

 ?>