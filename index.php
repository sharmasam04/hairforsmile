	<?php include "./_inc/pageHead.php"; ?>
	<link rel="stylesheet" href="_css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<style>
		/* Special setting for registration dropdown */
		option { font-weight: 300; background: #383838; }
		._jSel { background: #383838; font-weight: 100; color:darkgrey !important;}
	</style>

</head>

<body class="stretched side-push-panel">

<div class="body-overlay"></div>

	<?php include "./_inc/pageSide.php"; ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php include "./_inc/pageMenu.php"; ?>
		

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element slider-parallax min-vh-100 include-header">
			<div class="slider-inner">

				<div class="row position-absolute position-lg-relative w-100 h-100 m-0 align-items-stretch">
					<div class="col-lg-5 col-md-6 dark" style="background-color: #383838;">
						<div class="vertical-middle subscribe-widget" data-loader="button">
							<div class="col-padding">
								<div class="heading-block border-bottom-0 bottommargin-sm">
									<h1 style="line-height: 1.4;font-size: 24px;">Register to be a Hero</h1>
								</div>
								<form id="slider-subscribe-form" action="#" method="post" class="row mb-0">
									<div class="col-6 mb-3">
										<input type="text" class="sm-form-control border-form-control not-dark required" name="widget-subscribe-form-fname" placeholder="First Name">
									</div>
									<div class="col-6 mb-3">
										<input type="text" class="sm-form-control border-form-control not-dark required" name="widget-subscribe-form-lname" placeholder="Last Name">
									</div>
									<div class="w-100"></div>
									<div class="col-12 mb-3">
										<input type="email" class="sm-form-control border-form-control not-dark required" name="widget-subscribe-form-email" placeholder="Enter Email Address">
									</div>
									<div class="w-100"></div>
									<div class="col-12 mb-3">
										<select id="jSel" class="sm-form-control border-form-control not-dark required _jSel">
											<option value="" disabled selected hidden
													style="font-weight: 100 !important; color:red;">Category</option>
											<option value="1" >Individual</option>
											<option value="2">Group</option>
											<option value="3">Lions Club</option>
											<option value="4">Organisation</option>
										</select>
									</div>
									<div class="col-12">
										<button type="submit" class="button button-light button-circle button-border ml-0 topmargin-sm" value="submit">Register Me</button>
									</div>
								</form>
							</div>
						</div>
						<a href="#" data-scrollto="#section-about" data-easing="easeInOutExpo" data-speed="1250" data-offset="65" class="one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>
					</div>

					<div class="col-lg-7 col-md-6 center p-0 min-vh-50" style="background: url('imgs/slide1.jpg') center center no-repeat; background-size: cover;">
						<div class="fslider h-100 position-absolute" data-speed="2000" data-pause="4000" data-animation="fade" data-arrows="false" data-pagi="false" style="background-color: #333;">
							<div class="flexslider">
								<div class="slider-wrap">
									<div class="slide" style="background: url('one-page/images/blog/2.jpg') center right; background-size: cover;"></div>
									<div class="slide" style="background: url('imgs/slide2.jpg') center right; background-size: cover;"></div>
									<div class="slide" style="background: url('imgs/slide3.jpg') center right; background-size: cover;"></div>
								</div>
							</div>
						</div>

						<div class="vertical-middle dark center clearfix">
							<div class="emphasis-title mb-0">
								<h1>
									<span class="t-rotate font-weight-normal opm-large-word nocolor" style="font-family: 'Kristi', cursive;">Hair4Smile</span>
								</h1>
							</div>
						</div>

<!--
						<div class="video-wrap jBox">
							<div class="video-overlay" style="background-color: rgba(0,0,0,0.2);"></div>
						</div>
-->
					</div>
				</div>

			</div>
		</section><!-- #slider end -->

		<!-- About
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div id="section-about" class="center page-section">
					<div class="container clearfix">
						<h2 class="mx-auto bottommargin font-body" style="max-width: 700px; font-size: 40px;">
							What is Hair For Smile?</h2>

						<p class="lead mx-auto bottommargin" style="max-width: 800px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					</div>
				</div>
				
				

				<div id="section" class="page-section pt-0">

					<div class="section m-0">
						<div class="container clearfix">
							<center><h2 class="mx-auto bottommargin font-body" style="max-width: 700px; font-size: 40px;">Top 10 Heroes in 2022</h2></center>
							
							<div class="row" >

								<div class="posts-sm col-lg-3 col-md-6 col-sm-12 mb-3">
									<div class="style-msg style-msg-light col-12 bg-danger">
										<div class="sb-msg"><strong>Individual</strong></div>
									</div>
									
									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/2.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Simon Tan Yu</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$500,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/4.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Ellester Tong</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$490,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<a href="#" class="btn col-12 btn-success">View All</a>

								</div>
								
								<div class="posts-sm col-lg-3 col-md-6 col-sm-12 mb-3">
									<div class="style-msg style-msg-light col-12 bg-warning">
										<div class="sb-msg"><strong>Group</strong></div>
									</div>
									
									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/3.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Group A</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$500,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/8.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Group 9</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$490,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<a href="#" class="btn col-12 btn-success">View All</a>

								</div>
								
								<div class="posts-sm col-lg-3 col-md-6 col-sm-12 mb-3">
									<div class="style-msg style-msg-light col-12 bg-primary">
										<div class="sb-msg"><strong>Lions Club</strong></div>
									</div>
									
									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/4.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Club Yu</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$500,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/2.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Club Tong</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$490,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<a href="#" class="btn col-12 btn-success">View All</a>

								</div>
								
								<div class="posts-sm col-lg-3 col-md-6 col-sm-12 mb-3">
									<div class="style-msg style-msg-light col-12 bg-info">
										<div class="sb-msg"><strong>Organisation</strong></div>
									</div>
									
									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/2.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Yu Yan Shang</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$500,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="entry col-12 mb-3">
										<div class="grid-inner row no-gutters">
											<div class="col-auto">
												<div class="entry-image">
													<a href="#"><img src="imgs/index/3.jpg" alt="Image"></a>
												</div>
											</div>
											<div class="col pl-3">
												<div class="entry-title">
													<h4><a href="#">Elken Charities</a></h4>
												</div>
												<div class="entry-meta no-separator">
													<ul>
														<li class="color">$490,000</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									
									<a href="#" class="btn col-12 btn-success">View All</a>

								</div>

							</div>
						</div>
					</div>

				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				

				<div id="section-services" class="page-section pt-0">
					
					<center><h2 class="mx-auto font-body" style="max-width: 700px; font-size: 40px;">News Update</h2>
					<p class="center lead mx-auto bottommargin heading-block" style="max-width: 800px;">
						<i class="icon-arrow-left1"></i> Srcollable <i class="icon-arrow-right1"></i> </p>
					</center>
					
					<div id="oc-clients" class="section bg-transparent mt-0 owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget mb-3" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="4" data-items-xl="4">

						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/1.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>
						
						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/2.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/3.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/4.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/5.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>
						<div class="oc-item">
							<div class="card">
								<div class="card-header">
									<img src="imgs/clients/6.png" alt="Clients">
								</div>
								<div class="card-body">
									Grab CEO Shaved Head for Children with Cancer &amp; Raised $197K in Donations
								</div>
							</div>
						</div>

					</div>
					
					<div class="topmargin center">
						<a href="#" class="topmargin button button-border button-circle font-weight-semibold">More News</a>
					</div>



				</div>
				


			</div>
		</section><!-- #content end -->
		
		
		<?php include "./_inc/pageFoot.php"; ?>

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="_js/jquery.js"></script>
	<script src="_js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="_js/functions.js"></script>
	
	<script>
	$(document).ready(function() {
		$('#jSel').on('change', function() {
			$(this).removeClass("_jSel");
		});
	});
	
	</script>

</body>
</html>