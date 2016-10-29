<?php session_start();
require_once('config.php');
$sessionid = $_SESSION['id'];
$bookid = $_GET['bookid'];
$sql = "UPDATE books SET reserve='$sessionid' WHERE id='$bookid'";
$conn->query($sql);

echo $conn->error;

$conn->close();
 ?>