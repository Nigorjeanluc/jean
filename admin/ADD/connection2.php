<?php
	$host="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbname="amateka";
	$conn=mysqli_connect($host,$dbuser,$dbpassword,$dbname);;
	if(mysqli_connect_errno())
	{
		die("Connection Failed!".mysqli_connect_error());
	}
?>