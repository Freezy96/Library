
 <!DOCTYPE html>
<html>
<head>
	<title>Details</title>
<?php 
 include 'head.php'; 
 ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<?php include 'searchbar.php'; ?>

<?php
require_once('config.php');
$isbn = $_POST['loanbtn'];
 ?>
<form action="loan.php" method="POST">
		<div class="container well">
			<div class="col-md-8">
				<table class="table">
					<tr>
						<th><h4>User ID: </h4></th>
						<td><h4><input name="loanid" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required="required"></input></h4></td>
					</tr>
					<input type="hidden" name="hidden" value="<?php echo $isbn ?>">
				</table>
				<div class="text-right">
					<div class="btn-group">
						<button type="submit" class="btn btn-primary btn-md" id="loan" name="loanbtn" value="<?php echo $id ?>"><span class="glyphicon glyphicon-arrow-left"></span><span class="glyphicon glyphicon-book"></span><span class="hidden-xs"> Loan</span></button>
						
						<!-- <button class="btn btn-warning btn-md" id="reserve" name="reserve" value="<?php echo $row['isbn']; ?>"><span class="glyphicon glyphicon-tag"></span><span class="hidden-xs"> Reserve</span></button> -->
					
						<button class="btn btn-danger btn-md" onclick="goBack();"><span class="glyphicon glyphicon-remove"></span><span class="hidden-xs"> Back</span></button>
					</div>
				</div>
			</div>
		</div>
</form>	
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>