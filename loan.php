<?php session_start();
require_once('config.php');
$loanid = $_POST['loanid'];
$isbn = $_POST['hidden'];
$sql = "UPDATE books SET loan='$loanid' WHERE isbn='$isbn'";
$conn->query($sql);
echo $conn->error;
header("location: bookdetails.php?id=$isbn");
$conn->close();

 ?>