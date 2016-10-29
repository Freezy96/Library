<?php session_start();
include('config.php');
$sessionid = $_SESSION['id'];
$name = $_FILES['avatars']['name'];
$tmp_name = $_FILES['avatars']['tmp_name'];
$location = "$name";
move_uploaded_file($tmp_name,$location);

$sql = "UPDATE users SET profileimage = '$location' WHERE id = '$sessionid'";
$conn->query($sql);
$conn->close();
// header('location: index.php');
 ?>
 <p>Upload Successful</p>
 <meta http-equiv="refresh" content="0.1; url=index.php" />