<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pixelgeeklab.com/html/realestast/grid-fullwidth-4-column.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:02:40 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Flatize - Shop HTML5 Responsive Template">
	<meta name="author" content="pixelgeeklab.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RealEstast - HTML5 Template</title>

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Bootstrap -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libs CSS -->
	<link href="css/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css" media="screen">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css" media="screen">
	<link rel="stylesheet" href="vendor/flexslider/flexslider.css" media="screen">
	<link rel="stylesheet" href="vendor/chosen/chosen.css" media="screen">

	<!-- Theme -->
	<link href="css/theme-animate.css" rel="stylesheet">
	<link href="css/theme-elements.css" rel="stylesheet">
	<link href="css/theme-blog.css" rel="stylesheet">
	<link href="css/theme-map.css" rel="stylesheet">
	<link href="css/theme.css" rel="stylesheet">

	<!-- Style Switcher-->
	<link rel="stylesheet" href="style-switcher/css/style-switcher.css">
	<link href="css/colors/red/style.php" rel="stylesheet" id="layoutstyle">

	<!-- Theme Responsive-->
	<link href="css/theme-responsive.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="page">
		<header>
			<div id="top">
				<div class="container">
					<p class="pull-left text-note hidden-xs"><i class="fa fa-phone"></i> Need Support? 1-800-666-8888
					</p>
					<ul class="nav nav-pills nav-top navbar-right">
						<button class="btn btn-primary disabledbtn"
							style="padding: 2px;border-color:black !important; background-color:black !important; "><a
								href="inde.html">
								<i class="fa fa-user"></i></a></button>

						<button display="none" class="btn btn-primary disabledbtn"
							style="padding: 2px;border:border-color:black !important; background-color:black !important;"><a
								href="lout.php">
								<i class="fa fa-sign-out"></i></a></button>

						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
								data-original-title="Email"><i class="fa fa-envelope-o"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
								data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
								data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="" data-placement="bottom" data-toggle="tooltip"
								data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
			<nav class="navbar navbar-default pgl-navbar-main" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse"
							data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span
								class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
						</button>
						<a class="logo" href="index.php"><img src="images/logo.png" alt="Flatize"></a>
					</div>

					<div class="navbar-collapse collapse width">
						<ul class="nav navbar-nav pull-right">
							<li class="dropdown"><a href="index.php" data-target="#" class="dropdown-toggle"
									data-toggle="dropdown">Home</a>
								<ul class="dropdown-menu">

									<li><a href="index.php">Home Slider</a></li>
								</ul>
							</li>
							<li class="dropdown active"><a href="#" class="dropdown-toggle"
									data-toggle="dropdown">Properties</a>
								<ul class="dropdown-menu">

									<li class="active"><a href="grid-fullwidth-4-column.php">Properties</a></li>


								</ul>
							</li>

							<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">More
									Info</a>
								<ul class="dropdown-menu">
									<li><a href="about-us.php">About Us</a></li>

								</ul>
							</li>

							<li><a href="contact.php">Contact Us</a></li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
		</header>

		<!-- Begin Main -->
		<div role="main" class="main pgl-bg-grey">
			<!-- Begin page top -->
			<section class="page-top">
				<div class="container">
					<div class="page-top-in">
						<h2><span>Properties</span></h2>
					</div>
				</div>
			</section>
			<!-- End page top -->



			<!-- Begin Featured -->


			<!-- Begin Properties -->
			<section class="pgl-properties pgl-bg-grey">
				<div class="container">
					<h2>Offfice house</h2>
					<div class="properties-full">
						<div class="listing-header clearfix">
							<ul class="list-inline list-icons pull-left">
								<li class="active"><a href="grid-fullwidth-4-column.php"><i class="fa fa-th"></i></a>
								</li>

							</ul>

						</div>
						<div class="row">

							<?php


							include 'database.php';
							$sql = "select * from property limit 250 offset 12 ";
							$result = $conn->query($sql);

							if ($result->num_rows > 0) {

								# code...
								$sr_num = 1;
								$c = 0;

								while ($row = $result->fetch_assoc()) {
									# code...
							
									?>
									<div class="col-xs-6 col-md-3 animation">
										<div class="pgl-property">
											<div class="property-thumb-info">
												<div class="property-thumb-info-image">
													<a href="buy.php? id=<?php echo $row['id'] ?>">
														<img alt="" class="img-responsive"
															src="<?php echo $row['property_pic'] ?>">
													</a>
													<span class="property-thumb-info-label">
														<span class="label price">$
															<?php echo $row['price']; ?>
														</span>

													</span>
												</div>
												<div class="property-thumb-info-content">
													<h3><a href="buy.php? id=<?php echo $row['id'] ?>">
															<?php echo $row['address']; ?>
														</a></h3>
													
												</div>
												<div class="amenities clearfix">
													<ul class="pull-left">
														<li><strong>Area:</strong>
															<?php echo $row['area']; ?><sup>m2</sup>
														</li>
													</ul>
													<ul class="pull-right">
														<li><i class="icons icon-bedroom"></i>
															<?php echo $row['bedroom']; ?>
														</li>
														<li><i class="icons icon-bathroom"></i>
															<?php echo $row['bathroom']; ?>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								<?php
								}
							}



							?>
						</div>
					</div>
			</section>
			<!-- End Properties -->

		</div>
		<!-- End Main -->

		<!-- Begin footer -->
		<<footer class="pgl-footer">
			<div class="container">
				<div class="pgl-upper-foot">
					<div class="row">
						<div class="col-sm-4">
							<h2>Contact detail</h2>
							<!-- <p>Pellentesque nec erat. Aenean semper, neque non faucis. Malesuada, dui felis tempor
							felis, vel varius ante diam ut mauris.</p> -->
							<address>
								<i class="fa fa-map-marker"></i> Office : 1-900-222-6666<br>
								<i class="fa fa-phone"></i> Mobile : 0800-222-2222<br>
								<i class="fa fa-fax"></i> Fax : 1-000-666-8888<br>
								<i class="fa fa-envelope-o"></i> Mail: <a
									href="mailto:demo@gmail.com">demo@gmail.com</a>
							</address>
						</div>
						<div class="col-sm-2">
							<h2>Useful links</h2>
							<ul class="list-unstyled">

								<li><a href="#">Terms and Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Community Guidelines</a></li>
							</ul>
						</div>
						<div class="col-sm-2">
							<h2>Contct</h2>
							<ul class="list-unstyled">

								<li><a href="contact.php">Contact Us</a></li>

							</ul>
						</div>
						<!-- <div class="col-sm-4">
						<h2>Don???t miss out</h2>
						<p>In venenatis neque a eros laoreet eu placerat erat suscipit. Fusce cursus, erat ut
							scelerisque condimentum, quam odio ultrices leo.</p>
						<form class="form-inline pgl-form-newsletter" role="form">
							<div class="form-group">
								<label class="sr-only" for="exampleInputEmail2">Email address</label>
								<input type="email" class="form-control" id="exampleInputEmail2"
									placeholder="Enter your email here">
							</div>
							<button type="submit" class="btn btn-submit"><i class="icons icon-submit"></i></button>
						</form>
					</div> -->
					</div>
				</div>
				<div class="pgl-copyrights">
					<p>Copyright ?? 2023 RealEstast. Designed by Abdullah & Tayyab</p>
				</div>
			</div>
			</footer>
			<!-- End footer -->

	</div>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="vendor/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
	<script src="vendor/flexslider/jquery.flexslider-min.js"></script>
	<script src="vendor/chosen/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=true"></script>
	<script src="vendor/gmap/gmap3.infobox.min.js"></script>
	<script src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
	<script src="vendor/masonry/masonry.pkgd.min.js"></script>

	<!-- Theme Initializer -->
	<script src="js/theme.plugins.js"></script>
	<script src="js/theme.js"></script>

	<!-- Style Switcher -->
	<script type="text/javascript" src="style-switcher/js/switcher.js"></script>

</body>

<!-- Mirrored from pixelgeeklab.com/html/realestast/grid-fullwidth-4-column.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Sep 2018 16:02:41 GMT -->

</html>