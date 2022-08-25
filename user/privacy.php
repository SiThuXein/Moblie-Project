<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>mmMobileStore</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<style>
	#clr li a{
		color:#000 !important;
		font-size:17px;
		margin-left: 20px;
	}
	#clr li a::after{
		content:'';
		display:block;
		width:0;
		height:2px;
		background: #ba0000;
		transition: width .3s;
	}
	#clr li a:hover::after{
		width:100%;
		transition: width .3s;
	}
	#clr li a:hover{
		color:#ba0000 !important;

	}
	.nav-menu{
		background:linear-gradient(
			135deg,

			rgb(246,79,89),

			rgb(196,113,237),
			rgb(18,194,233)

			) ;
			/* box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.3); */
	}
	select{
		background:#ff66a3;
		border-style:none;
		/* border-bottom:2px solid red; */
		padding:8px 15px !important;
		border-radius: 3px;
		font-size:17px;

	}
	select:hover{=#
		background:black !important;
		color:white !important;
	}
	.button{
		border-style:none;
		/* border:1px solid white; */
		padding:5px 15px !important;
		margin-bottom: 3.5px !important;
	}
	.button:hover{
		background:black !important;
		color:white !important;
	}

</style>
<body>
	<!-- top-header -->
	<div class="nav-menu fixed-top " >
			<div class="container">
					<div class="row" style="height:50px !important;">
							<div class="col-md-12 "  >
								<nav class="navbar navbar-expand-lg navbar-dark" id="clr">

									  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
									    <span class="navbar-toggler-icon"></span>
									  </button>
									  <div class="collapse navbar-collapse" id="navbarNav">
											<ul class="navbar-nav" >

									     <li class="nav-item active">
												<a class="nav-link active" href="index.php">Home </a>
   										</li>
									      <li class="nav-item">
													 <a class="nav-link" href="#">New arrivals</a>

									      </li>
									      <li class="nav-item">
													 <a class="nav-link" href="faqs.php">Faqs</a>
									      </li>
									      <li class="nav-item">
													 <a class="nav-link" href="contact.php">Contact us</a>
									      </li>
												<li class="nav-item">
												<a class="nav-link" href="about.php">About us</a>

											 </li>
											 <li class="nav-item">
												  <a class="nav-link" href="help.php">Help</a>

											</li>
											 <li class="nav-item">
												  <a class="nav-link" href="login.php">Login</a>

											 </li>
											 <li class="nav-item">
												 <a class="nav-link" href="logout.php">Logout</a>

											 </li>
									    </ul>
									  </div>
									</nav>
								</div>

							</div>
					</div>
			</div>


	<!-- Button trigger modal(select-location) -->

	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->


	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container"  style="margin-top:50px !important;">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.php" class="font-weight-bold font-italic">
							<img src="images/mm.png" alt=" " class="img-fluid"  width="80px" height="50px" style="border-radius:50%; ">mmMobileSale
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4" style="margin-top:30px !important;">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="index.php">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="data" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="cart.php" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" >
										<i class="fas fa-cart-arrow-down"  ></i>
									</button>

									<span style="color:red;">[ <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?> ]</span>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb" style="margin-top:30px;">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Privacy Policy</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- privacy -->
	<div class="terms py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>P</span>rivacy
				<span>P</span>olicy</h3>
			<!-- //tittle heading -->
			<h6 class="my-md-4 my-3">Privacy Policy</h6>
			<p class="font-weight-light pl-sm-4 mb-2">We value the trust you place in us. That's why we insist upon the highest standards for secure transactions and customer
				information privacy. Please read the following statement to learn about our information gathering and dissemination practices.
			</p>
			<p class="font-weight-light pl-sm-4 mb-2">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
				modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>

			<h6 class="my-md-4 my-3">Personally Identifiable Information and other Information</h6>
			<p class="font-weight-light pl-sm-4 mb-2">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
				middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
			<p class="font-weight-light pl-sm-4 mb-2">first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence
				structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition,
				injected humour</p>

			<h6 class="my-md-4 my-3">Security Precautions</h6>
			<p class="font-weight-light pl-sm-4 mb-2">Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil)
				by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The
				first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
			<p class="font-weight-light pl-sm-4 mb-2">Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from
				a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.
				Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"</p>

			<h6 class="my-md-4 my-3">What Information Can I Access?</h6>
			<p class="font-weight-light pl-sm-4 mb-2"> Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
				Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			<p class="font-weight-light pl-sm-4 mb-2"> Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The
				generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

			<h6 class="my-md-4 my-3">Statistical Information</h6>
			<p class="font-weight-light pl-sm-4 mb-2">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
				by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage
				of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
				generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the
				Internet.
			</p>

			<h6 class="my-md-4 my-3">User Consent</h6>
			<ol start="1" class="pl-sm-4 pl-3">
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of
					letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
				<li>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
					eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
					quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</li>
				<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.it has a more-or-less normal distribution of
					letters, as opposed Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</li>
			</ol>
			<h6 class="mb-md-4 mb-3">Policy updates</h6>
			<p class="font-weight-light pl-sm-4 mb-2"> you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on
				the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It
				uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures</p>
		</div>
	</div>
	<!-- //privacy -->

	<!-- middle section -->
	<div class="join-w3l1 py-lg-6 py-lg-6 py-5 " id="image" style="background:url(images/BG.jpg) fixed center !important; background-size:100% !important; ">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Premium Design</h6>
								<h4 class="mt-2 mb-3">Branded Smartphones</h4>
								<p>Sale up to 5% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/Note 10+.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones X</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/X.jpg"  alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->

				<!-- //footer first section -->
				<!-- footer second section -->

				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->

					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.php">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.php">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.php">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.php">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.php">Terms of use</a>
							</li>
							<li>
								<a href="privacy.php">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Yangon, Myanmar</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 3333 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 4444 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mmMobileStore@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 2@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Mobile :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Android Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Smartphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Feature Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Unboxed Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Refurbished Phones</a>
						</li>

						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">CDMA Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Value Added Services</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Sell Old</a>
						</li>
						<li class="m-sm-1">
							<a href="product.php" class="border-right pr-2">Used Mobiles</a>
						</li>
					</ul>
				</div>

				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->

	<div class="copy-right py-3" style="	background:linear-gradient(
			135deg,
			rgb(246,79,89),

			rgb(196,113,237),
			rgb(18,194,233)

			);
			box-shadow: 0px 9px 32px 0px rgba(0, 0, 0, 0.2);">
		<div class="container">
			<p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->



	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

</html>
