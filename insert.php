<?php session_start();
require_once('config.php');
$isbn = mysqli_escape_string($conn, $_POST['isbn']);
$title = mysqli_escape_string($conn, $_POST['title']);
$author = mysqli_escape_string($conn, $_POST['author']);
$publisher = mysqli_escape_string($conn, $_POST['publisher']);
$description = mysqli_escape_string($conn, $_POST['description']);
$subject = mysqli_escape_string($conn, $_POST['subject']);
// $callnumber = mysqli_escape_string($conn, $_POST['callnumber']);
// $reserve = mysqli_escape_string($conn, $_POST['reserve']);
// $loan = mysqli_escape_string($conn, $_POST['loan']);

$sql = "INSERT INTO books(isbn, title, author, publisher, description, subject, callnumber, reserve, loan) VALUES('$isbn', '$title', '$author', '$publisher', '$description', '$subject', '0', '0')";
$conn->query($sql);
echo $conn->error;

$name = $_FILES['avatars']['name'];
$tmp_name = $_FILES['avatars']['tmp_name'];
$location = "$name";
move_uploaded_file($tmp_name,$location);
$sql = "UPDATE books SET image = '$location' WHERE isbn = '$isbn'";
$conn->query($sql);
echo $conn->error;

$conn->close();
 ?>