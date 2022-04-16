<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<?php
include_once("config.php");
include_once("function.php");
check_login_user();
if(isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$age =  $_POST['age'];
	$email =$_POST['email'];
	$dept =$_POST['dept'];

	if(empty($name) || empty($age) || empty($email) || empty($dept)) {

		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}

		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($dept)) {
			echo "<font color='red'>Department field is empty.</font><br/>";
		}

	} else {
		$result = mysqli_query($mysqli, "INSERT INTO users(name,age,email,dept) VALUES('$name','$age','$email','$dept')");
		$_SESSION["add"] = "Added Successfully !";
		header("location:user_list.php");
		}
	}
		?>
		<html>
		<head>
			<title>Add Data</title>
		</head>

		<body>
		<h1 style="text-align:center;">Add New</h1>
			<div class="container" style="margin-top:20px;">
  <form class="form-horizontal" method="post" action="add.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Age</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pwd" name="age">
      </div>
    </div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Email</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pwd" name="email">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd">Department</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="pwd" name="dept">
			</div>
		</div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"  name="Submit" style="float:right;">Add Info</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
