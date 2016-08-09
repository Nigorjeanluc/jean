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
					      include('connection.php');
						  $pipsql = mysql_query("SELECT * FROM news WHERE slides=1 AND categorie!='Artist'LIMIT 0,11",$conn);
											while($myrow = mysql_fetch_array($pipsql))
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
    </div><?php
					      include('connection.php');
						  $pipsql = mysql_query("SELECT * FROM news WHERE slides=0 AND categorie!='Artist'LIMIT 0,11",$conn);
						                $counting = 0;
											while($myrow = mysql_fetch_array($pipsql))
											{
											$counting++;
											$cat = $myrow["categorie"];
										     echo'
											  <article class="post post2">
								                 <header>
									                <div class="title">
										                   <h2>
														     <a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">'.$myrow["title"].'</a>
															</h2>
														   <p>'.$myrow["title"].'</p>
													</div>
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
												 <a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'" class="image featured">  
													<img width="100%" height="500px" src="'.$myrow["top_pic"].'" alt="..."> 
												  </a>
								                <p>'.$myrow["resume"].'</p>
								                <footer>
									               <ul class="actions">
										               <li><a href="Newsdisplay.php?hdhsajdg='.$myrow["date"].'&hdfjafreuruqifhjak='.$myrow["id"].'">Continue Reading</a></li>
									               </ul>
									               <ul class="stats">
										                <li><a href="#">'.$myrow["categorie"].'</a></li>
														<li><a href="#" class="icon fa-heart">'.$myrow["inshuro"].'</a></li>
														<li><a href="#" class="icon fa-comment">'.$myrow["comments"].'</a></li>
													</ul>
												</footer>
											</article>';
											}
											?>
    <!--end-->	
							<!--</article>-->
						<!-- Pagination -->
							
							
							<?php include('footer.php'); ?>

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
											include('connection.php');
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
											$pipsql = mysql_query("SELECT * FROM news ORDER BY inshuro DESC LIMIT 0,4",$conn);
											while($myrow = mysql_fetch_array($pipsql))
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