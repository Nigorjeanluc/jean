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
		<link href="Function/default.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="Function/logo.gif">
		<link href="6/thumbs.css" rel="stylesheet" type="text/css" />
		<link href="5/ninja-slider.css" rel="stylesheet" type="text/css" />
		<!--ninjaVideoPlugin.js is required only when the slider contains video or audio.-->
		<script src="5/ninjaVideoPlugin.js"></script>
		<script src="5/ninja-slider.js" type="text/javascript"></script>
		<script type="text/javascript">
			//don't copy the script below into your page.
			if (!document.domain) alert("The video will not work properly if opening the page by local path. Please test this page through HTTP on a web or localhost server");
		</script>
		<script>
        //Note: this script should be placed at the bottom of the page, or after the slider markup. It cannot be placed in the head section of the page.
        var slides = document.getElementById("thumbnail-slider").getElementsByTagName("li");
        for (var i = 0; i < slides.length; i++) {
            slides[i].onmouseover = function (e) {
                var li = this;
                if (li.thumb) {
                    var content = "<div class='tip-wrap' style='background-image:url(" + li.thumbSrc + ");'><div class='tip-text'>" + li.thumb.innerHTML + "</div></div>";
                    tooltip.pop(li, content);
                }
            };
        }
    </script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include_once('navigation.php'); ?>

				<!-- Main -->
					<div id="main">
						<!--<article class="post">
						<!--Advertsment1-->
						<div style="max-width:1000px;margin-top:-20px;margin-bottom:30px" class="desiGN">
						<!--start-->
							<div style="padding:50px 0 100px;background:#708aa8; ">
							
							   
							</div>
								<!--start-->
		<!--start--><?php
		                                                       
																if(isset($_REQUEST['artist']))
																{
																 include('connection2.php');
																$pipsql = mysqli_query($conn,"SELECT * FROM videos WHERE id = ".$_REQUEST['id']." ORDER BY id DESC");
																while($myrow = mysqli_fetch_array($pipsql))
							   echo '
							            <div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px; margin-left:3em;">
																			<video controls loop data-autoplay="false"><source src="'.$myrow['Video_Url'].'" type="video/mp4" allowfullscreen></video>
																		</div>
							        ';
							  }
						?>
		
							<div id="ninja-slider">
								<div class="slider-inner">
									<ul>
									  <?php
											   include('connection2.php');
																$pipsql = mysqli_query($conn,"SELECT * FROM videos ORDER BY id DESC");
																$count = 0;
																$class = 'item active';
																$pics = array("","","","","");
																$title = array("","","","","");
																$dates = array("","","","","");
																$IDs = array("","","","","");
																while(($myrow = mysqli_fetch_array($pipsql))&&($count<5))
																{$pics[$count] = $myrow["icon_url"]; $title[$count] = $myrow["name"];
																$IDs[$count] = $myrow["id"]; $videos[$count] = $myrow["Video_Url"];
																$count++;}
																 for($ii=0;$ii<5;$ii++){
																	 //<iframe src="'.$videos[$ii].'" frameborder="0" allowfullscreen></iframe>
																	 echo'
																	 <li>
																		<div class="video" style="background-color:transparent;height:auto;top:auto;bottom:0px;">
																			<video controls loop data-autoplay="false"><source src="'.$videos[$ii].'" type="video/mp4" allowfullscreen></video>
																		</div>
																		<a class="ns-img" href="'.$pics[$ii].'"></a>
																		<div class="video-playbutton-layer"></div>
																	</li>
																	 ';
																 }
																?>
									</ul>
								</div>
							</div>
						</div>
						<?php include('footer.php'); ?>
					</div>
					
			

				<!-- Sidebar -->
					<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="Function/logo.png"/></a>
								<header>
								<?php
					
					 include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM publicity WHERE WHERETO = 'SQUARE : 299x169' LIMIT 0,1");
											 while($myrow = mysqli_fetch_array($pipsql)) echo "<a href=".$myrow['URL_OF_PUB']."><img src=".$myrow['URL_PIC']." width='299' height='169'/></a>";
											 ?>
								</header>
					  </section>
					  <?php
		                                                       
																if(isset($_REQUEST['artist']))
																{
																echo '
																<div   class="borders bordleft">
							<h1 class="headingSS">related vidoes </h1>
								<ul class="posts">
																
																';
																
																 include('connection2.php');
																$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE categorie = "'.$_REQUEST['type'].'" ORDER BY id DESC');
																while($myrow = mysqli_fetch_array($pipsql))
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
														</li>';
														echo '</ul></div>';
							  }
							  
							  if(isset($_REQUEST['artist']))
																{
																echo '
																<div   class="borders bordleft">
							<h1 class="headingSS">related artist </h1>
								<ul class="posts">
																
																';
																
																 include('connection2.php');
																$pipsql = mysqli_query($conn,'SELECT * FROM videos WHERE artist = "'.$_REQUEST['artist'].'" ORDER BY id DESC');
																while($myrow = mysqli_fetch_array($pipsql)){
							   echo '
														<li class="raed">
															<article>
																<header>
																  <h3>
																	<a href="videos.php?type='.$myrow['artist'].'&amp;artist='.$myrow['artist'].'&amp;id='.$myrow['id'].'" ">'
																	.$myrow["name"].' by '.$myrow["artist"].'
																	</a>
																  </h3>
																</header>
																<a href="#" class="image"><img src="'.$myrow["icon_url"].'" alt="" /></a>
															</article>
														</li>';
														echo '</ul></div>';}
							  }
						?>

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
											 while($myrow = mysqli_fetch_array($pipsql)) echo "<a href=".$myrow['URL_OF_PUB']."><img src=".$myrow['URL_PIC']." width='299' height='169'/></a>";
											 ?>
								</div>

						<!-- About -->
						<div   class="borders bordleft">
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="about.php" class="button">Learn More</a></li>
								</ul>
							</section>
							</div>

					</section>
					
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