<?php
	include("connection2.php");
	if(isset($_GET['del'])){
		$ID = $_GET['del'];
		$sql= "DELETE FROM music WHERE indexes=$ID";
		$res= mysqli_query($conn,$sql) or die ("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=USERS.php'>";
	}
?>