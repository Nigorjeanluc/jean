<?php
  $db = 'localhost';
  $dbus = 'root';
  $dbpass = '';
  $conn = mysql_connect($db,$dbus,$dbpass);
  if(!$conn)
   {
      die('could not connect:'.mysql_error());
   }
  mysql_select_db('amateka') or die(mysql_error());
   
?>