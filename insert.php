<?php session_start();
require_once('config.php');
$isbn = mysqli_escape_string($_POST['isbn']);
$title = mysqli_escape_string($_POST['title']);
$author = mysqli_escape_string($_POST['author']);
$publisher = mysqli_escape_string($_POST['publisher']);
$image = mysqli_escape_string($_POST['image']);
$description = mysqli_escape_string($_POST['description']);
$subject = mysqli_escape_string($_POST['subject']);
$callnumber = mysqli_escape_string($_POST['callnumber']);
$reserve = mysqli_escape_string($_POST['reserve']);
$loan = mysqli_escape_string($_POST['loan']);

$sql = "INSERT INTO books(isbn, title, author, publisher, description, subject, callnumber, reserve, loan) VALUES('$isbn', '$title', '$author', '$publisher', '$description', '$subject', '$callnumber', '0', '0')";
$conn->query($sql);
echo $conn->error;
$conn->close();
 ?>