<?php session_start();
require_once('config.php');
$bookid = $_POST['id'];
$isbn = $_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$publisher = $_POST['publisher'];
$description = $_POST['description'];

$sql = "UPDATE books SET isbn='$isbn', title='$title', author='$author', publisher='$publisher', description='$description' WHERE id='$bookid'";


 ?>