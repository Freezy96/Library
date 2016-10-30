<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

	<title>Library Catalogue</title>
<?php include 'head.php'; ?>
</head>
<body>
<div class="container-fluid">
	<div class="col-xs-offset-1 col-xs-12 col-md-offset-1 col-md-10">
<?php include 'header.php'; ?>
<?php include 'searchbar.php' ?>
		<div class="col-xs-12 col-md-3">
<?php if(!isset($_SESSION['username'])){ ?>
<?php include 'loginform.php'; 	?>
		</div>
		<div class="col-xs-12 col-md-9">
<?php include 'showbook.php'; ?>
		</div>
<?php }else{ ?>
		<div class="col-md-12">
<?php include 'showbook.php'; ?>
		</div>
<?php } ?>
	</div>
</div>
</body>
</html>