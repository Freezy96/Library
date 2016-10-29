<?php session_start();
require_once('config.php');
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$image = $_POST['image'];
$description = $_POST['description'];
$reserve = $_POST['reserve'];
$loan = $_POST['loan'];

$sql = "INSERT INTO books(isbn, title, author, publisher, description, reserve, loan) VALUES('$isbn', '$title', '$author', '$publisher', '$description', '0', '0')";
$conn->query($sql);
echo $conn->error;
$conn->close();
 ?>