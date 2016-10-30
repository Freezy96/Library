<?php session_start();
require_once('config.php');
$isbn = $_GET['id'];
$sql = "UPDATE books SET loan='0' WHERE isbn='$isbn'";
$conn->query($sql);
echo $conn->error;
header("location: bookdetails.php?id=$isbn");
$conn->close();

 ?>