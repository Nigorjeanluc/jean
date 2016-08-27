
 <?php
   $var = isset($_POST['okk']);
   if($var) 
   {
     $NAME = $_POST['name'];
     $CATEGORIE = $_POST['categorie'];
     $YEAR = $_POST['YEAR'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     include('connection.php');
	 $targetFolder = "../uploads/soft/";
	 $folder = 'uploads/soft/';
	 $folder = $folder.$NAME.$nAME2.'__Rwandownload.zip';
	 $targetFolder = $targetFolder.$NAME.$nAME2.'__Rwandownload.zip';
	 $sitiuation = move_uploaded_file($_FILES['files']['tmp_name'],$targetFolder);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	   echo "<pre>" ;
		echo "POST:";
		print_r($_POST);
		echo "FILES:";
		print_r($_FILES);
		echo "</pre>";
	 }
	 else { mysql_query("INSERT INTO soft(name,categorie,year,file_url) VALUES('$NAME','$CATEGORIE','$YEAR','$folder')");}
	  
   }
   
 ?>
	<form method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'];?>' >
	  <input type="text" class="form-control" name="name" placeholder="name" required>
	  <br />
	  <b class="color2"> Categories:</b><br />
	  <select class="form-control" name="categorie">
	  	<option>Windows Tools</option>
		<option>Games</option>
		<option>Engineering Software</option>
		<option>Drivers</option>
		<option>Android Apps</option>
	  </select>
	  <br />
	  <b class="color2"> Year: </b><br />
	  <select class="form-control" name="YEAR">
		<option><?php
			for($karr = 1975; $karr<2050; $karr++)
			   echo "<option>$karr</option>";
		?></option>
	  </select>
	  <br />
	  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="files"/>
	   <br />
	   <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/>
	   <input type="submit" class="btn btn-link color" value="Upload your set-up" name="okk"/>
   </form>
</body>
</html>
