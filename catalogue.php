<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Library Catalogue</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-0 col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<?php include 'searchbar.php'; ?>
<?php if(!isset($_SESSION['username'])){ ?>
		<div class="col-md-3">
<?php include 'loginform.php'; 	?>
		</div>
		<div class="col-md-9">
<?php include 'showbook.php'; ?>
		</div>
<?php }elseif($_SESSION['identity'] === 'Staff'){ ?>
		<div class="col-md-3">
<?php include 'adminnav.php'; ?>
		</div>
		<div class="col-md-9">
<?php include 'showbook.php'; ?>
		</div>
<?php }else{ ?>
		<div class="col-md-12">
<?php include 'showbook.php'; ?>
		</div>
<?php } ?>
<?php include 'footer.php'; ?>
	</div>
</div>
</body>
</html>