<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
   $from = "Accounts";
   if(isset($_REQUEST['lll'])) 
   {$from = $_REQUEST['lll'];}

?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>add a - <?php echo $from;?></title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="files/new_css.css" />
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<link href="../main.css" rel="stylesheet" type="text/css">
</head>
 <?php
   $var = isset($_POST['okk']);
   if($var) 
   {
     $TTLE = $_POST['input'];
     $CATEGORIE = $_POST['input1'];
	 $INCHAMAKE = $_POST['input2']; 
	 echo "<script> alert('o.k added');</script>";
     include('connection.php');
	 mysql_query("INSERT INTO users_accounts(username,email,password) 
	              VALUES('$TTLE','$CATEGORIE','$INCHAMAKE')");
   }
  /* echo "<pre>" ;
		echo "POST:";
		print_r($_POST);
		echo "FILES:";
		print_r($_FILES);
		echo "</pre>"; */
   
 ?>

<body id="backimg">
  <?php
   $limit = 3;
include("navigation.php");
?>
<div id="pipBody">
<h2 style=" text-align:center;" class="color2"> check an <?php echo $from;?> </h2>
  <?php
    include($mainMenu[$limit].'/users'.$from.'.php'); 
  ?>
  <h2 style=" text-align:center;" class="color2"> add an <?php echo $from;?> </h2>
 
 <?php
    include('ADD/addPubs.php'); 
 ?>


</div>

</body>
</html>
