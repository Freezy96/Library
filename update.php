<?php session_start();
require_once('config.php');
$bookid = mysqli_escape_string($conn, $_POST['hidden']);
$isbn = mysqli_escape_string($conn, $_POST['isbn']);
$title = mysqli_escape_string($conn, $_POST['title']);
$author = mysqli_escape_string($conn, $_POST['author']);
$publisher = mysqli_escape_string($conn, $_POST['publisher']);
$description = mysqli_escape_string($conn, $_POST['description']);
$name = $_FILES['avatars']['name'];
$tmp_name = $_FILES['avatars']['tmp_name'];
$location = "$name";
move_uploaded_file($tmp_name,$location);

$sql = "UPDATE books SET isbn='$isbn', title='$title', author='$author', publisher='$publisher', description='$description' WHERE isbn='$bookid'";
$result = $conn->query($sql);
if($result){
	header('location: catalogue.php');
}else{
	echo $conn->error;
}

 ?>