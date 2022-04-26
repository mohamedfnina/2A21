<!-- /** NOTE!! file Stored in Parent Folder */ -->
<!-- /** this is FORM */ -->
<?php 
    // 
    include_once "../model/user.php";
    include_once "../controller/userC.php";
    
    if(isset($_POST['lastName'])){

        $user1 = new User($_POST['lastName'],$_POST['firstName'],$_POST['password'],$_POST['email'],$_POST['userName']);
        //
       //var_dump($user1);
        $userG=new UserC();
        
        $userG->afficherUser($user1);
       // var_dump($userG);

       
    }
    else {

        ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from webextheme.com/html/logistek-html/version4/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 15:56:44 GMT -->
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Logistek">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Logistek Logistics & Transportation HTML5 Template">
	<meta name="keywords" content="cargo, corporate, delivery company, logistic, logistics, moving, packaging, shipment, shipping, storage, transport, transportation, warehouse" />
	<title>Logistek || Logistics & Transportation HTML5 Template</title>
	<link href="images/favicon.png" rel="shortcut icon" type="image/png">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
</head>

<body>
	<!-- Preloader Start -->
	<div class="preloader"></div>
	<!-- Preloader End -->
	<!-- header Start -->
	<header class="header-style-two">
		<div class="header-wrapper">
			<div class="header-top-area bg-primary-color">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-lg-6 text-center text-lg-left text-xl-left header-top-left-part">
							<span class="address"><i class="webexflaticon flaticon-placeholder-1"></i> 121 King Street, Melbourne</span>
							<span class="phone"><i class="webexflaticon flaticon-send"></i> example@gmail.com</span>
						</div>
						<div class="col-md-12 col-lg-6 header-top-right-part text-center text-lg-right text-xl-right">
							<ul class="social-links">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
							<div class="language">
								<a class="language-btn" href="#"><i class="webexflaticon flaticon-internet"></i> English</a>
								<ul class="language-dropdown">
									<li><a href="#">English</a></li>
									<li><a href="#">Bangla</a></li>
									<li><a href="#">French</a></li>
									<li><a href="#">Spanish</a></li>
									<li><a href="#">Arabic</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-navigation-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<a class="navbar-brand logo f-left mrt-10 mrt-md-0" href="index.html">
								<img id="logo-image" class="img-center" src="images/logo.png" alt="">
							</a>
							<div class="mobile-menu-right"></div>
							<div class="header-searchbox-style-two d-none d-xl-block">
								<div class="side-panel side-panel-trigger text-right d-none d-lg-block">
									<span class="bar1"></span>
									<span class="bar2"></span>
									<span class="bar3"></span>
								</div>
								<div class="show-searchbox">
									<a href="#"><i class="webex-icon-Search"></i></a>
								</div>
								<div class="toggle-searchbox">
									<form action="#" id="searchform-all" method="get">
										<div>
											<input type="text" id="s" class="form-control" placeholder="Search...">
											<div class="input-box">
												<input type="submit" value="" id="searchsubmit"><i class="fas fa-search"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="side-panel-content">
								<div class="close-icon">
									<button><i class="webex-icon-cross"></i></button>
								</div>
								<div class="side-panel-logo mrb-30">
									<a href="index.html">
										<img src="images/logo-sidebar-dark.png" alt="" />
									</a>
								</div>
								<div class="side-info mrb-30">
									<div class="side-panel-element mrb-25">
										<h4 class="mrb-10">Office Address</h4>
										<ul class="list-items">
											<li><span class="fa fa-map-marker-alt mrr-10 text-primary-color"></span>121 King Street, Australia</li>
											<li><span class="fas fa-envelope mrr-10 text-primary-color"></span>example@gmail.com</li>
											<li><span class="fas fa-phone-alt mrr-10 text-primary-color"></span>(00) 2500-123-4567</li>
										</ul>
									</div>
									<div class="side-panel-element mrb-30">
										<h4 class="mrb-15">Pintarest</h4>
										<ul class="pintarest-list">
											<li><a href="#"><img class="img-full" src="images/side-panel/1.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/2.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/3.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/4.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/5.jpg" alt=""></a></li>
											<li><a href="#"><img class="img-full" src="images/side-panel/6.jpg" alt=""></a></li>
										</ul>
									</div>
								</div>
								<h4 class="mrb-15">Social List</h4>
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="main-menu f-right">
								<nav id="mobile-menu-right">
									<ul>
										<li class="has-sub">
											<a href="#">Home</a>
											<ul class="sub-menu">
												<li><a href="index.html">Home Layout 1</a></li>
												<li><a href="index2.html">Home Layout 2</a></li>
												<li><a href="index3.html">Home Layout 3</a></li>
												<li><a href="index4.html">Home Layout 4</a></li>
												<li><a href="index5.html">Home Layout 5</a></li>
												<li><a href="index6.html">Home Layout 6</a></li>
												<li class="has-sub-child">
													<a href="#">Header Styles</a>
													<ul class="sub-menu">
														<li><a href="page-header-style-one.html">Header Style One</a></li>
														<li><a href="page-header-style-two.html">Header Style Two</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li><a href="page-about.html">About</a></li>
										<li class="has-sub">
											<a href="#">Page</a>
											<ul class="sub-menu">
												<li class="has-sub-child">
													<a href="#">Our Team</a>
													<ul class="sub-menu right-view">
														<li><a href="page-our-team.html">All Members</a></li>
														<li><a href="page-single-team.html">Team Details</a></li>
													</ul>
												</li>
												<li><a href="page-pricing.html">Pricing</a></li>
												<li><a href="page-testimonials.html">Testimonials</a></li>
												<li><a href="page-contact-us.html">Contact Us</a></li>
												<li><a href="page-faqs.html">FAQs</a></li>
												<li><a href="404.html">Eror Page</a></li>
											</ul>
										</li>
										<li class="has-sub">
											<a href="#">Services</a>
											<ul class="sub-menu">
												<li><a href="page-all-services.html">All Services</a></li>
												<li><a href="service-air-freight.html">Air Freight</a></li>
												<li><a href="service-road-freight.html">Road Freight</a></li>
												<li><a href="service-warehousing.html">Warehousing</a></li>
												<li><a href="service-supply-chain.html">Supply Chain</a></li>
												<li><a href="service-ocean-freight.html">Ocean Freight</a></li>
												<li><a href="service-packaging.html">Packaging</a></li>
											</ul>
										</li>
										<li class="has-sub right-view">
											<a href="#">Projects</a>
											<ul class="sub-menu">
												<li><a href="page-projects.html">All Projects</a></li>
												<li><a href="page-single-project.html">Single Projects</a></li>
											</ul>
										</li>
										<li class="has-sub right-view">
											<a href="#">News</a>
											<ul class="sub-menu">
												<li><a href="page-news.html">News Classic</a></li>
												<li><a href="page-news-left-sidebar.html">News Left Sidebar</a></li>
												<li><a href="page-news-right-sidebar.html">News Right Sidebar</a></li>
												<li><a href="page-single-news.html">Single News</a></li>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header End -->
	<!-- Home Slider Start -->
	<section class="pdt-120 pdb-120" data-background="images/bg/1.jpg">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-12 col-xl-6 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="500ms">
					<div class="content-box mrb-lg-40">
						<h1 class="static-home-banner-title text-white mrb-30">Own Your<br> Own Bus</h1>
						<p class="text-white mrb-50">We have almost 35+ years of experience for providing<br> consulting services solutions</p>
						<div class="btn-box">
							<a href="afficheruser.php" class="cs-btn-one btn-primary-color">User List
								
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-xl-6 wow fadeInLeft mrb-lg-40" data-wow-delay="0ms" data-wow-duration="1000ms">
					<div class="request-a-call-back-form-vertical-two">
						<h3 class="mrt-0 mrb-30">Inscription</h3>
						<form method="POST">
							<div class="row">
                            <div class="col-lg-12">
									<div class="form-group">
										<input type="text" placeholder="Username" name="userName" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" placeholder="First Name" name="firstName" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input type="text" placeholder="Last Name" name="lastName" class="form-control">
									</div>
								</div>
                                <div class="col-lg-12">
									<div class="form-group">
										<input type="password" placeholder="Password" name="password" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<input type="email" placeholder="Email" name="email" class="form-control">
									</div>
								</div>
								
								<div class="col-lg-12">
									<!---<div class="form-group">
										<input type="text" placeholder="Tracking ID" class="form-control">
									</div>--->
								</div>
								<div class="col-lg-12">
									<div class="form-group mrb-0">
										<button type="submit" class="cs-btn-one btn-primary-color btn-md btn-block">S'inscrire</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Home Slider End -->
	<!-- Service Content Area Start -->
	<section class="service-content-area pdt-110 pdb-80 pdb-lg-110">
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrb-md-40">
							<div class="service-item-thumb">
								<img class="img-full" src="images/service/service1.jpg" alt="">
								<div class="service-item-icon">
									<i class="fas fa-plane-departure"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Air Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="service-air-freight.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box mrb-lg-40 mrb-md-40">
							<div class="service-item-thumb">
								<img class="img-full" src="images/service/service2.jpg" alt="">
								<div class="service-item-icon">
									<i class="fas fa-ship"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Ocean Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="service-ocean-freight.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="service-item-box">
							<div class="service-item-thumb">
								<img class="img-full" src="images/service/service3.jpg" alt="">
								<div class="service-item-icon">
									<i class="fas fa-shipping-fast"></i>
								</div>
							</div>
							<div class="service-item-content">
								<div class="service-item-title">
									<h3 class="mrb-15">Road Freight</h3>
								</div>
								<div class="service-item-para">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est amet similique ipsum reprehenderit sed.</p>
								</div>
								<div class="service-item-link">
									<a class="text-uppercase text-primary-color" href="service-road-freight.html">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mrt-60">
					<div class="col-xl-12 text-center">
						<h5>Do You Want To explore more services just <span><a href="page-all-services.html" class="text-underline text-primary-color">click here</a></span></h5>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Service Content Area End -->
	<!-- About Title Section Start -->
	<section class="about-section bg-silver-light pdt-110 pdb-100 pdb-lg-80">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xl-6">
					<div class="about-us-wrapper">
						<h6 class="text-primary-color side-line-left mrb-15">Award Winner Logistic Company</h6>
						<h2>World Best Secure Safe and Trusted Logistic Services Provider</h2>
					</div>
				</div>
				<div class="col-md-12 col-xl-6">
					<p class="content-border-left mrt-30">Sed ut perspiciatis unde omnis iste voluptatem accusantium dolorem que laudantium totam  eaque ipsa inventore veritatis quasi architecto beatae dolorem que laudantium totam  eaque ipsa inventore veritatis quasi architecto beatae</p>
				</div>
			</div>
		</div>
	</section>
	<!-- About Title Section End -->
	<!-- About Section Start -->
	<section class="about-section anim-object pdt-0 pdb-170 pdb-lg-70" data-background="images/bg/abs-bg1.png">
		<div class="container">
			<div class="row mrb-80 align-items-center">
				<div class="col-md-12 col-xl-6">
					<div class="row mrt-110">
						<div class="col-md-6 col-xl-6">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-delivery-truck-1"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>On Time Delivery</h3></a>
									</div>
									<div class="para">
										<p>We always provide people a complete solution focused of any business.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-6">
							<div class="about-feature-box">
								<div class="about-feature-box-icon">
									<span class="webexflaticon flaticon-globe"></span>
								</div>
								<div class="about-feature-box-content">
									<div class="title">
										<a href="#"><h3>Global Service</h3></a>
									</div>
									<div class="para">
										<p>We always provide people a complete solution focused of any business.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-12">
					<div class="about-image-block mrt--110 mrt-lg-0 mrr-30 mrr-lg-0">
						<img class="img-full js-tilt" src="images/about/ab1.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="row align-items-xl-center">
				<div class="col-md-12 col-lg-6 col-xl-6">
					<div class="about-image-box mrr-60 mrr-lg-0 mrb-lg-110">
						<img class="about-image1 img-full js-tilt d-none d-xl-block" src="images/about/ab2.jpg" alt="">
						<img class="about-image2 img-full" src="images/about/ab3.jpg" alt="">
						<div class="experience"><h4>30+</h4><p>We have more than years of experience</p></div>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 pdl-60">
					<h5 class="side-line-left text-primary-color mrb-15">About Our Company</h5>
					<h2 class="text-uppercase mrb-30">Trusted Logistic Service Provider</h2>
					<ul class="order-list primary-color mrb-40">
						<li>revolutionary catalysts for chang</li>
						<li>catalysts for chang the Seamlessly</li>
						<li>business applications through</li>
						<li>procedures whereas processes</li>
					</ul>
					<p class="mrb-40">Distinctively exploit optimal alignments for intuitive business applications through revolutionary catalysts for chang the Seamlessly optimal optimal alignments for intuitive.</p>
					<div class="d-inline d-md-flex align-items-center mt-40">
						<a href="page-about.html" class="animate-btn mrr-50 mrb-sm-30">Read More</a>
						<div class="signature">
							<img src="images/about/signature.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About Section End -->
	<!-- Team Section Area Start -->
	<section class="bg-primary-color pdt-110 pdb-150">
		<div class="section-title mrb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="section-title-left-part text-xl-right text-left mrb-20 mrb-sm-30">
							<div class="section-left-sub-title mb-20">
								<h5 class="sub-title text-white">Meet All Members</h5>
							</div>
							<h2 class="title text-white">Team Members</h2>
						</div>
					</div>
					<div class="col"></div>
					<div class="col-lg-6">
						<div class="section-title-right-part">
							<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos aperiam porro reiciendis dolore doloribus repellendus tempora vitae quia voluptas ipsum eligend.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team Section Area End -->
	<!-- Team Section Start -->
	<section class="pdb-80" data-background="images/bg/abs-bg2.png">
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="team-block mrt--110 mrb-md-0 mrb-30">
							<div class="team-upper-part">
								<img class="img-full" src="images/team/team01.jpg" alt="">
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="team-bottom-part">
								<h4 class="team-title mrb-5"><a href="page-single-team.html">Alica Bendor</a></h4>
								<h6 class="designation f-weight-500 text-gray">Engineer</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="team-block mrt--110 mrb-30">
							<div class="team-upper-part">
								<img class="img-full" src="images/team/team02.jpg" alt="">
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="team-bottom-part">
								<h4 class="team-title mrb-5"><a href="page-single-team.html">Jason Morcal</a></h4>
								<h6 class="designation f-weight-500 text-gray">Engineer</h6>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-6 col-xl-4">
						<div class="team-block mrt--110 mrb-30 mrt-lg-0">
							<div class="team-upper-part">
								<img class="img-full" src="images/team/team03.jpg" alt="">
								<ul class="social-list">
									<li><a href="#"><i class="fab fa-facebook"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus"></i></a></li>
								</ul>
							</div>
							<div class="team-bottom-part">
								<h4 class="team-title mrb-5"><a href="page-single-team.html">Teylor Mark</a></h4>
								<h6 class="designation f-weight-500 text-gray">Engineer</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Team Section End -->
	<!-- Divider Section Start -->
	<section class="">
		<div class="section-content">
			<div class="container-fluid">
				<div class="row justify-content-start">
					<div class="col-md-12 col-lg-6 col-xl-6">
						<div class="about-image-block-3">
							<img class="left-infinite-img img-full" src="images/about/person2.png" alt="">
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-4 p-md-5 pd-sm-25">
						<h5 class="mrb-15 side-line-left">Why Choose Us?</h5>
						<h2 class="mrb-30">We Deliver your goods Very Fast & Secure</h2>
						<p class="mrb-60">Distinctively exploit optimal alignments for intuitive. Quickly coordinate business applications through revolutionary cataly technologies rather than development optimal alignments for intuitive business applications through.</p>
						<div class="video-popup-left2 mrb-lg-60">
            	<a class="popup-youtube-left" href="https://www.youtube.com/watch?v=Fvae8nxzVz4"><i class="fas fa-play"></i></a>
          	</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Divider Section End -->
	<!-- Clients Section Start -->
	<section class="pdb-90">
		<div class="section-content">
			<div class="container border-top pdt-80">
				<div class="row">
					<div class="col-lg-12">
						<div class="owl-carousel client-items">
							<div class="client-item">
								<img src="images/clients/client1.png" alt="">
							</div>
							<div class="client-item">
								<img src="images/clients/client2.png" alt="">
							</div>
							<div class="client-item">
								<img src="images/clients/client4.png" alt="">
							</div>
							<div class="client-item">
								<img src="images/clients/client5.png" alt="">
							</div>
							<div class="client-item">
								<img src="images/clients/client1.png" alt="">
							</div>
							<div class="client-item">
								<img src="images/clients/client6.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Clients Section End -->
	<!-- Project Section Start -->
	<section class="bg-secondary-color pdt-110 pdb-80" data-background="images/bg/abs-bg3.png">
		<div class="section-title mrb-30 mrb-md-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-6">
						<h5 class="mrb-15 text-primary-color side-line-left">Our Projects</h5>
						<h2 class="text-white mrb-30">Let's Checkout our All Latest Projects</h2>
					</div>
					<div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
						<a href="#" class="cs-btn-one btn-primary-color btn-md">All News</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_01.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Shipping</h6>
									<h3 class="project-title">Port Shipping</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_06.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Cargo</h6>
									<h3 class="project-title">Cargo Air Shipping</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_05.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Transport</h6>
									<h3 class="project-title">Road Transport</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_04.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Cargo</h6>
									<h3 class="project-title">Ocean Cargo</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_06.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Cargo</h6>
									<h3 class="project-title">Cargo Air Shipping</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="project-item mrb-30">
							<div class="project-thumb">
								<img class="img-full" src="images/project/project_05.jpg" alt="">
								<div class="project-link-icon">
									<a href="page-single-project.html"><i class="webex-icon-attachment1"></i></a>
								</div>
								<div class="project-details p-4">
									<h6 class="project-category side-line mrb-5">Transport</h6>
									<h3 class="project-title">Road Transport</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Project Section End -->
	<!-- Testimonials Section Start -->
	<section class="request-a-call-back pdt-80 pdb-110 pdb-lg-70" data-background="images/pattern/2.png">
		<div class="section-title text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
			<div class="container">
				<div class="row">
					<div class="col"></div>
					<div class="col-lg-8">
						<div class="title-box-center">
							<h5 class="sub-title-center text-primary-color line-top-center mrb-15">Testimonials</h5>
							<h2 class="title">What People and Clients Think About Us?</h2>
						</div>
					</div>
					<div class="col"></div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row">
					<div class="owl-carousel testimonial-items-3col mrb-lg-40">
						<div class="testimonial-item">
							<span class="quote-icon fas fa-quote-right"></span>
							<div class="testimonial-thumb">
								<img src="images/testimonials/testimonial-img1.jpg" alt="">
							</div>
							<h4 class="client-name">Aurther Maxwell</h4>
							<h6 class="client-designation mrb-10">CEO, Apple Inc.</h6>
							<ul class="star-rating mrb-30">
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-half text-primary-color"></i></li>
								<li><i class="webex-icon-star-empty text-primary-color"></i></li>
							</ul>
							<div class="testimonial-content">
								<p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
							</div>
						</div>
						<div class="testimonial-item">
							<span class="quote-icon fas fa-quote-right"></span>
							<div class="testimonial-thumb">
								<img src="images/testimonials/testimonial-img2.jpg" alt="">
							</div>
							<h4 class="client-name">Aurther Maxwell</h4>
							<h6 class="client-designation mrb-20">CEO, Apple Inc.</h6>
							<ul class="star-rating mrb-30">
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-half text-primary-color"></i></li>
								<li><i class="webex-icon-star-empty text-primary-color"></i></li>
							</ul>
							<div class="testimonial-content">
								<p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
							</div>
						</div>
						<div class="testimonial-item">
							<span class="quote-icon fas fa-quote-right"></span>
							<div class="testimonial-thumb">
								<img src="images/testimonials/testimonial-img3.jpg" alt="">
							</div>
							<h4 class="client-name">Aurther Maxwell</h4>
							<h6 class="client-designation mrb-20">CEO, Apple Inc.</h6>
							<ul class="star-rating mrb-30">
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-full text-primary-color"></i></li>
								<li><i class="webex-icon-star-half text-primary-color"></i></li>
								<li><i class="webex-icon-star-empty text-primary-color"></i></li>
							</ul>
							<div class="testimonial-content">
								<p class="comments">Lorem ipsum dolor consectetur adipisicing elit oluptatibus repellendus iusto quis harum laboriosam nostrum unde distinctio</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials Section End -->
	<!-- News Section Start -->
	<section class="pdt-110 pdb-80">
		<div class="section-title mrb-30 mrb-md-60">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-xl-6">
						<h5 class="mrb-15 text-primary-color side-line-left">News And Updates</h5>
						<h2 class="mrb-30">Let's Checkout our All Latest News</h2>
					</div>
					<div class="col-lg-4 col-xl-6 align-self-center text-left text-lg-right">
						<a href="#" class="cs-btn-one btn-primary-color btn-md">All News</a>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="images/news/01.jpg" class="img-full" alt="blog">
								<div class="news-date">
									<div class="entry-date">26 <br> <span>July</span></div>
								</div>
							</div>
							<div class="news-description">
								<h4 class="the-title"><a href="page-single-news.html">Distinctively revolutionary exploit catalysts for chang the Seamlessly</a></h4>
							</div>
							<div class="news-bottom-part">
								<div class="post-author">
									<div class="author-img">
										<a href="page-news.html">
											<img src="images/testimonials/testimonial-img1.jpg" class="rounded-circle" alt="#">
										</a>
									</div>
									<span><a href="page-news.html" class="text-primary-color">Admin</a></span>
								</div>
								<div class="post-link">
									<span class="entry-date mrr-20"><i class="far fa-comments mrr-10 text-primary-color"></i>2 Comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="images/news/02.jpg" class="img-full" alt="blog">
								<div class="news-date">
									<div class="entry-date">26 <br> <span>July</span></div>
								</div>
							</div>
							<div class="news-description">
								<h4 class="the-title"><a href="page-single-news.html">Tech Entrepreneur Credits Paper Success available have suffered</a></h4>
							</div>
							<div class="news-bottom-part">
								<div class="post-author">
									<div class="author-img">
										<a href="page-news.html">
											<img src="images/testimonials/testimonial-img2.jpg" class="rounded-circle" alt="#">
										</a>
									</div>
									<span><a href="page-news.html" class="text-primary-color">Admin</a></span>
								</div>
								<div class="post-link">
									<span class="entry-date mrr-20"><i class="far fa-comments mrr-10 text-primary-color"></i>2 Comments</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 col-lg-6 col-xl-4">
						<div class="news-wrapper mrb-30">
							<div class="news-thumb">
								<img src="images/news/03.jpg" class="img-full" alt="blog">
								<div class="news-date">
									<div class="entry-date">26 <br> <span>July</span></div>
								</div>
							</div>
							<div class="news-description">
								<h4 class="the-title"><a href="page-single-news.html">Consectetur adipisicing elit reprehenderit sed similique ipsum reprehenderit</a></h4>
							</div>
							<div class="news-bottom-part">
								<div class="post-author">
									<div class="author-img">
										<a href="page-news.html">
											<img src="images/testimonials/testimonial-img3.jpg" class="rounded-circle" alt="#">
										</a>
									</div>
									<span><a href="page-news.html" class="text-primary-color">Admin</a></span>
								</div>
								<div class="post-link">
									<span class="entry-date mrr-20"><i class="far fa-comments mrr-10 text-primary-color"></i>2 Comments</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- News Section End -->
	<!-- Footer Area Start -->
	<footer class="footer anim-object2">
		<div class="footer-main-area" data-background="images/footer-bg.png">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="widget footer-widget">
							<img src="images/logo-footer.png" alt="" class="mrb-20">
							<address class="mrb-25">
								<p class="text-light-gray">32 Dora Creek, tuntable creek, New South Wales 2480, Australia</p>
								<div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-phone-alt mrr-10"></i>+088 234 432 15565</a></div>
								<div class="mrb-10"><a href="#" class="text-light-gray"><i class="fas fa-envelope mrr-10"></i>sample@yourdomain.com</a></div>
								<div class="mrb-0"><a href="#" class="text-light-gray"><i class="fas fa-globe mrr-10"></i>www.domainname.com</a></div>
							</address>
							<ul class="social-list">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-6">
						<div class="row">
							<div class="col-6">
								<div class="widget footer-widget">
									<h5 class="widget-title text-white mrb-30">Services</h5>
									<ul class="footer-widget-list">
										<li><a href="service-air-freight.html">Air Freight</a></li>
										<li><a href="service-ocean-freight.html">Ocean Freight</a></li>
										<li><a href="service-road-freight.html">Road Freight</a></li>
										<li><a href="service-warehousing.html">Warehousing</a></li>
										<li><a href="service-supply-chain.html">Supply Chain</a></li>
										<li><a href="service-packaging.html">Packaging</a></li>
										<li><a href="service-air-freight.html">Shipping</a></li>
									</ul>
								</div>
							</div>
							<div class="col-6">
								<div class="widget footer-widget">
									<h5 class="widget-title text-white mrb-30">Useful Links</h5>
									<ul class="footer-widget-list">
										<li><a href="index2.html">Home</a></li>
										<li><a href="page-about.html">About</a></li>
										<li><a href="page-our-team.html">Team</a></li>
										<li><a href="page-all-services.html">Service</a></li>
										<li><a href="page-news.html">News</a></li>
										<li><a href="page-faqs.html">FAQ's</a></li>
										<li><a href="page-contact-us.html">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-12">
						<div class="widget footer-widget">
							<h5 class="widget-title text-white mrb-30">Newsletter</h5>
							<p class="text-light-gray">Seamlessly visualize quality intellectual capital without superior collaboration and idea sharing listically</p>
							<input type="text" class="form-control" placeholder="Enter Your Email">
							<a href="#" class="cs-btn-one btn-primary-color btn-sm has-icon mrt-20"><i class="webexflaticon flaticon-send"></i>Submit Now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom-area">
			<div class="container footer-border-top pdt-30 pdb-10">
				<div class="row">
					<div class="col-xl-12">
						<div class="text-center">
							<span class="text-light-gray">Copyright © 2022 by <a class="text-primary-color" target="_blank" href="https://themeforest.net/user/webextheme"> WebexTheme</a> | All rights reserved </span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Area End -->
	<!-- BACK TO TOP SECTION -->
	<div class="back-to-top bg-primary-color">
		<i class="fab fa-angle-up"></i>
	</div>
	<!-- Integrated important scripts here -->
	<script src="js/jquery.v1.12.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-core-plugins.js"></script>
	<script src="js/main.js"></script>
</body>


<!-- Mirrored from webextheme.com/html/logistek-html/version4/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Mar 2022 15:56:44 GMT -->
</html>
<?php } ?> 