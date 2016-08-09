<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
   $from = "Music";
   if(isset($_REQUEST['lll'])) 
   {$from = $_REQUEST['lll'];}
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
include("connection.php");
if(isset($_REQUEST['hdfjafreuruqifhjak'])&&(isset($_REQUEST['wherewhere'])))
    {
	 $table = $_REQUEST['wherewhere']; $id = $_REQUEST['hdfjafreuruqifhjak'];
	 $s_ql = "DELETE FROM `rwandownload`.`".$table."` WHERE `".$table."`.`id` =".$id;
	 $situation = mysql_query($s_ql);
	 if($situation)
	 {
	   echo '<script> alert("'.$from.' item was removed succesfully")</script>';
	 }
	 }
?>
<title>DELETE a - <?php echo $from;?></title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="files/new_css.css" />
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.js"></script>
		<link href="../main.css" rel="stylesheet" type="text/css">
</head>

<body id="backimg">
  <?php
   $limit = 1;
include("navigation.php");
?>
<div id="pipBody">
<h2 style=" text-align:center;" class="color2"> delete a <?php echo $from;?> </h2>
  <?php
    include($mainMenu[$limit].'/delete'.$from.'.php'); 
  ?>
</div>
</body>
</html>

