<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<!-- <?php include 'searchbar.php'; ?> -->

<?php
require_once('config.php');
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE isbn='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$_SESSION['isbn'] = $id;

?>

<script type="text/javascript">
	window.onload = function myFunction() {
		<?php 
			if($row['loan']==0){
				$available = 'Available';
			}else{
				$available = "Loan by id: ".$row['loan'];
				?>document.getElementById('loan').disabled=true;<?php
			}
		 ?>
}
</script>
		<div class="container well">
			<div class="col-md-4">
				<img src="<?php echo $row['image']; ?>" alt="Book Image">
			</div>
			<div class="col-md-8">
				<h2 role="book-title"><?php echo $row['title']; ?></h2>
				<table class="table">
					<tr>
						<th><h4>Author</h4></th>
						<td><h4><?php echo $row['author']; ?></h4></td>
					</tr>
					<tr>
						<th><h4>Publisher</h4></th>
						<td><h4><?php echo $row['publisher']; ?></h4></td>
					</tr>
					<tr>
						<th><h4>ISBN</h4></th>
						<td><h4><?php echo $row['isbn']; ?></h4></td>
					</tr>
					<tr>
						<th><h4>Status</h4></th>
						<td><h4><?php echo $available; ?></h4></td>
					</tr>
				</table>
			
				<div class="pull-left">
				<form action="bookdetailsloan.php" method="POST">
					<div class="btn-group">
					
						<button value="<?php echo $_SESSION['isbn']; ?>" class="btn btn-primary btn-md" id="loan" name="loanbtn" value="<?php echo $id ?>"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span><span class="hidden-xs"> Loan</span></button>
					
						
					</div>
				</form>
				</div>
			
				<div class="pull-right">
				<form>
					<div class="btn-group">
					
						<a href="return.php?id=<?php echo $_SESSION['isbn']; ?>" id="return" class="btn btn-success btn-md"><span class="glyphicon glyphicon-book"></span><span class="glyphicon glyphicon-arrow-right"></span><span class="hidden-xs"> Return</span></a>
						
						<!-- <button class="btn btn-warning btn-md" id="reserve" name="reserve" value="<?php echo $row['isbn']; ?>"><span class="glyphicon glyphicon-tag"></span><span class="hidden-xs"> Reserve</span></button> -->
					
						<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Back</span></button>
				</form>		
					</div>
				</div>





			</div>
		</div>
	
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>