<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title> Amakuru </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="Function/default.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="Function/logo.gif">
		<link href="2/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="2/thumbnail-slider.js" type="text/javascript"></script>
	<link href="5/tooltip.css" rel="stylesheet" />
    <script src="5/tooltip.js"></script>
    <link href="5/thumbnail-slider.css" rel="stylesheet" type="text/css" />
    <script src="5/thumbnail-slider.js" type="text/javascript"></script>
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
    <!--end-->
						</div>
							<!--start-->
	<div style="padding:0;">
        <div id="thumbnail-slider">
            <div class="inner">
                <ul>
				
	<?php
					      include('connection2.php');
						  $pipsql = mysqli_query($conn,"SELECT * FROM news WHERE slides=1 AND categorie!='Artist'LIMIT 0,11");
											while($myrow = mysqli_fetch_array($pipsql))
											{
											$cat = $myrow["categorie"];
											   echo '
											   <li><a class="thumb" href="'.$myrow["top_pic"].'"  src="'.$myrow["top_pic"].'">
													 </a><h3 class="slide_tit"><a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'.
													    $myrow["title"].'</a></h3>
													 
                                                </li>
											   ';
											}
											?> 
                </ul>
            </div>
        </div>
    </div>
	
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
														?>
														</div>
														
														<?php
										include('connection2.php');
										$pipsql = mysqli_query($conn,"SELECT * FROM news WHERE slides=0 ORDER BY id DESC LIMIT 0,4");
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
								<h1 class="headingSS">Hot News</h1>
								   <!-- Posts List -->
							<section>
								<ul class="posts">
								   <?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY id DESC LIMIT 0,5");
											while($myrow = mysqli_fetch_array($pipsql))
											{
											   echo '
														<li>
															<article>
																<header>
																  <h3>
																	<a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'.$myrow["title"].'</a><br />'
																	.$myrow["title"].'
																	</a> 
																  </h3>
																	<span class="published" >'.$myrow["categorie"].'</span>
																	<time class="published" > date :'.$myrow["date"].'</time>
																</header>
																<a href="#" class="image"><img src="'.$myrow["top_pic"].'"></a>
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
								<h1 class="headingSS">TOP 10 News</h1>
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

							<!--</article>-->
						<!-- Pagination -->
							
							
							

					</div>

				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="Function/logo.png"/></a>
								<header>
									<img src="Function/images555.jpg"/>
								</header>
							</section>
							
							<!-- Mini Posts -->
							<section>
								<div class="mini-posts">
                                        <?php
											include('connection2.php');
											$pipsql = mysqli_query($conn,"SELECT * FROM videos ORDER BY id DESC LIMIT 0,4");
											   while($myrow = mysqli_fetch_array($pipsql))
											{
											    echo
												'
										<article class="mini-post">
											<header>
												<h3><a href="#">'.$myrow['name'].'</a></h3>
												<time class="published" datetime="2015-10-20">'.$myrow['artist'].'</time>
												<a href="#" class="author"><img src="'.$myrow['icon_url'].'" alt="" /></a>
											</header>
											<a href="#" class="image"><img src="'.$myrow['icon_url'].'" alt="" style="max-height:176px"/></a>
										</article>
												'
												
												;
											}
											?>
								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
								   <?php
											$pipsql = mysqli_query($conn,"SELECT * FROM news ORDER BY inshuro DESC LIMIT 0,4");
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
																	<time class="published" >'.$myrow["date"].'</time>
																</header>
																<a href="#" class="image"><img src="'.$myrow["top_pic"].'" alt="" /></a>
															</article>
														</li>
													';
											
											}?>
								</ul>
							</section>
							
														<?php include('footer.php'); ?>
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