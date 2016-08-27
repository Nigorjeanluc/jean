<!DOCTYPE HTML>

<html>
	<head>
		<title>KUMATEKA.COM - Amafoto </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css"/>
		<link href="Function/default.css" rel="stylesheet" type="text/css" />
		<link rel="icon" href="Function/logo.gif">
		<link href="6/thumbnail-slider.css" rel="stylesheet" />
		<script src="6/thumbnail-slider.js" type="text/javascript"></script>
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include_once('navigation.php'); ?>

				<!-- Main -->
					<div id="main">
							<section>
								<div class="min-posts">

								</div>
							</section>
							
							<section>
									<div class="box alt">
									<div class="row uniform">
									<?php
											include("connection2.php");
											$sql="SELECT * FROM amafoto ORDER BY id DESC LIMIT 0,20";
											$res=mysqli_query($conn,$sql);
											if(!$res)
											{
											die("Query Failed!");
											}
																		$image = array(" "," "," "," "," "," "," "," "," ");
																		$idx = array(" "," "," "," "," "," "," "," "," ");
																		$alt = array(" "," "," "," "," "," "," "," "," ");
																		$count = 0;
											while(($row=mysqli_fetch_assoc($res))&&($count<9))
																		  {
																			 $image[$count] = $row['Images'];
																			 $idx[$count] = $row['id'];
																			 $alt[$count] = $row['Title'];
																			 $count++;
																		  }
											    echo
												'
											<div class="4u"><span class="image fit"><img src="'.$image[0].'" alt="'.$alt[0].'" title"'.$alt[0].'" /></span></div>
											<div class="4u"><span class="image fit"><img src="'.$image[1].'" alt="'.$alt[1].'" title"'.$alt[1].'"  /></span></div>
											<div class="4u$"><span class="image fit"><img src="'.$image[2].'" alt="'.$alt[2].'" title"'.$alt[2].'"  /></span></div>
											<div class="4u"><span class="image fit"><img src="'.$image[3].'" alt="'.$alt[3].'" title"'.$alt[3].'"  /></span></div>
											<div class="4u"><span class="image fit"><img src="'.$image[4].'" alt="'.$alt[4].'" title"'.$alt[4].'"  /></span></div>
											<div class="4u$"><span class="image fit"><img src="'.$image[5].'" alt="'.$alt[5].'" title"'.$alt[5].'"  /></span></div>
											<div class="4u"><span class="image fit"><img src="'.$image[6].'" alt="'.$alt[6].'" title"'.$alt[6].'"  /></span></div>
											<div class="4u"><span class="image fit"><img src="'.$image[7].'" alt="'.$alt[7].'" title"'.$alt[7].'"  /></span></div>
											<div class="4u$"><span class="image fit"><img src="'.$image[8].'" alt="'.$alt[8].'" title"'.$alt[8].'"  /></span></div>
												'
												;
											?>
									</div>	
									</div>
							</section>
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