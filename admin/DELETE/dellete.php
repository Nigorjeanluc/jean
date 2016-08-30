<?php
	include("connection.php");
	if(isset($_GET['del'])){
		$ID = $_GET['del'];
		$sql= "DELETE FROM users_accounts WHERE indexes=$ID";
		$res= mysql_query($sql,$conn) or die ("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=deleteNews.php'>";
	}
?>