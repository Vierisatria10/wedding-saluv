<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE -->
	<title>404 Not Found</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
	<link href="<?= base_url('assets/vendor/jquery-nice-select/css/nice-select.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/nouislider/nouislider.min.css') ?>">
     <!-- Datatable -->
     <link href="<?= base_url('assets/vendor/datatables/css/jquery.dataTables.min.css') ?>" rel="stylesheet">
	<!-- sweetalert -->
    <link href="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.css') ?>" rel="stylesheet">
	<!-- Style css -->
    <link href="<?= base_url('assets/css/style.css') ?>" rel="stylesheet">
	
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body d-flex flex-column">
            <!-- Begin Page Content -->
            <div class="container-fluid mb-7">

                <!-- 404 Error Text -->
                <div class="text-center">
                    <div class="error mx-auto" data-text="404">404</div>
                    <p class="lead text-gray-800 mb-5">Acces Terlarang</p>
                    <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
                    <a class="btn btn-sm btn-warning" href="<?= base_url('user') ?>">&larr; Kembali ke Dashboard</a>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->
		
        <!--**********************************
           Support ticket button end
        ***********************************-->

	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url('assets/vendor/global/global.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/chart.js/Chart.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') ?>"></script>
	<!-- Apex Chart -->
	<script src="<?= base_url('assets/vendor/apexchart/apexchart.js') ?>"></script>
	
	<script src="<?= base_url('assets/vendor/chart.js/Chart.bundle.min.js') ?>"></script>
    <!-- Datatable -->
	<script src="<?= base_url('assets/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins-init/datatables.init.js') ?>"></script>
	<!-- Chart piety plugin files -->
    <script src="<?= base_url('assets/vendor/peity/jquery.peity.min.js') ?>"></script>
	<!-- Dashboard 1 -->
	<script src="<?= base_url('assets/js/dashboard/dashboard-1.js') ?>"></script>
	
	<script src="<?= base_url('assets/vendor/owl-carousel/owl.carousel.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/star-rating/jquery.star-rating-svg.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/dlabnav-init.js') ?>"></script>
	<script src="<?= base_url('assets/js/demo.js') ?>"></script>
    <script src="<?= base_url('assets/js/styleSwitcher.js') ?>"></script>
    	<!-- Sweet Alert -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins-init/sweetalert.init.js') ?>"></script>
	<script>
		function cardsCenter()
		{
			
			/*  testimonial one function by = owl.carousel.js */
			
	
			
			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},	
					800:{
						items:1
					},			
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}
		
		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000); 
		});
		
	</script>

</body>
</html>