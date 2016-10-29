<?php session_start();
require_once('config.php');
// $sessionid = $_SESSION['id'];
$bookid = mysqli_escape_string($_SESSION['bookid']);
$userid = mysqli_escape_string($_POST['id']);
$sql = "SELECT reserve FROM books WHERE id='$bookid'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

	$sqlb = "UPDATE books SET loan='$userid' WHERE id='$bookid'";
	$conn->query($sqlb);
	echo $conn->error;


echo $conn->error;

$conn->close();

 ?>