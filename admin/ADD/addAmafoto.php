
 <?php
		global $file_location;
		 if(isset($_POST['Submit']))
		 {
			if(getimagesize($_FILES['image']['tmp_name'])== FALSE)
			{
			 	echo "Select an image Please!!!";
			}else{
				/*$image= addslashes($_FILES['image']['tmp_name']);
				$name= addslashes ($_FILES['image']['name']);
				$image= file_get_contents($image);
				$image= base64_encode($image);*/
				$targetFolder = "uploads/amafoto/";
				$file_location = "uploads/amafoto/";;
				$name = $_FILES['image']['name'];
				$targetFolder = $targetFolder.basename($_FILES['image']['name']);
				$file_location = $file_location.basename($_FILES['image']['name']);
				$image_file_type = pathinfo($targetFolder,PATHINFO_EXTENSION);
				$sitiuation = move_uploaded_file($_FILES['image']['tmp_name'],$targetFolder);
				if(!$sitiuation)
				{
					echo "<h1 style='color:#000;'>Wapi bya Failinz  </h1>".$_FILES['image']['error'];
				}else{
					saveimage($name,$file_location);
				}
			}
		 }
		 function saveimage($name,$file_location)
		 {
		  	$Btitle= $_POST['BigTitle'];
			$Stitle= $_POST['SmallTitle'];
			$Comment= $_POST['Comment'];
			include("connection2.php");
			/*$con= mysql_connect('localhost','root','');
			mysql_select_db('mosesizabiriza',$con);*/
			$qry="INSERT INTO amafoto(Title,Other_Title,Images,Name,Comments) values('$Btitle','$Stitle','$file_location','$name','$Comment')";
			$result=mysqli_query($conn,$qry);
			if($result)
			{
			 	echo"<br /><h3>Image Uploaded!!!</h3>";
			}
			else
			{
				echo"<br /><h3>Image not Uploaded!!!</h3>";  
			}
		 }
		 echo'
		 	<p class="text-center textcolor">
		  	 <form role="form" method="post" enctype="multipart/form-data" action="ADD.php?lll=Amafoto">
			 	   <div class="form center-block">
				   		<div class="form-group">
							 <label for="exampleInputFile" style="color:#000000">File input</label>
							 <input type="file" name="image" required />
							 <p class="help-block" style="color:#000000">Choose your image</p>
							 <label for="BigTitle" style="color:#000000">Title</label><br />
							 <input class="form-control" type="text" id="BigTitle" name="BigTitle" required /><br /><br />
							 
							 <label for="SmallTitle" style="color:#000000">Other title</label><br />
							 <input class="form-control" type="text" id="SmallTitle" name="SmallTitle" /><br /><br />
							 <label style="color:#000000">Other Comments</label><br />
							 <textarea class="form-control" rows="5" name="Comment" required ></textarea>
						</div>
						<button type="submit" class="btn btn-link" name="Submit">Submit</button>
				   </div>
			 </form>
		  </p>';
		 /*function displayimage()
		 {
		 	$con=mysql_connect('localhost','root','');
			mysql_select_db('mosesizabiriza',$con);
			$qry="SELECT * FROM art_pics";
			$result=mysql_query($qry,$con);
			while($row=mysql_fetch_array($result))
			{
				echo '<img height="300" width="300" scr="data:image;base64,'.$row[0].'">';
			}
			mysql_close($con);
		 }*/
	?>
	 <div class="row featurette">
        <div class="col-md-12">
          <!--<h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>-->
          
        </div>
      </div>