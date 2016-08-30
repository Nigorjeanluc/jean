<!DOCTYPE HTML>

<?php
										
								
								$date = array(" "," "," "," "," "," "," "," "," "," ");
								$top_pic = array(" "," "," "," "," "," "," "," "," "," ");
								$id = array(" "," "," "," "," "," "," "," "," ","");
								$title = array(" "," "," "," "," "," "," "," "," ","");
								$resume = array(" "," "," "," "," "," "," "," "," "," ");
								$contents =array(" "," "," "," "," "," "," "," "," "," ");
								include('connection2.php');
								if(isset($_REQUEST['hdfjafreuruqifhjak']))
											  {$loop = $_REQUEST['hdfjafreuruqifhjak'];
											 $pipsql = mysqli_query($conn,"SELECT * FROM news WHERE id=$loop LIMIT 0,10");
											  $bool = true;
											  }
											else if(isset($_REQUEST['hdfjafreuruqifhj']))
											 { $loop = $_REQUEST['hdfjafreuruqifhj'];
											  $pipsql = mysqli_query($conn,"SELECT * FROM news WHERE categorie='$loop' LIMIT 0,10");
											  $bool = false;
											  }
											  else if(isset($_POST['okk']))
											 { $loop = $_POST['hidethis'];
											$pipsql = mysqli_query($conn,"SELECT * FROM news WHERE id='$loop' LIMIT 0,10");
											  $bool = true;
											  }
											  $co = 0;
											while(($myrow = mysqli_fetch_array($pipsql))&&($co<10))
											{
											
												$date[$co] = $myrow['date'];
												
								$top_pic[$co] = $myrow['top_pic'];
								$id[$co] = $myrow['id'];
								$title[$co] = $myrow['title'];
								$resume[$co] = $myrow['resume'];
								$contents[$co] =$myrow['contents'];
								$co++;
											}
											?>

<html>
	<head>
		<title>dhkdsjhfhsjk </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="main.css" rel="stylesheet" type="text/css" />
		<link href="Function/default.css" rel="stylesheet" type="text/css" />
		<link href="assets/js/jquery.min.js" rel="stylesheet" type="text/css" />
		<link href='js/bootstrap.min.js' rel="stylesheet" type="text/css" />
		<link rel="icon" href="Function/logo.gif">
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include_once('navigation.php'); ?>

				<!-- Main -->
					<div id="main">
							<article class="post post2">
								<div class="mini-posts">
                                        <?php
											/*include('connection.php');
											$pipsql = mysql_query("SELECT * FROM videos ORDER BY id DESC LIMIT 0,4",$conn);
											   while($myrow = mysql_fetch_array($pipsql))
											{
											    echo
												'
										<article class="mini-post">
											<header>
												<h3><a href="#">'.$myrow['name'].'</a></h3>
												<time class="published" datetime="2015-10-20">'.$myrow['artist'].'</time>
												<a href="#" class="author"><img src="'.$myrow['icon_url'].'" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="'.$myrow['icon_url'].'" alt="" /></a>
										</article>
												'
												
												;
											}
											*/?>
											
										<section>
										<div class="row">
										<div class="8u 12u$(medium)">
										<?php
										$booll = isset($_POST["okk"]);
										if($booll)
										{
											
										$name = $_POST['izina'];
										$phone =  $_POST['phone'] ;
										$Email =  $_POST['EEmail'] ;
										$commentTT =  $_POST['vfewfwkjhff'];
										$Where = $_POST['hideThis2'];
										include('connection2.php');
										$qry="INSERT INTO comments(name,tel,EEmail,commment,whrerere,allow) values('$name','$phone','$Email','$commentTT','$Where','no')";
										include('connection2.php');
										$result=mysqli_query($conn,$qry);
					
											if($result)
											{
												echo"<h3 style='color:lighter blue;' class='text-center'>Thanks for your comment!!!</h3>";
											}
											else 
											{
											   echo 'wapi';
											}
										
										}?>
								
											<?php
											echo '<ul class="media-list">';
											if(!$bool)
											{
												for($ii=0;$ii<11;$ii++)
												{
											echo
											'
											      <div class="media-left">
												     <a href="Newsdisplay.php?hdfjafreuruqifhjak="'.$id[$ii].'">
													    <img width="100%" height="500px" src="'.$top_pic[$ii].'" alt="...">
												     </a>
											      </div>
											      <div class="media-body">';
											echo '<br />';
										    echo '<h4 style="font-style:none; color:white">'.$title[$ii].'</h4>';
											echo '<br />';
                                            echo "<p>".$resume[$ii].
											     '<a href="Newsdisplay.php?hdfjafreuruqifhjak='.$id[$ii].'" class="btn btn-link pull-right">Read more</a>';
                                            echo '<br /><i>on ';
											echo $date[$ii].'</i><br /></p>
												  </div>
											   <hr />
												';}}
											else
											{
											      $inchuro = $myrow["inshuro"];
												  $inchuro++;
												  $_sql = 'UPDATE news SET inshuro='.$inchuro.' WHERE id='.$loop;
												  mysqli_query( $conn,$_sql); 
											  echo '
													      <div class="position">
														  <h1 class="title">'.$title[0].'</h1><br />
														    <a href="#">
													          <img width="100%" height="600px" src="'.$top_pic[0].'" alt="...">
												            </a>
														  </div>
														  <div class="text">
															<br />
												            <p style="font-style:italic;">'.$resume[0].'</p>
															<p style="font-style:none;">'.$contents[0].'</p>
												           <br />
												           </div>'
													;
											}
											echo '</ul>';
											?>
										<section>
										<h2 class="title" id="title"></h2>
										<?php
										
										$ii = 0;
										$pipsql = mysqli_query($conn,"SELECT * FROM comments WHERE whrerere='$date[0]' AND allow='yes'");
										while($myrow = mysqli_fetch_array($pipsql))
											{
											  echo '
										<h4 class="comments">'.$myrow['name'].'</h4>';
										echo '<blockquote class="comments">'.$myrow['commment'].'</blockquote>';	
										$ii++;
											}
										
										?>
										
										</section><hr />
										<?php
										if($bool)
										{
										echo '
										<h3 class="title">Leave a comment here</h3>
										<form class="text" method="post" action="';
       										echo $_SERVER['PHP_SELF'].'">';
											echo '
											<input class="form-control" type="text" name="izina" placeholder="Izina"><br />
											<input class="form-control" type="text" name="phone" placeholder="Phone number"><br />
											<input class="form-control" type="text" name="EEmail" placeholder="Email"><br />
											<textarea name="vfewfwkjhff" type="text" class="form-control" rows=":25" placeholder="Recipient\'s username" aria-describedby="basic-addon2"></textarea>
											<input type="submit" value="Send" name="okk" />
											<input type="text" name="hidethis" style="visibility:hidden" value="<?php echo $id[0];    ?>" />
											<input type="text" name="hideThis2" style="visibility:hidden" value="<?php echo $date[0];?>" />
										</form>';
										}
									?>	
										</div>
								<div class="4u$ 12u$(medium)">
								
								<div style="margin-top:2em; border:1px solid #fff; border-radius:1em; padding:1em; border-right:0; width:auto;">
								<h1  style="color:#FFFFFF; font-size: 18px;">Pub</h1>
								<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 1,4");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'"  width="299" height="169"/></a>';
								?></div>
								</div>
												</section>
								</div>
							</article>

						<!-- Pagination -->
						<?php
						 if(!$bool)
						   echo '
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>';
							 include('footer.php'); ?>
					</div>

				<!-- Sidebar -->
					<!--<section id="sidebar">-->
						<!-- Footer -->
							

					<!--</section>-->

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="Function/functions.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<input type="text" value=<?php echo'"'.$ii.'"' ;?> style="visibility:hidden" id="uyunguyu" >
	</body>
</html>