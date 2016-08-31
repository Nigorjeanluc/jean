
 <?php
   $var = isset($_POST['okk']);
   if($var) 
   {
     $TTLE = $_POST['title'];
     $CATEGORIE = $_POST['categorie'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
	 $INCHAMAKE = $_POST['inshamake'];
	 $amakuru_arambuye = $_POST['amakuru_arambuye'];
	 $slides = $_POST['slideOK'];
	 if($slides=='yes')
	    $slides = 1;
	 else $slides = 0; 
	 $file_name = $_FILES['top_pic']['name'];
	 $file_tmp_name = $_FILES['top_pic']['tmp_name'];
	 $nAME2 = date('h').date('y').date('n').date('sa').'__'.(7+date('h')).(date('y')+7).(date('n')+7).(date('sa')+7);
     include('connection.php');
	 $targetFolder = "pubs/".$nAME2.basename($file_name);
	 $sitiuation = move_uploaded_file($file_tmp_name,$targetFolder);
	 $targetFolder = "admin/pubs/".$nAME2.basename($file_name);
	 /*$targetFolder = "../uploads/news/";
	 $file_location = "uploads/news/";
	 $picName = $_FILES['top_pic']['name'];
	 $targetFolder = $targetFolder.$TTLE.$nAME2.basename($_FILES['top_pic']['name']);
	 $file_location = $file_location.$TTLE.$nAME2.basename($_FILES['top_pic']['name']);
	 $sitiuation = move_uploaded_file($_FILES['top_pic']['tmp_name'],$targetFolder);*/
	 if(!$sitiuation)
	 {
	   echo "Wapi bya Failinz  ".$_FILES['top_pic']['error'];
	 }
	 else 
	 { 
	 mysql_query("INSERT INTO news(title,categorie,date,contents,resume,top_pic,slides,inshuro) 
	              VALUES('$TTLE','$CATEGORIE',now(),'$amakuru_arambuye','$INCHAMAKE','$targetFolder','$slides',0)");
	 }
	  
   }
  /* echo "<pre>" ;
		echo "POST:";
		print_r($_POST);
		echo "FILES:";
		print_r($_FILES);
		echo "</pre>"; */
   
 ?>
	<form method="post" enctype="multipart/form-data" action='<?php echo $_SERVER['PHP_SELF'];?>' >
	  <input type="text" class="form-control" id="name" name="title" placeholder="Header Title" required>
	  <br />
	  <p class="inline"><b class="color2"> Header Picture:</b><br />
	  <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	  <input type="file" class="btn btn-link pcolor" name="top_pic" required/></p>
	  <textarea class="form-control" rows=":25" placeholder="inshamake" name="inshamake" id="inchama"></textarea>
	  <br />
	  <p class="inline"><b class="color2"> text editor:</b><br /></p>
	  <div id="add_picture2">
		  <p class="btn btn-link color" id="add_picture">internet file</p>
		  <p class="btn btn-link color" id="add_a_list">list</p>
		  <p class="btn btn-link color" id="add_a_link">link</p>
		  <p class="btn btn-link color" id="add_a_para">paragraph</p>
		  <p class="btn btn-link color" id="add_a_uplo">upload a file</p>
      </div>
	  <br />
	  <textarea class="form-control" rows=":25" placeholder="amakuru arambuye" name="amakuru_arambuye" style=" display:none;" id="allstaff"></textarea>
	  <br />
	  <b class="color2"> Categories:</b><br />
	  <select class="form-control" name="categorie">
	  	<option> Science and Technology </option>
		<option>Health</option>
		<option>Tourism</option>
		<option>Job Annoucement</option>
		<option> Other News </option>
	  </select>
	  <br />
	  <b class="color2"> Slides:</b><br />
	  <select class="form-control" name="slideOK">
	    <option>yes</option>
		<option>no</option>
	  </select>
	  <br />
	  <input type="text" value="<?php echo $from;?>" name="from" style="visibility:hidden;"/>
	   <input type="submit" class="btn btn-link color" value="Update News" name="okk"/>
   </form>
   <div id="preview">
     
   </div> 
<?php
/*
if( $_FILES['top_pic']['name'] != "" )
{
copy( $_FILES['top_pic']['name'], "/var/www/html" ) or
die( "Could not copy file!");
}
else
{
die("No file specified!");
}*/
?>
