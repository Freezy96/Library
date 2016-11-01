<?php session_start();
require_once('config.php');
$isbn = mysqli_escape_string($conn, $_POST['isbn']);
$title = mysqli_escape_string($conn, $_POST['title']);
$author = mysqli_escape_string($conn, $_POST['author']);
$publisher = mysqli_escape_string($conn, $_POST['publisher']);
$description = mysqli_escape_string($conn, $_POST['description']);
$subject = mysqli_escape_string($conn, $_POST['subject']);
$name = $_FILES['avatars']['name'];
$tmp_name = $_FILES['avatars']['tmp_name'];
$location = "$name";
move_uploaded_file($tmp_name,$location);
// $callnumber = mysqli_escape_string($conn, $_POST['callnumber']);
// $reserve = mysqli_escape_string($conn, $_POST['reserve']);
// $loan = mysqli_escape_string($conn, $_POST['loan']);

$sql = "INSERT INTO books(isbn, title, author, publisher, image, description, subject, reserve, loan) VALUES('$isbn', '$title', '$author', '$publisher', '$location', '$description', '$subject', '0', '0')";
$conn->query($sql);
echo $conn->error;
header("location: catalogue.php");
$conn->close();
 ?>