<?php
	$host="104.236.228.251";
	$dbuser="root";
	$dbpassword="nd210694";//
	$dbname="amateka";
	$conn=mysqli_connect($host,$dbuser,$dbpassword,$dbname);
	if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
?>
