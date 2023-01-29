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
					
					<div class="text-center">
						<span class="center text-dark" style="font-size: 30px;">Selected [Hero Name] Here</span><br/>
						Your Donation Amount : <span class="text-danger">MYR 599</span>
						<p class="mt-3">PLEASE Select your preferable payment method below</p>
					</div>
					
					<div class="row justify-content-center">
						<div class="col-4 center">
							<img src="imgs/method_cards.png" alt="">
							Make donation by using Credit Card.
						</div>
						<div class="col-4 center">
							<img src="imgs/method_fpx.png" alt="">
							Make donation direct from your bank account.<br/>
							<i class="text-red">***(Only applicable in Malaysia)</i>
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