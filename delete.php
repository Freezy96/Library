<?php session_start();
require ('config.php');


$id = null;
if(!empty($_GET['id']))
{
$id = $_GET['id'];
}
if($id == null)
{
header("Location: index.php");
} 


$sql = "DELETE FROM books WHERE isbn='$id'";


if ($conn->query($sql)) {
    echo "<script> alert('Record successfully deleted')</script>";
    echo "<script> window.location='catalogue.php'</script>";
} else {
    echo "<script> alert('Error deleting record: " . $conn->error."')</script>";
    echo "<script> window.location='index.php'</script>";
}

$conn->close();
?>