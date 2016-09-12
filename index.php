
<!DOCTYPE HTML>
<html>
	<head>
		<title>KUMATEKA.COM </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="Function/default.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="Function/logo.gif">
		<link href="themes/3/ninja-slider.css" rel="stylesheet" />
		<script src="themes/3/ninja-slider.js"></script>
		<link href="themes/3/thumbnail-slider.css" rel="stylesheet" type="text/css" />
		<script src="themes/3/thumbnail-slider.js" type="text/javascript"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--<style>
		    #amatekaSlides {background-image:url(Function/pipBack.png); border-radius:10px; box-shadow:0px 0px 10px #9da7a3; padding-top:2%;}
		    div#AmatekaSlides div.active { margin:auto;}
			div#AmatekaSlides div h4 { text-align:center; font-size:0.8em;}
		</style>-->
		<style>
		  .borders {margin-top:2em; border:1px solid #fff; border-radius:1em; padding:1em; width:auto; background-image:url(Function/pipBack.png)}
		  .bordright {border-right:0;}
		  .bordleft {border-left:0;}
		  h1.headingSS {color:#000099; font-size:18px; text-align:center; background-color:#FFFFFF;border-radius:1em; padding:0.5em;}
		</style>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include_once('navigation.php'); ?>

				<!-- Main -->
					<div id="main">
						<!--Advertsment1-->
						<div style="max-width:1000px;margin-top:-20px;"  class="bigScreen">
						<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'RECTANGLE : 1026x101' LIMIT 0,1");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'"  width="1026" height="101" /></a>';
								?>
						</div>
					<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM news WHERE slides=1 ORDER BY id DESC");
											$count = 0;
											$class = 'item active';
											$pics = array("","","","","");
											$title = array("","","","","");
											$dates = array("","","","","");
											$IDs = array("","","","","");
											$Comments = array("","","","","");
											$Inshuro = array("","","","","");
											$Categorie = array("","","","","");
											$Resume = array("","","","","");
											while(($myrow = mysqli_fetch_array($pipsql))&&($count<5))
											{$pics[$count] = $myrow["top_pic"]; $title[$count] = $myrow["title"];
											$IDs[$count] = $myrow["id"]; $dates[$count] = $myrow["date"];
											$Comments[$count] = $myrow["comments"];
											$Inshuro[$count] = $myrow["inshuro"];
											$Categorie[$count] = $myrow["categorie"];
											$Resume[$count] = $myrow["resume"];
											$count++;}
					
					echo'
					 <!--start-->
						<div style="width:1000px;margin:80px auto;" class="desiGN bigScreen">
							<div id="ninja-slider" style="float:left;">
								<div class="slider-inner">
									<ul>';
				   for($ii=0;$ii<5;$ii++)
				               echo'<li><a class="ns-img" href="'.$pics[$ii].'"></a>
										<h3 class="slide_tit">
										<a href="Newsdisplay.php?hdhsajdg='.$dates[$ii].'&hdfjafreuruqifhjak='.$IDs[$ii].'">'.$title[$ii].'</a></h3></li>';
                             echo '</ul>
                                   <div class="fs-icon" title="Expand/Close"></div>
                               </div>
                            </div>
                         <div id="thumbnail-slider" style="float:left;">
                            <div class="inner">
                               <ul>';
					for($ii=0;$ii<5;$ii++)
					        echo '<li><a class="thumb" href="'.$pics[$ii].'"></a></li>';
					echo'
                   
               </ul>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
					
					';
					
					
					?>
					<!--Advertsment2-->
						<div style="max-width:1000px;margin-top:-20px;margin-bottom:30px" class="bigScreen"> 
						<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'RECTANGLE : 1026x101' LIMIT 1,1");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'" width="1026" height="101" /></a>';
								?>
						</div>
					<article class="post post2">
						<section>
							<div class="row">
								<div class="8u 12u$(medium)">
								<div class="SmallScreen">
								 <?php
													$counting = 0;
														for($ii=0; $ii<3; $ii++)
														{
														$counting++;
														 echo'
															 
															<h2 class="title">
																<a href="Newsdisplay.php?hdhsajdg='.$dates[$ii].'&hdfjafreuruqifhjak='.$IDs[$ii].'">'.$title[$ii].'</a>
															</h2><br />
															 <a href="Newsdisplay.php?hdhsajdg='.$dates[$ii].'&hdfjafreuruqifhjak='.$IDs[$ii].'" class="image featured">  
																<img width="100%" height="500px" src="'.$pics[$ii].'" alt="..."> 
															  </a><br />
															<p class="text">'.$Resume[$ii].'</p>
															<header>
																
																<div class="meta">
																   <time class="published" id="date'.$counting.'">
																	 
																   </time>
																   <script>
																	 var datee = "'.$dates[$ii].'";
																	 datee = datee.substring(0,18);
																	 document.getElementById("date" + '.$counting.').innerHTML = datee;
																   </script>
																   
																	<a href="#" class="author">
																	  <span class="name">'.$Categorie[$ii].'</span>
																	  <img src="images/avatar.jpg" alt="" />
																	</a>
																</div>
															</header>
															<footer>
															   <ul class="actions">
																   <li><a href="Newsdisplay.php?hdhsajdg='.$dates[$ii].'&hdfjafreuruqifhjak='.$IDs[$ii].'">Continue Reading</a></li>
															   
																	<li><a href="#">'.$Categorie[$ii].'</a></li>
																	<li><a href="#" class="icon fa-heart"><strong style="color:#fff" > views:  </strong>'.$Inshuro[$ii].'</a></li>
																	<li><a href="#" class="icon fa-comment"><strong style="color:#fff" > comments: </strong>'.$Comments[$ii].'</a></li>
																</ul>
															</footer><br /><br /><hr />';
														}
														?></div>
														<?php
										include('connection2.php');
										$pipsql = mysqli_query($conn,"SELECT * FROM news WHERE slides=0 ORDER BY id DESC LIMIT 0,3");
						                $counting = 0;
											while($myrow = mysqli_fetch_array($pipsql))
											{
											$counting++;
											$cat = $myrow["categorie"];
										     echo'
								                 
										        <h2 class="title">
													<a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'.$myrow["title"].'</a>
												</h2><br />
												 <a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'" class="image featured">  
													<img width="100%" height="500px" src="'.$myrow["top_pic"].'" alt="..."> 
												  </a><br />
								                <p class="text">'.$myrow["resume"].'</p>
												<header>
									                
													<div class="meta">
										               <time class="published" id="date'.$counting.'">
													     
													   </time>
													   <script>
							                             var datee = "'.$myrow["date"].'";
														 datee = datee.substring(0,18);
							                             document.getElementById("date" + '.$counting.').innerHTML = datee;
							                           </script>
													   
										                <a href="#" class="author">
													      <span class="name">'.$myrow["categorie"].'</span>
														  <img src="images/avatar.jpg" alt="" />
														</a>
													</div>
												</header>
								                <footer>
									               <ul class="actions">
										               <li><a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">Continue Reading</a></li>
									               
										                <li><a href="#">'.$myrow["categorie"].'</a></li>
														<li><a href="#" class="icon fa-heart"><strong style="color:#fff" > views:  </strong>'.$myrow["inshuro"].'</a></li>
														<li><a href="#" class="icon fa-comment"><strong style="color:#fff" > comments: </strong>'.$myrow["comments"].'</a></li>
													</ul>
												</footer><br /><br /><hr />';
											}
											?>
											
						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="" class="disabled button big previous">Previous Page</a></li>
								<li><a href="#" class="button big next">Next Page</a></li>
							</ul>
								</div>
								<div class="4u$ 12u$(medium)">
								<div   class="borders bordright">
								<h1 class="headingSS">Pub</h1>
								<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 1,2");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'"  width="299" height="169"/></a>';
								?></div>
								<div   class="borders bordright">
								<h1 class="headingSS">New Songs</h1>
								   <!-- Posts List -->
							<section>
								<ul class="posts">
								   <?php
											$pipsql = mysqli_query($conn,"SELECT * FROM music ORDER BY id DESC LIMIT 0,10");
											while($myrow = mysqli_fetch_array($pipsql))
											{
											   echo '
														<li>
															<article>
																<header>
																  <h3>
																	<a href="artist.php?hdhsajdg='.$myrow["year"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'
																	.$myrow["name"].'  </a>by  
																	<a href="artist.php?hdhsajdg='.$myrow["year"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'
																	.$myrow["artist"].'
																	</a> 
																  </h3>
																    <span class="published" > style :'.$myrow["categorie"].'</span>
																	<span class="published" > album :'.$myrow["categorie"].'</span>
																	<span class="published" > votes :'.$myrow["votes"].'</span>
																	<time class="published" > year :'.$myrow["year"].'</time>
																</header>
																<a href="#" class="image"><img src="'.$myrow["icon_url"].'"></a>
															</article>
														</li>
													';
											
											}?>
								</ul>
							</section></div>
							<div   class="borders bordright">
								<h1 class="headingSS">Pub</h1>
								<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 3,4");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'"  width="299" height="169"/></a>';
								?>
								</div>
								
									<div   class="borders bordright">
								<h1 class="headingSS">TOP 10 Songs</h1>
								   <!-- Posts List -->
							<section>
								<ul class="posts">
								   <?php
											$pipsql = mysqli_query($conn,"SELECT * FROM music ORDER BY votes DESC LIMIT 0,10");
											while($myrow = mysqli_fetch_array($pipsql))
											{
											   echo '
														<li>
															<article>
																<header>
																  <h3>
																	<a href="artist.php?hdhsajdg='.$myrow["year"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'
																	.$myrow["name"].'  </a>by  
																	<a href="artist.php?hdhsajdg='.$myrow["year"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'
																	.$myrow["artist"].'
																	</a> 
																  </h3>
																    <span class="published" > style :'.$myrow["categorie"].'</span>
																	<span class="published" > album :'.$myrow["categorie"].'</span>
																	<time class="published" > year :'.$myrow["year"].'</time>
																</header>
																<a href="#" class="image"><img src="'.$myrow["icon_url"].'"></a>
															</article>
														</li>
													';
											
											}?>
								</ul>
							</section></div>
								</div>
								</div>
								</section>
								</article>
							<div style="max-width:1000px;margin-top:-20px;margin-bottom:30px" class="bigScreen"> 
						<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'RECTANGLE : 1026x101' LIMIT 2,2");
											 while($myrow = mysqli_fetch_array($pipsql)) echo '<a href="'.$myrow["URL_OF_PUB"].'"> <img src="'.$myrow["URL_PIC"].'" width="1026" height="101" /></a>';
								?>
						</div>
							<?php include('footer.php'); ?>
					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="Function/logo.gif" width=50 height=80/></a>
								<header>
								<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 0,1");
											 while($myrow = mysqli_fetch_array($pipsql)) echo "<a href=".$myrow['URL_OF_PUB']."><img src=".$myrow['URL_PIC']." width='299' height='169'/></a>";
											 ?>
								</header>
					  </section>

						<!-- Mini Posts -->
						<div   class="borders bordleft">
						<h1 class="headingSS">TOP 10 videos</h1>
							<section>
								<div class="mini-posts">
                                        <?php
											include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM videos ORDER BY id DESC LIMIT 0,10");
											   while($myrow = mysqli_fetch_array($pipsql))
											{
											    echo
												'
										<article class="mini-post">
											<header>
												<h3><a href="#">'.$myrow['name'].'</a></h3>
												<time class="published" datetime="2015-10-20">'.$myrow['artist'].'</time>
												<a href="videos.php?type='.$myrow['artist'].'&amp;artist='.$myrow['artist'].'&amp;id='.$myrow['id'].'" class="author"><img src="'.$myrow['icon_url'].'" alt="" /></a>
											</header>
											<a href="videos.php?type='.$myrow['artist'].'&amp;artist='.$myrow['artist'].'&amp;id='.$myrow['id'].'" class="image"><img src="'.$myrow['icon_url'].'" alt="" style="max-height:176px"/></a>
										</article>
												'
												
												;
											}
											?>
								</div>
							</section>
							</div>
							<div   class="borders bordleft">
							 <h1 class="headingSS">PUBS</h1>
							<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 5,6");
											 while($myrow = mysqli_fetch_array($pipsql)) echo "<a href=".$myrow['URL_OF_PUB']."><img src=".$myrow['URL_PIC']." width='299' height='169'/></a>";
											 ?>
								</div>
								

						<!-- Posts List -->
							<section>
							<div   class="borders bordleft">
							<h1 class="headingSS">TOP 10 Stories</h1>
								<ul class="posts">
								   <?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY inshuro DESC LIMIT 0,10");
											while($myrow = mysqli_fetch_array($pipsql))
											{
											   echo '
														<li class="raed">
															<article>
																<header>
																  <h3>
																	<a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'
																	.$myrow["title"].'
																	</a>
																  </h3>
																	<time class="published" >views: '.$myrow["inshuro"].'</time>
																</header>
																<a href="#" class="image"><img src="'.$myrow["top_pic"].'" alt="" /></a>
															</article>
														</li>
													';
											
											}?>
								</ul>
								</div>
							</section>
							<div   class="borders bordleft">
							 <h1 class="headingSS">PUBS</h1>
							<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 7,8");
											 while($myrow = mysqli_fetch_array($pipsql)) echo "<p><a href=".$myrow['URL_OF_PUB']."><img src=".$myrow['URL_PIC']." width='200' height='169'/></a></p>";
											 ?>
								</div>

						<!-- About -->
						<div  style="background-color:#000066; padding:10px;border-radius:1em"  class="bordleft">
							<section>
								<h2 style="color:#FFFFFF">About KUMATEKA</h2>
								<p>
									<h3  style="color:#FFFFFF">Politike</h3>
									<p  style="color:#FFFFFF">Menya amakuru agezweho ajyanye na politike n'imiyoborere ku isi yose.</p>
									<h3 style="color:#FFFFFF">Ubuzima</h3>
									<p style="color:#FFFFFF">Menya uburyo wakwirinda cyangwa wakwivuza zimwe mu ndwara ndetse nuko wabungabunga ubuzima</p>
									<h3 style="color:#FFFFFF">Imyidagaduro</h3>
									<p style="color:#FFFFFF">Menya amakuru ya Sport, Abahanzi, Ibitaramo n'ibindi.</p>
									<h3 style="color:#FFFFFF">Umuco</h3>
									<p style="color:#FFFFFF">Menya ibyo hambere, umuco w'iwacu ndetse n'indi mico yo yanze igiye itandukanye</p>
								</p>
								<ul class="actions">
									<li><a href="about.php" class="button"><p style="color:#2AFFFF">Learn More</p></a></li>
								</ul>
							</section>
							</div>

						<!-- Footer -->
						
					</section>


			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<!--<script src="Function/functions.js"></script>-->

	</body>
</html>
