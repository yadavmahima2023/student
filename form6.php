<?php
include('config.php');

if(isset($_POST['save_btn'])){
$student_name=$_POST['student_name'];
$class=$_POST['class'];
$Subject=$_POST['Subject'];
$Roll_No=$_POST['Roll_No'];

$inst=mysqli_query($conn,"insert into student_list SET student_name='$student_name',class='$class',Subject='$Subject',Roll_No='$Roll_No'");
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
	<h2 class="text-center mt-5">Notebook</h2>
	<form method="post">
	<div class="row">
		<div class="col-sm-12">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="student_name" class="form-control">
				<div class="col-sm-12">
			<div class="form group">
				<label>Class</label>
				<input type="text" name="class" class="form-control">
				<div class="col-sm-12">
			<div class="form group">
				<label>Subject</label>
				<input type="text" name="Subject" class="form-control">
				<div class="col-sm-12">
			<div class="form group">
				<label>Roll No.</label>
				<input type="text" name="Roll_No" class="form-control">
			</div>
			<div>
				<input type="submit" name="save_btn" class="btn btn-success">
			</div>
			
		</div>
		
	</div>	
	</form>
	
</div>
</body>
</html>