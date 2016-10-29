<?php session_start();
require_once('config.php');
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$image = $_POST['image'];
$description = $_POST['description'];
$subject = $_POST['subject'];
$callnumber = $_POST['callnumber'];
$reserve = $_POST['reserve'];
$loan = $_POST['loan'];

$sql = "INSERT INTO books(isbn, title, author, publisher, description, subject, callnumber, reserve, loan) VALUES('$isbn', '$title', '$author', '$publisher', '$description', '$subject', '$callnumber', '0', '0')";
$conn->query($sql);
echo $conn->error;
$conn->close();
 ?>