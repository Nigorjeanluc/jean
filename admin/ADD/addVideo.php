
 <?php
   $var = isset($_POST['okk']);
   if($var) 
   {
     $NAME = $_POST['name'];
	 $ARTIST = $_POST['artist'];
     $CATEGORIE = $_POST['categorie'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     $YEAR = $_POST['YEAR'];
     include('connection.php');
	 $targetFolder = "../uploads/vids/";
	 $_url = "uploads/vids/";
	 $targetFolder2 = $targetFolder.$NAME.$nAME2.'__Rwandownload.mp4';
	 $default_url = $_url.$NAME.$nAME2.'__Rwandownload.mp4';
	 $default_url2 = $_url.$NAME.$nAME2.basename($_FILES['icon']['name']);
	 $default_url3 = "../uploads/vids/".$NAME.$nAME2.basename($_FILES['icon']['name']);
	 $sitiuation = move_uploaded_file($_FILES['files']['tmp_name'],$targetFolder2);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	 }
	 $sitiuation = move_uploaded_file($_FILES['icon']['tmp_name'],$default_url3);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	 }
	 else { mysql_query("INSERT INTO videos(name,artist,categorie,year,Video_Url,icon_url) VALUES('$NAME','$ARTIST','$CATEGORIE','$YEAR','$default_url','$default_url2')");}
	 
	 /*echo "<pre>" ;
		echo "POST:";
		print_r($_POST);
		echo "FILES:";
		print_r($_FILES);
		echo "</pre>";*/
	  
   }
   
 ?>
	<form method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'];?>' >
	  <input type="text" class="form-control" name="name" placeholder="name" required>
	  <br />
	  <input type="text" class="form-control" name="artist"  placeholder="artist" required>
	  <br />
	  <b class="color2"> Categories:</b><br />
	  <select class="form-control" name="categorie">
	  	<option>New Clips</option>
		<option>Tutorials</option>
		<option>Documentaries</option>
		<option>Reporters</option>
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
	  <input type="hidden" name="MAX_FILE_SIZE" value="200000000" />
	  <b> upload a video:</b>
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="files"/>
	   <input type="text" class="form-control" name="url_video"  placeholder="video url" required>
	   <br />
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="icon" required/>
	   <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/>
	   <input type="submit" class="btn btn-link color" value="Upload your video" name="okk"/>
   </form>

