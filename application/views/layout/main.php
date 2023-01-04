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
	<title><?= $title; ?></title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/images/favicon.png') ?>">
	<link href="<?= base_url('assets/vendor/jquery-nice-select/css/nice-select.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/vendor/owl-carousel/owl.carousel.css') ?>" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/vendor/nouislider/nouislider.min.css') ?>">
	<!-- light gallery -->
	<link href="<?= base_url('assets/vendor/lightgallery/css/lightgallery.min.css') ?>" rel="stylesheet">
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
            Nav header start
        ***********************************-->
		<div class="nav-header">
            <a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z" fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">Wedding</h2>
					<span class="brand-sub-title">@saluvwedding</span>
				</div>
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header border-bottom">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							
                        </div>
                        <ul class="navbar-nav header-right">
							
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z" fill="#717579"></path>
										<path d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z" fill="#717579"></path>
									</svg>
                                    <span class="badge light text-white bg-warning rounded-circle"><?= $rsvp_count; ?></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3" style="height:300px;">
									    <?php foreach($rsvp as $notif) : ?>
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="<?= base_url('upload/rsvp/'.$notif['foto']) ?>">
													</div>
													<div class="media-body pt-3 pb-3">
														<h6 class="mb-1"><?= $notif['nama'] ?></h6>
														<small class="d-block"><?= $notif['ucapan'] ?></small>
													</div>
												</div>
											</li>
										</ul>
										<?php endforeach; ?>
									</div>
                                    <a class="all-notification" href="<?= base_url('RSVP') ?>">See all notifications <i class="ti-arrow-end"></i></a>
                                </div>
                            </li>

							<li class="nav-item dropdown  header-profile">
								<h4 class="me-3"><?= $user['nama'] ?></h4>
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="<?= base_url('upload/user/'.$user['image']) ?>" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="<?= base_url('user') ?>" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
										<span class="ms-2">Profile </span>
									</a>
									<a href="email-inbox.html" class="dropdown-item ai-icon">
										<svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
										<span class="ms-2">Inbox </span>
									</a>
									<a href="<?= base_url('Login/logout') ?>" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#logoutModal" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
		<!-- Logout Modal-->


        <div class="modal fade" id="logoutModal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
					<div class="modal-header">
                		<h5 class="modal-title">Yakin Mau Keluar?</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal">
							</button>
            		</div>
                    <div class="modal-body">Pilih "Logout" di bawah jika Anda siap mengakhiri sesi Anda saat ini.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('Login/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
                    <li class=""><a href="<?= base_url('Dashboard') ?>" class="" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>
					</li>
                    
                    <li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-heart"></i>
							<span class="nav-text">Mempelai</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('Mempelai') ?>">Mempelai Pria</a></li>
                            <li><a href="<?= base_url('Mempelai-wanita') ?>">Mempelai Wanita</a></li>
                        </ul>
                    </li>

					<li><a href="<?= base_url('Akad') ?>" class="" aria-expanded="false">
							<i class="fas fa-handshake"></i>
							<span class="nav-text">Akad</span>
						</a>
					</li>

                    <li><a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-map-marker-alt"></i>
							<span class="nav-text">Lokasi/Maps</span>
						</a>
					</li>
                    <li><a href="<?= base_url('Gift') ?>" class="" aria-expanded="false">
							<i class="fas fa-gift"></i>
							<span class="nav-text">Gift</span>
						</a>
					</li>
                    <li><a href="<?= base_url('RSVP') ?>" class="" aria-expanded="false">
							<i class="fas fa-book"></i>
							<span class="nav-text">Ucapan RSVP</span>
						</a>
					</li>
                    <li><a href="widget-basic.html" class="" aria-expanded="false">
							<i class="fas fa-restroom"></i>
							<span class="nav-text">Protokol Kesehatan</span>
						</a>
					</li>
                    <li><a class="" href="<?= base_url('Galeri') ?>" aria-expanded="false">
							<i class="fas fa-image"></i>
							<span class="nav-text">Galeri</span>
						</a>
                    </li>
                   
                    <li><a class="" href="javascript:void()" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Quotes</span>
						</a>
                    </li>

					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-users"></i>
							<span class="nav-text">User</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="<?= base_url('User') ?>">My Profile</a></li>
							<li><a href="<?= base_url('User/role') ?>">Role</a></li>
                            <li><a href="<?= base_url('User/edit') ?>">Edit Profile</a></li>
							<li><a href="<?= base_url('User/gantipassword') ?>">Ganti Password</a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
							<i class="fas fa-cog"></i>
							<span class="nav-text">Pengaturan</span>
						</a>
						<ul aria-expanded="false">
                            <li><a href="<?= base_url('Menu') ?>">Menu</a></li>
                            <li><a href="<?= base_url('Menu/submenu') ?>">Sub Menu</a></li>
                        </ul>
                    </li>
                </ul>
				
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <?= $contents ?>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
		
		
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright text-center">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">Saluv</a> <?php echo date('Y') ?></p>
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
	<!-- CKeditor -->
	<script src="<?= base_url('assets/vendor/ckeditor/ckeditor.js') ?>"></script>
	<script src="<?= base_url('assets/vendor/owl-carousel/owl.carousel.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/star-rating/jquery.star-rating-svg.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/dlabnav-init.js') ?>"></script>
	<script src="<?= base_url('assets/js/demo.js') ?>"></script>
    <!-- <script src="<?= base_url('assets/js/styleSwitcher.js') ?>"></script> -->
    <script src="<?= base_url('assets/vendor/lightgallery/js/lightgallery-all.min.js') ?>"></script>
    	<!-- Sweet Alert -->
	<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script src="<?= base_url('assets/vendor/sweetalert2/dist/sweetalert2.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/plugins-init/sweetalert.init.js') ?>"></script>
	<!-- <script>
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
		
	</script> -->

</body>
</html>