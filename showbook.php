<?php session_start();
require_once('config.php');
if(isset($_GET['searchbtn'])){

$search = $_GET['search'];
$searchby = $_GET['searchby'];
$sql = "SELECT * FROM books WHERE ".$searchby." LIKE '%$search%'";
$result = $conn->query($sql);

 ?>

<table class="table">
<?php while($row = $result->fetch_assoc()){ ?>
	<tr>
		<td rowspan="5"><img src="<?php echo $row['image']; ?>" alt="Book Image" width="145" height="200"></td>
		<th>Title</th>
		<td><?php echo $row['title']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td rowspan="5"><a href="bookdetails.php?id=<?php echo $row['isbn']; ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-eye-open"></span> Details</a></td>
		<?php } ?>
	</tr>
	<tr>
		<th>Author</th>
		<td><?php echo $row['author']; ?></td>
	</tr>
	<tr>
		<th>Publisher</th>
		<td><?php echo $row['publisher']; ?></td>
	</tr>
	<tr>
	<tr>
		<th>ISBN</th>
		<td><?php echo $row['isbn']; ?></td>
	</tr>
<?php 
	} 
}else{
	?>
<table class="table">
<h2><span class="danger glyphicon glyphicon-fire"></span> Top Books</h2>
<?php
	$sqlhot = "SELECT * FROM books limit 2";
	$result = $conn->query($sqlhot);
	
	while($rowhot = $result->fetch_assoc()){
?>

<tr>
		<td rowspan="5"><img src="<?php echo $rowhot['image']; ?>" alt="Book Image" width="145" height="200"></td>
		<th>Title</th>
		<td><?php echo $rowhot['title']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td rowspan="5"><a href="bookdetails.php?id=<?php echo $rowhot['isbn']; ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-eye-open"></span> Details</a></td>
		<?php } ?>
	</tr>
	<tr>
		<th>Author</th>
		<td><?php echo $rowhot['author']; ?></td>
	</tr>
	<tr>
		<th>Publisher</th>
		<td><?php echo $rowhot['publisher']; ?></td>
	</tr>
	<tr>
	<tr>
		<th>ISBN</th>
		<td><?php echo $rowhot['isbn']; ?></td>
	</tr>

<?php	
 	}
 	?>
</table>
 	<?php
}
?>
</table>
<button class="btn btn-primary btn-block">More <span class="caret"></span></button><br>