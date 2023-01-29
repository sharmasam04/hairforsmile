	<?php include "./_inc/pageHead.php"; ?>

	<!-- Bootstrap File Upload CSS -->
	<link rel="stylesheet" href="_css/components/bs-filestyle.css" type="text/css" />

	<link rel="stylesheet" href="_css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<body class="stretched side-push-panel">

<div class="body-overlay"></div>

	<?php include "./_inc/pageSide.php"; ?>

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php include "./_inc/pageMenu.php"; ?>
		

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					
					
					<div class="">
						<h2 class="center" style="font-size: 40px;">Contact</h2>
						<p class="center lead mx-auto bottommargin heading-block" style="max-width: 800px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					
					<div class="row mx-0 bottommargin-lg align-items-stretch">
<!--
						<div class="col-lg-6 col-md-6 d-none d-md-block px-0">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.0845552151636!2d101.60415681429942!3d3.0720836977628756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4c8776586d9b%3A0x5e19a549d4f26f25!2sSunway%20Pyramid!5e0!3m2!1sen!2smy!4v1658045035932!5m2!1sen!2smy" width="600" height="510" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
-->
						<div class="col-lg-6 col-md-6 d-none d-md-block px-0" style="background-image: url('imgs/portfolio/extended/3.jpg'); background-size: cover; background-position: center;">
							&nbsp;
						</div>
						<div class="col-lg-6 col-md-6 bg-leaf">
							<div class="col-padding">
								<h3 class="font-body font-weight-normal ls1">Lions Club of Kajang</h3>

								<div style="font-size: 16px; line-height: 1.7;">
									<address style="line-height: 1.7;">
										<strong>Location Address</strong><br>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>

									<div class="clear topmargin"></div>

									<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
									<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@ecomediapark.com
									
									<div class="clear topmargin-sm"></div>

									<address style="line-height: 1.7;">
										<strong>Sponsorship Enquiries:</strong><br>
										<abbr title="Email Address"><strong>Email:</strong></abbr> info@ecomediapark.com
									</address>
									
								</div>
							</div>
						</div>
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
	
	<!-- Bootstrap File Upload Plugin -->
	<script src="_js/components/bs-filestyle.js"></script>
	
	<!-- Footer Scripts
	============================================= -->
	<script src="_js/functions.js"></script>
	
	<script>
	$(document).ready(function() {
		
		$("#form-before").fileinput({
			browseClass: "btn btn-secondary",
			browseIcon: "",
			removeClass: "btn btn-danger",
			removeLabel: "",
			removeIcon: "<i class='icon-trash-alt1'></i>",
			showUpload: false
		});
		$("#form-after").fileinput({
			browseClass: "btn btn-secondary",
			browseIcon: "",
			removeClass: "btn btn-danger",
			removeLabel: "",
			removeIcon: "<i class='icon-trash-alt1'></i>",
			showUpload: false
		});
		
	});
	
	</script>

</body>
</html>