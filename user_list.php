<?php
include_once("config.php");
include_once("function.php");

check_login_user();

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container" style="margin-top:20px;">
      <h1 style="text-align:center;">User</h1>
		

		<?php 
		
			if(isset($_SESSION["add"])){
				echo $_SESSION["add"];
				unset($_SESSION["add"]);
			}

			if(isset($_SESSION["update"])){
				echo $_SESSION["update"];
				unset($_SESSION["update"]);
			}
		
		
		?>
		<br>


  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Email</th>
		<th>Department</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
			<?php
			while($res = mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td class='bg-danger'>".$res['name']."</td>";
				echo "<td>".$res['age']."</td>";
				echo "<td>".$res['email']."</td>";
				echo "<td>".$res['dept']."</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td></tr>";
			}
			?>
    </tbody>
  </table>
	<a href="add.php" class="btn btn-info" role="button">Add New</a>
</div>
</body>
</html>
