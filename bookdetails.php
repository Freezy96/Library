<?php session_start(); ?>
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
				<img height="499" width="328" src="<?php echo $row['image']; ?>" alt="Book Image"><br><br>
				<?php if(isset($_SESSION['username'])){ ?>
				<form action="upload.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" value="<?php echo $_SESSION['isbn']; ?>" name="isbn">
				<input type="file" class="form-control" name="avatars" id="file"/><br>
				<button class="btn btn-default btn-md" type="submit" value="Submit">
					Submit
				</button>
				</form>
				<?php } ?>
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
					<tr>
						<th><h4>Description</h4></th>
						<td><h4><?php echo $row['description']; ?></h4></td>
					</tr>
				</table>
			
				<div class="pull-left">
				<form action="bookdetailsloan.php" method="POST">
					<div class="btn-group">
					<?php if(isset($_SESSION['username'])){ ?>
							<button value="<?php echo $_SESSION['isbn']; ?>" class="btn btn-primary btn-md" id="loan" name="loanbtn" value="<?php echo $id ?>"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span><span class="hidden-xs"> Loan</span>
							</button>
					<?php } ?>
						
					
						
					</div>
				</form>
				</div>
			
				<div class="pull-right">
				<form>
					<div class="btn-group">
					
					<?php if(isset($_SESSION['username'])){ ?>
							<a href="return.php?id=<?php echo $_SESSION['isbn']; ?>" id="return" class="btn btn-success btn-md"><span class="glyphicon glyphicon-book"></span><span class="glyphicon glyphicon-arrow-right"></span><span class="hidden-xs"> Return</span></a>
					<?php } ?>

						
						
						<!-- <button class="btn btn-warning btn-md" id="reserve" name="reserve" value="<?php echo $row['isbn']; ?>"><span class="glyphicon glyphicon-tag"></span><span class="hidden-xs"> Reserve</span></button> -->
					
						<a href="catalogue.php" class="btn btn-danger btn-md"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Back</span></a>
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