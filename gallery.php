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
						<h2 class="center" style="font-size: 40px;">Campaign</h2>
						<p class="center lead mx-auto bottommargin heading-block" style="max-width: 800px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
					</div>
					
					
					
					
					<h3 class="center m-3">Videos</h3>
					<p class="center lead mx-auto bottommargin heading-block" style="max-width: 800px;">Double Click For Full Size View.</p>
					<div class="row bg-leaf py-3">
						<div class="col-4 col-lg-3 col-md-4 col-sm-6">
							<iframe src="https://www.youtube.com/embed/ImmFE8HcEc4" allowfullscreen></iframe>
						</div>
						<div class="col-4 col-lg-3 col-md-4 col-sm-6">
							<iframe src="https://www.youtube.com/embed/ZCubhedogHY" allowfullscreen></iframe>
						</div>
						<div class="col-4 col-lg-3 col-md-4 col-sm-6">
							<iframe src="https://www.youtube.com/embed/sEvpxF1UdFo" allowfullscreen></iframe>
						</div>
						<div class="col-4 col-lg-3 col-md-4 col-sm-6">
							<iframe src="https://www.youtube.com/embed/SZEflIVnhH8" allowfullscreen></iframe>
						</div>
					</div>
					
					
					
					<h3 class="center m-3">Photos</h3>
					<div class="masonry-thumbs grid-container grid-6 bg-dark" data-big="0" data-lightbox="gallery">
						<a class="grid-item" href="imgs/bulletin/gallery/g1.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g1.jpg" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g2.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g2.jpg" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g3.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g3.jpg" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g6.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g6.jpg" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g4.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g4.jpg" alt="Gallery Thumb 4"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g5.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g5.jpg" alt="Gallery Thumb 5"></a>
						
						<a class="grid-item" href="imgs/bulletin/gallery/g7.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g7.jpg" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g1.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g1.jpg" alt="Gallery Thumb 1"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g2.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g2.jpg" alt="Gallery Thumb 2"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g3.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g3.jpg" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g8.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g8.jpg" alt="Gallery Thumb 3"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g4.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g4.jpg" alt="Gallery Thumb 4"></a>
						<a class="grid-item" href="imgs/bulletin/gallery/g5.jpg" data-lightbox="gallery-item"><img src="imgs/bulletin/gallery/g5.jpg" alt="Gallery Thumb 5"></a>
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