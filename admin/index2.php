<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE-edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Login As User</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background: black;">
   <?php
   
    $let = isset($_POST['poo']);
			 if($let)
			 {
    		  	$username = $_POST['user'];
				$password = $_POST['pass'];
				include('../connection2.php');
				$Result=mysqli_query($conn,'SELECT * FROM users_accounts WHERE username="'.$username.'" AND password="'.$password.'"');
				$result=mysqli_fetch_array($Result) or die('<h3 style="color:#ff0000; text-align:center"> Sorry your name or password was wrong!!!</h3><br /><a class="btn btn-primary"  href="index.php">
				Go back!</a><br /><a class="btn btn-success"  href="index.php">Back home!</a>');
    
			  	while($row = $result)
	   			{
				 	echo "<script> window.location = 'HOME.php?hdhd=dfdd';</script>";
				}
			}
   /*echo '
<script type="text/javascript">
 window.location = "HOME.php";
</script>'
    :*/
	?>
	<div class="col-md-12">
		<div class="text-center">
			<h3 style="color:white;">Log In as User </h3>
		</div>
		<div style="margin-left:25%" class="col-md-6">
		  	 <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			 	   <div class="form">
				   		<div class="form-group">
							 <label for="inputEmail" class="sr-only">Username</label>
							 <input type="text" id="inputEmail" class="form-control" name="user" placeholder="Enter your username" required autofocus><br />
							 <label for="inputPassword" class="sr-only">Password</label>
							 <input type="password" id="inputPassword" class="form-control" name="pass" placeholder="Enter your password" required>
							 <br />
						</div>
						<button name="poo" type="submit" class="btn btn-default">Submit</button>
				   </div>
			 </form>
		</div>
	</div>
</body>
</html>
