<?php session_start();
require_once('config.php');
if(isset($_GET['searchbtn'])){

$search = $_GET['search'];
$searchby = $_GET['searchby'];
$sql = "SELECT * FROM books WHERE ".$searchby." LIKE '%$search%'";
$result = $conn->query($sql);

 ?>
<h2><span class="glyphicon glyphicon-search"></span> Search Results</h2>
<table class="table">
<?php while($row = $result->fetch_assoc()){ ?>
	<tr>
		<td rowspan="5"><img src="<?php echo $row['image']; ?>" alt="Book Image" width="145" height="200"></td>
		<th>Title</th>
		<td><?php echo $row['title']; ?></td>
		<td><a href="bookdetails.php?id=<?php echo $row['isbn']; ?>" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-eye-open"></span> Details</a></td>
		
	</tr>
	<tr>
		<th>Author</th>
		<td><?php echo $row['author']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="delete.php?id=<?php echo $row['isbn']; ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
		<?php } ?>
	</tr>
	<tr>
		<th>Publisher</th>
		<td><?php echo $row['publisher']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="updateinterface.php?id=<?php echo $row['isbn']; ?>" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Update</a></td>
		<?php } ?>
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
<h2><span class="danger glyphicon glyphicon-fire"></span> Top Books</h2>
<table class="table">
<?php
	$sqlhot = "SELECT * FROM books limit 2";
	$result = $conn->query($sqlhot);
	$sqlhothidden = "SELECT * FROM books LIMIT 50 OFFSET 2";
	$resulthidden = $conn->query($sqlhothidden);
	while($rowhot = $result->fetch_assoc()){
?>

	<tr>
		<td rowspan="5"><img src="<?php echo $rowhot['image']; ?>" alt="Book Image" width="145" height="200"></td>
		<th>Title</th>
		<td><?php echo $rowhot['title']; ?></td>
		<td><a href="bookdetails.php?id=<?php echo $rowhot['isbn']; ?>" class="btn btn-primary btn-sm btn-sm pull-right"><span class="glyphicon glyphicon-eye-open"></span> Details</a></td>
		
	</tr>
	<tr>
		<th>Author</th>
		<td><?php echo $rowhot['author']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="delete.php?id=<?php echo $rowhot['isbn']; ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger btn-sm pull-right"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
		<?php } ?>
	</tr>
	<tr>
		<th>Publisher</th>
		<td><?php echo $rowhot['publisher']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="updateinterface.php?id=<?php echo $rowhot['isbn']; ?>" class="btn btn-primary btn-sm pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Update</a></td>
		<?php } ?>
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
<div id="scritta" class="hiddendiv">
<table class="table">	
<?php 
while($rowhothidden = $resulthidden->fetch_assoc()){
?>
	<tr>
		<td rowspan="5"><img src="<?php echo $rowhothidden['image']; ?>" alt="Book Image" width="145" height="200"></td>
		<th>Title</th>
		<td><?php echo $rowhothidden['title']; ?></td>
		<td><a href="bookdetails.php?id=<?php echo $rowhot['isbn']; ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-eye-open"></span> Details</a></td>
		
	</tr>
	<tr>
		<th>Author</th>
		<td><?php echo $rowhothidden['author']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="delete.php?id=<?php echo $rowhot['isbn']; ?>" onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger pull-right"><span class="glyphicon glyphicon-remove"></span> Delete</a></td>
		<?php } ?>
	</tr>
	<tr>
		<th>Publisher</th>
		<td><?php echo $rowhothidden['publisher']; ?></td>
		<?php if(isset($_SESSION['username'])){ ?>
		<td><a href="updateinterface.php?id=<?php echo $rowhothidden['isbn']; ?>" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-floppy-disk"></span> Update</a></td>
		<?php } ?>
	</tr>
	<tr>
	<tr>
		<th>ISBN</th>
		<td><?php echo $rowhothidden['isbn']; ?></td>
	</tr>
<?php	
	} 
	?>

</table>
</div>
<div id="scrittb" class="showdiv">
		<button id="buttonb" class="btn btn-primary btn-block" onclick="show()">More <span class="caret"></span></button><br>	
	</div>
	<div id="scrittc" class="hiddendiv">
		<button id="buttonc" class="btn btn-primary btn-block" onclick="hide()">Less <span class="dropup"><span class="caret"></span></span></button><br>	
	</div>
 	<?php
}
?>
</table>
	
