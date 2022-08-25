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
													 <a class="nav-link" href="new.php">New arrivals</a>

									      </li>
									      <li class="nav-item">
													 <a class="nav-link" href="faqs.php">FAQs</a>
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
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb" style="margin-top:30px;">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>FAQs</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Faqs -->
	<div class="faqs-w3l py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>F</span>AQs
			</h3>
			<!-- //tittle heading -->
			<h3 class="w3-head mb-2">Top 10 Frequently asked questions</h3>
			<div class="faq-w3agile">
				<ul class="faq pl-4">
					<li class="item1 mt-3 pl-2">
						<a href="#" title="click here">What is mmMobileSale ?</a>
						<ul>
							<li class="subitem1">
								<p> mmMobileSale is where you can buy the phones that you desire online.We asure you that our phones will give you the satisfaction you seek.</p>
							</li>
						</ul>
					</li>
					<li class="item2 mt-3 pl-2">
						<a href="#" title="click here">Prepaid and Postpaid phone plans:What's the difference ?</a>
						<ul>
							<li class="subitem1">
								<p> Prepaid phone plans are perfect if you want freedom and flexibility.</p>
								<p> Prepaid phone plans are perfect if you are short on money .</p>
							</li>
						</ul>
					</li>
					<li class="item3 mt-3 pl-2">
						<a href="#" title="click here">How do payments work with mmMobileSale ?</a>
						<ul>
							<li class="subitem1">
								<p>We use PayPal for processing payments here on mmMobileSale for a number of reasons related to seller protections, buyer protections, and their dispute resolution process.

When using PayPal, buyers are allowed a number of options of their payment source including most debit cards, credit cards, PayPal Credit, etc. Regardless of your payment source selection, you'll still be covered by PayPal's protections. Even if you don't sign up for a PayPal account.</p>
							</li>
						</ul>
					</li>
					<li class="item4 mt-3 pl-2">
						<a href="#" title="click here">Why can't I login ?</a>
						<ul>
							<li class="subitem1">
								<p>Something is wrong with your password or email address.There can be a problem connecting with server.We
sincerely apologize for any inconvenience.</p>
							</li>
						</ul>
					</li>
					<li class="item5 mt-3 pl-2">
						<a href="#" title="click here">What does it mean when a device is unlocked ?</a>
						<ul>
							<li class="subitem1">
								<p>Generally speaking, "unlocked" devices are devices that are not tied to one specific cellular provider and can be used on any cellular network that the device's hardware is compatible with. A locked device is generally only compatible with a single cellular network. For example, if you purchase a device through AT&T, it's generally only compatible with AT&T's service. This would not be the case with an unlocked device.

Unlocked devices generally fall into two different unlocked categories: factory unlocked and carrier unlocked. Here are the differences:

A factory unlocked device is generally purchased directly from a device manufacturer with no direct ties to any single carrier
A carrier unlocked device is originally purchased as locked to a specific carrier but is later unlocked for use on other networks
Here on mmMobileSale, our unlocked device categories are reserved for factory unlocked devices only. Any devices that were originally purchased through or locked to a specific carrier should always be listed in the carrier category for that device. If a buyer receives a device that was sold in an unlocked category of our site, and it's discovered that the device was originally locked to a specific carrier, the seller would be required to address the situation accordingly.

Also, please note that unlocked devices are not necessarily compatible with all carriers simply because they're unlocked. All devices have limitations on what carriers they're compatible with, and it's crucial to know if the unlocked device you'd like to purchase is compatible with your carrier before you buy it. A seller is not required to accept a return if a buyer purchases a device that doesn't work on their network of choice at no fault of the seller, so be sure to ask your carrier or the seller about compatibility before purchasing a listing if you're unsure!

</p>
							</li>
						</ul>
					</li>
					<li class="item6 mt-3 pl-2">
						<a href="#" title="click here">How do shipping addresses work on mmMobileSale ?</a>
						<ul>
							<li class="subitem1">
								<p>Here on mmMobileSale, we allow buyers to input or select their shipping address before proceeding to PayPal to complete their payment. This process links the address they input to their PayPal payment, and per PayPal policies, this is the address the seller is required to ship to.

Please note that we do not support an official way to change addresses after completing a payment. However, if sellers are comfortable with shipping to a different address, the buyer can supply the address in a comment on the private sale page for the seller to use.</p>
							</li>
						</ul>
					</li>
					<li class="item7 mt-3 pl-2">
						<a href="#" title="click here">Why is my listing still pending ?</a>
						<ul>
							<li class="subitem1">
								<p>If your listing is currently pending here on mmMobileSale, this means that our moderation team has not been able to approve your listing for purchase. </p>
							</li>
						</ul>
					</li>
					<li class="item8 mt-3 pl-2">
						<a href="#" title="click here">Can I cancel my order ?</a>
						<ul>
							<li class="subitem1">
								<p>Yes.Here on mmMobileSale,you can cancel your order anytime.</p>
							</li>
						</ul>
					</li>
					<li class="item9 mt-3 pl-2">
						<a href="#" title="click here">What's a trusted seller ?</a>
						<ul>
							<li class="subitem1">
								<p>A trusted seller is a mmMobileSale seller who has been identified by our support team as being especially trustworthy and professional in handling their listings and sales.</p>
							</li>
						</ul>
					</li>
					<li class="item10 mt-3 pl-2">
						<a href="#" title="click here">Does mmMobileSale support trading ?</a>
						<ul>
							<li class="subitem1">
								<p>Unfortunately, trading isn't something we support here on mmMobileSale. Since all purchases are treated as individual transactions with its own buyer and seller, and each transaction would have its own PayPal protections applied to it.</p>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //Faqs -->

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
								<a href="faqs.php">FAQs</a>
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
