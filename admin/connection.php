<?php
  $db = '104.236.228.251';
  $dbus = 'root';
  $dbpass = 'nd210694'; //
  $conn = mysql_connect($db,$dbus,$dbpass);
  if(!$conn)
   {
      die('could not:'.mysql_error());
   }
  mysql_select_db('amateka') or die(mysql_error());
   
?>
