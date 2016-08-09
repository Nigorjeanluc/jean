
  <?php
    $song = "";
    $artist = "";
    $album = "";
	$from_home = 0;
  if(isset($_REQUEST['fghcvdre'])) 
   { 
    $from_home = 1;
   include('connection.php');
   $pipsql = mysql_query("SELECT * FROM `".$edit."` WHERE id=".$id,$conn);
   if($lows = mysql_fetch_array($pipsql))
      { $song = $lows['name']; $artist = $lows['artist']; $album = $lows['album'];}
   }
    $var = isset($_POST['okk']);
   if($var) 
   {
   $from_home = $_POST['from2'];
   }
   $var = (isset($_POST['okk'])&&!($from_home==1));
   if($var) 
   {
     $NAME = $_POST['title'];
	 $ARTIST = $_POST['artist'];
     $ALBUM = $_POST['album'];
     $CATEGORIE = $_POST['categorie'];
     $YEAR = $_POST['YEAR'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     include('../connection.php');
	 $targetFolder = "../uploads/musics/";
	 $url = "uploads/musics/";
	 $targetFolder = $targetFolder.$NAME.$nAME2.'__Rwandownload.mp3';
	 $url = $url.$NAME.$nAME2.'__Rwandownload.mp3';
	 $sitiuation = move_uploaded_file($_FILES['files']['tmp_name'],$targetFolder);
	 if(!$sitiuation)
	 {
	   echo "<script> alert('wwapi');</script>";
	 }
	 $targetFolder = $targetFolder.$NAME.$nAME2.basename($_FILES['cover']['name']);
	 $url2 = $url.$NAME.$nAME2.basename($_FILES['cover']['name']);
	 $sitiuation = move_uploaded_file($_FILES['cover']['tmp_name'],$targetFolder);
	 if(!$sitiuation)
	 {
	   echo "<script> alert('wwapi');</script>";
	 }
	 else { mysql_query("INSERT INTO music(name,artist,album,categorie,year,file_url,icon_url) VALUES('$NAME','$ARTIST','$ALBUM','$CATEGORIE','$YEAR','$url','$url2')");}
	 
	  
   }
   $var = (isset($_POST['okk'])&&($from_home==1));
   if($var)
   {
     echo '<h1>hahahha</h1>';
       $file1 = $_FILES['files']['tmp_name'];
	   $file2 = $_FILES['cover']['tmp_name'];
	    if(($file1=="")&&($file2==""))
       {$_sql = 'UPDATE music SET name='.$song.',artist='.$artist.',album='.$album.' WHERE id='.$id; mysql_query();} 
   }
   
 ?>

	<form method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'];?>' >
	  <input type="text" class="form-control" name="title" value="<?php echo $song?>" placeholder="title" required>
	  <br />
	  <input type="text" class="form-control" name="artist" value="<?php echo $artist?>"  placeholder="artist" required>
	  <br />
	  <input type="text" class="form-control" name="album" value="<?php echo $album?>" placeholder="album" required>
	  <br />
	  <b class="color2"> Categories:</b><br />
	  <select class="form-control" name="categorie">
	  	<option>Hip-Hop</option>
		<option>Reggea</option>
		<option>Karahanyuze</option>
		<option>Rock</option>
		<option>Pop</option>
		<option>RnB</option>
		<option>Jazz</option>
		<option>Slow Francaise</option>
	  </select>
	  <br />
	  <b class="color2"> Year: </b><br />
	  <select class="form-control" name="YEAR">
		<?php
			for($karr = 1975; $karr<2050; $karr++)
			   echo "<option>$karr</option>";
		?>
	  </select>
	  <br />
	  <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />
	  <b> select a song : </b>
	   <input type="file" placeholder="categorie" class="btn btn-link pcolor" name="files" <?php if(!($from_home==1)) echo "required"; ?>/>
	   <br />
	   <b> select a cover : </b>
	   <input type="file" class="btn" name="cover" <?php if(!($from_home==1)) echo "required"; ?>/>
	   <br />
	   <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/>
	   <input type="submit" class="btn btn-link color" value="Upload your song" name="okk"/>
	   <input type="text" value="<?php echo $from_home;?>" name="from2" style="visibility:hidden"/>
   </form>
