<!DOCTYPE html>
<html lang="en">
<?php
include_once("config.php");
?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Registration</title>
	 </head>

<body>
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                        <h1><strong>Login Registration Form</strong></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-1 middle-border"></div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-5">
                        <div class="form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3><strong>Sign up</strong></h3>
                                </div>
                                <div class="form-top-right"> <i class="fa fa-pencil"></i> </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="registration.php" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">First name</label>
                                        <input type="text" name="user_first_name" placeholder="First name..." class="form-username form-control">
                                        </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">Last name</label>
                                        <input type="text" name="user_last_name" placeholder="Last name..." class="form-username form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="user_email" placeholder="Email..." class="form-username form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-about-yourself">Password</label>
                                        <input type="password" name="user_pass" placeholder="passworf..." class="form-username form-control"/>
                                    </div>
                                    <button type="submit" class="btn" name="Submit"><strong>Sign up</strong></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>




<?php

if(isset($_POST['Submit'])) {
	$first_name      =  $_POST['user_first_name'];
	$last_name       =  $_POST['user_last_name'];
	$user_email      =  $_POST['user_email'];
	$user_pass       =  $_POST['user_pass'];

    // echo $first_name;
    // exit;

	if(empty($first_name) || empty($last_name) || empty($user_email) || empty($user_pass)) {

		if(empty($first_name)) {
			echo "First Name field is empty<br/>";
		}

		if(empty($last_name)) {
			echo "Last Name field is empty.<br/>";
		}

		if(empty($user_email)) {
			echo "Email field is empty.<br/>";
		}

		if(empty($user_pass)) {
			echo "Password field is empty<br/>";
		}

	} else {
        $query = "INSERT INTO reg_user(first_name,last_name,user_email,user_pass) VALUES('$first_name','$last_name','$user_email','$user_pass')";
		$result = mysqli_query($mysqli,$query);
    if ($result== true) {
      header("Location: index.php");
    }else {
      echo "error";
    }
		}
	}
?>