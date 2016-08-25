<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->

<html>
	<head>
		<title> Amashusho </title>
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
										$name = $_POST['izina'];
										$phone =  $_POST['phone'] ;
										$Email =  $_POST['email'] ;
										$commentTT =  $_POST['textarea'];
										$Where = $_POST['values'];
										include('connection.php');
										$qry="INSERT INTO comments(name,tel,EEmail,commment,whrerere) values('$name','$phone','$Email','$commentTT','$Where')";
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
								include('connection.php');
											
											if(isset($_REQUEST['hdfjafreuruqifhjak']))
											  {$loop = $_REQUEST['hdfjafreuruqifhjak'];
											 $pipsql = mysql_query("SELECT * FROM news WHERE id=$loop",$conn);
											  $bool = true;}
											else if(isset($_REQUEST['hdfjafreuruqifhj']))
											 { $loop = $_REQUEST['hdfjafreuruqifhj'];
											  $pipsql = mysql_query("SELECT * FROM news WHERE categorie='$loop'",$conn);
											  $bool = false;
											  }
											  else if(isset($_POST['okk']))
											 { $loop = $_POST['hidethis'];
											$pipsql = mysql_query("SELECT * FROM news WHERE id='$loop'",$conn);
											  $bool = true;
											  }
											while($myrow = mysql_fetch_array($pipsql))
											{
											echo '<ul class="media-list">';
											if(!$bool)
											{
											echo
											'
											      <div class="media-left">
												     <a href="Newsdisplay.php?hdfjafreuruqifhjak="'.$myrow["id"].'">
													    <img width="100%" height="500px" src="'.$myrow["top_pic"].'" alt="...">
												     </a>
											      </div>
											      <div class="media-body">';
											echo '<br />';
										    echo '<h4 style="font-style:none; color:white">'.$myrow["title"].'</h4>';
											echo '<br />';
                                            echo "<p>".$myrow["resume"].
											     '<a href="Newsdisplay.php?hdfjafreuruqifhjak='.$myrow["id"].'" class="btn btn-link pull-right">Read more</a>';
                                            echo "<br /><i>on ".$myrow["date"].'</i><br /></p>
												  </div>
											   <hr />
											';}
											else
											{
											      $inchuro = $myrow["inshuro"];
												  $inchuro++;
												  $_sql = 'UPDATE news SET inshuro='.$inchuro.' WHERE id='.$loop;
												  mysql_query( $_sql, $conn ); 
											  echo '
													      <div class="position">
														  <h1 class="title">'.$myrow["title"].'</h1><br />
														    <a href="#">
													          <img width="100%" height="600px" src="'.$myrow["top_pic"].'" alt="...">
												            </a>
														  </div>
														  <div class="text">
															<br />
												            <p style="font-style:italic;">'.$myrow["resume"].'</p>
															<p style="font-style:none;">'.$myrow["contents"].'</p>
												           <br />
												           </div>
													';
											}
											echo '</ul>';
											}
											?>
										<section>
										<h2 class="title">Comments</h2>
										<h4 class="comments">Some comments here</h4>
										<blockquote class="comments">Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
										</section><hr />
										<h3 class="title">Leave a comment here</h3>
										<form class="text" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
											<input class="form-control" type="text" name="izina" placeholder="Izina"><br />
											<input class="form-control" type="text" name="phone" placeholder="Phone number"><br />
											<input class="form-control" type="text" name="EEmail" placeholder="Email"><br />
											<textarea name="vfewfwkjhff" type="text" class="form-control" rows=":25" placeholder="Recipient's username" aria-describedby="basic-addon2"></textarea>
											<input type="submit" value="Send" name="okk" />
											<input type="text" name="hidethis" style="visibility:hidden" value="<?php echo $idd; ?>" />
											<input type="text" name="hideThis2" style="visibility:hidden" value="<?php echo $datte; ?>" />
										</form>
										</div>
								
								<div class="4u$ 12u$(medium)">
								
								<div style="margin-top:2em; border:1px solid #fff; border-radius:1em; padding:1em; border-right:0; width:auto;">
								<h1  style="color:#FFFFFF; font-size: 18px;">Pub</h1>
								<?php
					
					 include('connection.php');
											$pipsql = mysql_query("SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 1,4",$conn);
											 while($myrow = mysql_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'"  width="299" height="169"/></a>';
								?></div>
								</div>
												</section>
								</div>
							</article>

						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>
							
							<?php include('footer.php'); ?>
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
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>