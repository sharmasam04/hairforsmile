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
						<h2 class="center" style="font-size: 40px;">Donation</h2>
						<p class="center lead mx-auto bottommargin heading-block" style="max-width: 800px;">Make your donation, to be angel of needy</p>
					</div>

					<div class="form-widget">

						<div class="row shadow bg-light border">

							<div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.8), rgba(0,0,0,.2)), url('https://images.unsplash.com/photo-1511809870860-4d2806eb1908?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80') center center / cover; min-height: 400px;">
								<h3 class="center mt-5">Hair 4 Smile</h3>
								<div class="center w-100 px-2">
									<span class="text-uppercase mb-0">your kindness be back to you</span>
									<h2 class=" display-3 mb-2 heading-block border-bottom-0 font-weight-semibold font-body py-2">THANK YOU</h2>
									<span class="text-uppercase h6">Be someone's Hero</span>
								</div>
							</div>

							<div class="col-lg-8 p-5">
								<form class="row mb-0" id="form" action="" method="post" enctype="multipart/form-data">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="form-name">Name:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" name="form-name" id="form-name" class="form-control required" value="" placeholder="Enter your Full Name">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="form-phone">Phone:</label>
											</div>
											<div class="col-sm-6">
												<input type="text" name="form-phone" id="form-phone" class="form-control required" value="" placeholder="Your Contact Number">
											</div>
											<div class="col-sm-4">
												<label for="form-phone">Ex. +60 12 345 6789</label>
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="form-email">Email:</label>
											</div>
											<div class="col-sm-10">
												<input type="email" name="form-email" id="form-email" class="form-control required" value="" placeholder="Your Email Address">
											</div>
										</div>
									</div>
									<div class="col-12 form-group">
										<div class="row">
											<div class="col-sm-2 col-form-label">
												<label for="form-amount">Amount:</label>
											</div>
											<div class="col-sm-10">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">MYR</span>
													</div>
													<input type="number" name="form-amount" id="form-amount" class="form-control required" value="" placeholder="100,000">
												</div>
											</div>
										</div>
									</div>

									
									<div class="col-12 form-group">
										<div class="row bg-leaf p-3">
											
											<div class="col-12 form-group">
												<div class="row">
													<div class="col-sm-6 col-form-label">
														<label for="form-after">Do you wish to receive our appreciation gift?</label>
													</div>
													<div class="col-sm-6">
														<div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
															<label class="btn btn-outline-success ls0 nott">
																<input type="radio" name="form-gift" id="form-gift-yes" value="Yes"> Yes
															</label>
															<label class="btn btn-outline-danger ls0 nott">
																<input type="radio" name="form-gift" id="form-gift-no" value="No"> No
															</label>
														</div>
													</div>
												</div>
											</div>

											<div class="col-12 form-group">
												<div class="row">
													<div class="col-sm-2 col-form-label">
														<label for="form-message">* Address</label>
													</div>
													<div class="col-sm-10">
														<textarea name="form-address" id="form-address" class="form-control required" cols="30" rows="5" placeholder="Post-able address please"></textarea>
													</div>
												</div>
											</div>
											
											<div class="col-6 form-group">
												<div class="row">
													<div class="col-sm-4 col-form-label">
														<label for="form-country">Country:</label>
													</div>
													<div class="col-sm-7">
														<input type="number" min="10" max="50" name="form-country" id="form-country" class="form-control required" value="" placeholder="Enter your Country">
													</div>
												</div>
											</div>
											<div class="col-6 form-group">
												<div class="row">
													<div class="col-sm-4 col-form-label">
														<label for="form-city">City:</label>
													</div>
													<div class="col-sm-7">
														<input type="number" min="10" max="50" name="form-city" id="form-city" class="form-control required" value="" placeholder="Enter your City">
													</div>
												</div>
											</div>
											<div class="col-6 form-group">
												<div class="row">
													<div class="col-sm-4 col-form-label">
														<label for="form-postcode">Postcode:</label>
													</div>
													<div class="col-sm-7">
														<input type="number" min="10" max="50" name="form-postcode" id="form-postcode" class="form-control required" value="" placeholder="Enter your Postcode">
													</div>
												</div>
											</div>

										</div>
									</div>
									
									
									<div class="col-12 text-center">
										<button type="submit" name="form-submit" class="btn btn-success ml-2"
												onclick="window.open('donation_pay.php','_self')">Submit Donation</button>
									</div>

								</form>
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