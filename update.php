<?php session_start();
require_once('config.php');
$bookid = mysqli_escape_string($_POST['id']);
$isbn = mysqli_escape_string($_POST['isbn']);
$title = mysqli_escape_string($_POST['title']);
$author = mysqli_escape_string($_POST['author']);
$publisher = mysqli_escape_string($_POST['publisher']);
$description = mysqli_escape_string($_POST['description']);

$sql = "UPDATE books SET isbn='$isbn', title='$title', author='$author', publisher='$publisher', description='$description' WHERE id='$bookid'";
$result = $conn->query($sql);
if($result){
	header('location: index.php');
}else{
	echo $conn->error;
}

 ?>