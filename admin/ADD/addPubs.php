
 <form  method="post" action="USERS.php">

<div class="title"><h2>fill the forn</h2></div>
	<div ><label> </label><div><input type="text" name="input" placeholder="name"/></div></div>
	<div ><label> </label><div ><input type="text" name="input1" placeholder="contact"/></div></div>
	<div ><label ></label><div><input type="text" name="input2" placeholder="password"/></div></div>
<div class="submit"><input type="submit" value="Submit" name="okk"/></div></form>
 <h2 style=" text-align:center;" class="color2"> add Pub </h2>
 
<form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">

<div class="title"><h2>fill the form</h2></div>
	<div ><div><input type="text" name="picspics" placeholder="URL"/></div></div>
	<div ><div><input type="file" name="URL" />
	           <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
   </div></div>
	select a size:
	<select class="form-control" name="WHERE_TO_">
	  	<option>SQUARE : 299x169</option>
		<option>RECTANGLE : 1026x101</option>
	  </select>
	  <br />
	  select a page:
	  <select class="form-control" name="PAGEEES">
	  	<option>AHABANZA</option>
		<option>ABAHANZI</option>
		<option>VIDEO</option>
		<option>AMAFOTO</option>
		<option>AMAKURU</option>
	  </select>
<div ><div>
<div class="submit"><input type="submit" value="Submit" name="okk22"/></div>
</form>

<?php
		$var = isset($_POST['okk22']);
   if($var) 
   {
     $URL_PUB = $_POST['picspics'];
	 $WHERE_TO_PUT = $_POST['WHERE_TO_'];
     $PAGESS = $_POST['PAGEEES'];
	 $file_name = $_FILES['URL']['name'];
	 $file_tmp_name = $_FILES['URL']['tmp_name'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     include('connection.php');
	 $targetFolder = "pubs/".$nAME2.basename($file_name);
	 $sitiuation = move_uploaded_file($file_tmp_name,$targetFolder);
	 $targetFolder = "admin/pubs/".$nAME2.basename($file_name);
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz";
	 }
	 else { mysql_query("INSERT INTO publicity(WHERETO,PAGESS,URL_OF_PUB,URL_PIC) VALUES('$WHERE_TO_PUT','$PAGESS','$URL_PUB','$targetFolder')");}}
   
 ?>