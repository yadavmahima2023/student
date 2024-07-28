<?php
include 'connection.php';
if(isset($_POST['save_btn'])){

	$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$age=$_POST['age'];
$address_name=$_POST['address_name'];

$inst=mysqli_query($conn,"insert into student SET first_name='$first_name', last_name='$last_name', age='$age', address='$address_name'");





} 
 ?>






<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container">
		<h2 class="text-center mt-5">Sign up form</h2>
		<form method="post">
			<div class="row">
				<div class="col-sm-12">
					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="first_name" class="form-control">
						<div class="col-sm-12">
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="last_name" class="form-control">
						<div class="col-sm-12">
					<div class="form-group">
						<label>Age</label>
						<input type="text" name="age" class="form-control">
					</div>
					<div class="col-sm-12">
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address_name" class="form-control">
				</div>
				<div>
					<input type="submit" name="save_btn" class="btn btn-success">
				</div>
			</div>
			
		</form>
		
	</div>

</body>
</html>