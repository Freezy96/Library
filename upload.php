<?php session_start();
include('config.php');
$isbn = $_POST['isbn'];
$name = $_FILES['avatars']['name'];
$tmp_name = $_FILES['avatars']['tmp_name'];
$location = "$name";
move_uploaded_file($tmp_name,$location);
$sql = "UPDATE books SET image = '$location' WHERE isbn = '$isbn'";
$conn->query($sql);
echo $conn->error;
$conn->close();
// header('location: index.php');
 ?>
 <meta http-equiv="refresh" content="0.1; url=bookdetails.php?id=<?php echo $isbn ?>" />