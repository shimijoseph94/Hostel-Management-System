<?php
include_once 'db_connect.php';
include_once 'check_logout.php';
if(isset($_POST['submit_cart'])){
	$user_id=$_SESSION['user'];
	$phone=$_POST['phone'];
	$location=$_POST['location'];
	$date=$_POST['event_date'];
	$venue=$_POST['event_venue'];
	$result=mysqli_query($con,"INSERT INTO `wp_getforquotation`(`quotation_user_id`, `quotation_date`, `quotation_phone`, `quotation_venue`,`quotation_location`) VALUES ($user_id,'$date','$phone','$venue',$location)");
}
if(isset($_POST['submit'])){
	$amt=$_POST['total_amount'];
	$user_id=$_SESSION['user'];
	mysqli_query($con,"UPDATE wp_addtocart SET order_status=1,cart_status=0 WHERE cart_status=1 and cart_login_id=$user_id");
	if($r=mysqli_affected_rows($con)>0){
		echo "<script>alert('Advance Payment of Rs.$amt Success..!');</script>";
	}
}
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
	<meta name="keywords" content="wedding packages, wedding planners, wedding ideas, wedding themes, package, traditional kerala weddings, kerala weddings, wedding special">
	<meta name="description" content="Angel wedding company has many packages for your wedding. You can select your needed package that suits to your budget and customs. Every package has its own specialties and uniqueness. Contact us : info.angelweddings@gmail.com, +91 99464 90001">
	<meta name="author" content="Invosome">
	<title>Wedding Planners in Kerala | Angel Wedding Company</title>
	<!-- FAVICON AND APPLE TOUCH -->
	<link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/icons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/icons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/icons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/icons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/icons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/icons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/icons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/icons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- FONTS -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
	<!-- BOOTSTRAP CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<!-- MIU ICON FONT -->
	<link rel="stylesheet" href="assets/miuiconfont/miuiconfont.css">
	<!-- FANCYBOX -->
	<link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css">
	<!-- REVOLUTION SLIDER -->
	<link rel="stylesheet" href="assets/js/revolutionslider/css/settings.css">
	<!-- BxSLIDER -->
	<link rel="stylesheet" href="assets/js/bxslider/jquery.bxslider.css">
	<!-- YOUTUBE PLAYER -->
	<link rel="stylesheet" href="assets/js/ytplayer/css/YTPlayer.css">
	<!-- ANIMATIONS -->
	<link rel="stylesheet" href="assets/js/animations/animate.min.css">
	<!-- CUSTOM & PAGES STYLE -->
	<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" href="css/custom.css">
	<link rel="stylesheet" href="assets/css/pages-style.css">
	<!-- ALTERNATIVE STYLES -->
	<link rel="stylesheet" href="#" data-style="styles">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<div id="page-wrapper">
		<!-- HEADER -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-6"></div>
					<div class="col-lg-3" style="color:#ffaa00; text-align:right; font-size:14px;"><i class="fa fa-envelope-o ph-icon" aria-hidden="true"></i> <a style="text-decoration:none;" href="mailto:info.angelweddings@gmail.com">info.angelweddings@gmail.com</a></div>
					<div class="col-lg-2" style="color:#ffaa00; text-align:right; font-size:14px;"><i class="fa fa-phone-square ph-icon" aria-hidden="true"></i> <a style="text-decoration:none;" href="tel:+919946490001">+91 99464 90001</a></div>
				</div>
			</div>
			<div class="container" style="border-bottom: 3px #110000">
				<div class="row">
					<div class="col-sm-2">
						<!-- LOGO -->
						<a id="logo" href="index.php">
							<img src="images/icons/logo1.png" alt="Destination wedding in Kerala" width="165">
						</a>
					</div><!-- col -->
					<div class="col-sm-10">
						<!-- SEARCH -->
						<!-- search-container -->
						<!-- MENU -->
						<nav>
							<a id="mobile-menu-button" href="#"><i class="fa fa-bars"></i></a>
							<ul class="menu clearfix" id="menu">
								<li>
									<a href="index.php">Home</a>
								</li>
								<li><a href="about-us.php">About</a></li>
								<li class="megamenu ">
									<a href="#">Add-ons</a>
									<div class="megamenu-container col-4">
										<div class="section">
											<img class="hidden-xs hidden-sm" src="images/backgrounds/image-megamenu.png" alt="Destination Weddings in Kochi">
										</div><!-- section -->
										<div class="section">
											<h5>Designing</h5>
											<ul>
												<li><a href="design-stage.php">Stage Decoration</a></li>
												<li><a href="design-decor.php">Hall Decoration</a></li>
											</ul>
										</div><!-- section -->
										<div class="section">
											<h5>Catering Services</h5>
											<ul>
												<li><a href="catservice.php">Nonvegetarian</a></li>
												<li><a href="catservice.php">Vegetarian</a></li>
												<li><a href="catservice.php">Snacks</a></li>
											</ul>
										</div>

								<li>
									<a href="contact-us.php">Contact</a>
								</li>
								<li>
								<a href="userprofile.php">User Profile</a>
								</li>
								<li>
									<a href="logout.php">Logout</a>
								</nav>
							</div><!-- col -->
						</div><!-- row -->
					</div><!-- container -->
				</header><!-- HEADER -->
				<style>
				@media (min-width:992px) and (max-width:1199px){
					.col-sm-10{
						width: 100.333%;
						margin-top: -4%;}
					}
					</style>
					<!-- CONTENT -->
					<div class="content">
						<div id="page-header" class="dark-2">
							<div class="container">
								<div class="row">
									<div class="col-sm-6">
										<h4>Payment</h4>
									</div><!-- col -->

								</div><!-- row -->
							</div></center><!-- ontainer -->
						</div><!-- page-header -->
            <center><img src="images/icons/paymentlogo123.png" alt="Destination wedding in Kerala" width="430px" height="165"></center>
						 <center><div class="container">
							<div class="row" >
								<div class="col-sm-3">
								</div>
								<div class="col-sm-6">
									<div class="popform" align="center">
										<form   name="myform" id="payment" action=""method="post" role="form" style="height:auto;">
											<div class="form-group" >
											<label for="payment type" >Type of payment </label>
                      <select   name="payment_type" id="paymenttype" class="form-control">
                        <option value="Credit Card" id="credit">Credit Card</option>
                        <option value="Debit Card" id="debit">Debit Card</option>
                        <option value="Debit Card" id="netbank">Net Banking</option>
                        <option value="Debit Card" id="upi">UPI Payment</option>
                     </select>
										 <input type="hidden" id="total_amount"name="total_amount" value="<?php echo $_POST['tot_amt'];?>">
												<span style="color:red;display: none;" id="namelabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter  payment type.</label>
													</span>
												</span>
											</div>
											<div class="form-group">
												<label for="cardnumber">Card Number  </label>
												<input    type="" class="form-control"  name="card_no" id="cardno" placeholder="Enter Card Number">
												<span class="payment cd-error-message" id="cardno_error"></span>
												<span style="color:red;display: none;" id="cardlabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter card number.</label>
													</span>
												</span>
											</div>
											<div class="form-group cvv">
												<label for="expirydate" id="exp">Expiry Date </label>
												<span class="payment cd-error-message" id="exp_error"></span>
												<div "cvv form-group">
												<select name="month"id="month">
													<option selected disabled >MM</option>

													<?php
														for($i=1;$i<=12;$i++){
															?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php
														}
													 ?>
												</select>
												<span class="payment cd-error-message" id="month_error"></span>
											</div>
											<div class="cvv form-group">
												<select name="month" id="year">
													<option selected disabled >YYYY</option>

													<?php
														for($i=2000;$i<=2100;$i++){
															?><option value="<?php echo $i;?>"><?php echo $i;?></option><?php
														}
													 ?>
												</select>
												<span class="payment cd-error-message" id="year_error"></span>
											</div>
											<div class="cvv form-group">
												<input    type="text"  name="cvv" id="cvv" placeholder="xxx">
												<span class="payment cd-error-message" id="cvv_error"></span>
											</div>
										</div>
											<div class="form-group">

												<label for="name">Card Holder Name : </label>
												<input    type="text" class="form-control" name="venue" id="holdername" placeholder="Enter Event Venue">
												<span class="payment cd-error-message" id="holdername_error"></span>
												<span style="color:red;display: none;" id="namelabel">
													<span>
														<label class="control-label" for="project" style="color: #A94442"><i class="fa fa-times-circle-o"></i>Please enter  Event Venue.</label>
													</span>
												</span>
											</div>


												<input id="submit" type="submit" class="btn btn-default" style="color:#000;float:right;" name="submit" value="Pay Now">
											</form>
										</div>
									</div><!-- col -->
									<!-- widget-text -->
									<!-- widget-slider -->
								</div>
							</div><!-- row -->
						</div><!-- container -->
					</div><!-- CONTENT -->
					<!-- FOOTER -->

					<footer>
						<div id="footer-top">
							<!-- container -->
						</div><!-- footer-top -->
						<div id="footer">
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
										<div class="widget widget-text">
											<h3 class="widget-title">About Us</h3>
											<p>As a trend setter We at , Angel have constantly shared the responsibility of our clients spreading the fragrance  and warmth  of hospitality all around.That brought us from a humble beginning of a wedding organising company to the present level of an  event management company of repute , over a period of seven years operating from the heart of Kerala, Kochi.</p>
										</div><!-- widget-text -->
										<div class="widget widget-newsletter">
											<form name="newsletter" method="post" action="#">
												<fieldset>
													<input type="text" name="email" placeholder="Email address">
													<input class="btn btn-default" type="submit" name="submit" value="">
												</fieldset>
											</form>
											<p>Subscribe Now</p>
										</div><!-- widget-newsletter -->
									</div><!-- col -->
									<div class="col-sm-3">
										<div class="widget widget-latest-news">
											<h3 class="widget-title">Reach Us</h3>
											<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31417.266141615346!2d76.39011650000002!3d10.167787800000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080625cfebb7d1%3A0x89bcd5a211b5e7e6!2sNedumbassery%2C+Kerala!5e0!3m2!1sen!2sin!4v1428733319906" width="250" height="350" frameborder="0" style="border:0"></iframe>
										</div><!-- widget-recent-posts -->
									</div><!-- col -->
									<div class="col-sm-3">
									</div><!-- col -->
									<div class="col-sm-3">
										<div class="widget widget-contact">
											<h3 class="widget-title">Contact Us</h3>
											<ul>
												<li>
													<span>Address</span>
													Priyadarshini Complex,<br>
													Behind Hotel Airlink Castle.<br>
													Athani, Nedumbassery P.O- 683 585.<br>
												</li>
												<li>
													<span>Phone</span>
													Ph: +91 8547855652<br>
													+91  9946490001 <br>
													+91  9946490003
												</li>
												<li>
													<span>E-mail</span>
													<a href="mailto:info.angelweddings@gmail.com">info.angelweddings@gmail.com</a>
												</li>
												<li>
													<a href="faq.php"> <span>FAQ</span></a>
												</li>
											</ul>
										</div><!-- widget-contact -->
									</div><!-- col -->
								</div><!-- row -->
							</div><!-- container -->
						</div><!-- footer -->
						<div id="footer-bottom">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="widget widget-text">
											<p class="last text-center text-uppercase">Angel Wedding Company &copy; All Rights Reserved
												|
												Designed By .:<a href="http://www.atees.in/" target="_blank">ATEES</a>:.
											</div><!-- widget-text -->
										</div><!-- col -->
									</div><!-- row -->
								</div><!-- container -->
							</div><!-- footer-bottom -->
						</footer><!-- FOOTER -->
						<div class="flyout" style="position: fixed; left: -5000px; top: - 5000px; color:#f5f5f5;"><h1><b>Wedding Planner in Cochin</b></h1><h1><b>Wedding planner in Kochi</b></h1><h1><b>Cochin weddings planners</b></h1><h1><b>cochin wedding planners</b></h1><h1><b>kochi weddings planner</b></h1><h1><b>kochi wedding planners</b></h1><h1><b>Wedding Planner in Ernakulam</b></h1><h1><b>wedding planner in angamaly</b></h1><h1><b>wedding planner in CIAL</b></h1><h1><b>Wedding planner in Bolgatty palace</b></h1><h1><b>Adlux wedding planner</b></h1><h1><b>Wedding planner in Kerala</b></h1><h1><b>best wedding planner in cochin</b></h1><h1><b>Best wedding planner in kochi</b></h1><h1><b>best wedding planner in kerala</b></h1><h1><b>Best wedding planners in cochin</b></h1><h1><b>Best wedding planners in kochi</b></h1><h1><b>best wedding planners in kerala</b></h1><h1><b>wedding company in kochi</b></h1><h1><b>wedding company in kerala</b></h1><h1><b>which is the number one wedding company in kerala</b></h1><h1><b>Beach wedding in Kochi</b></h1><h1><b>Beach weddings in Kochi</b></h1><h1><b>Wedding entertainment in Kochi</b></h1><h1><b>wedding planners in kochi</b></h1><h1><b>Wedding planners in Kerala</b></h1><h1><b>Wedding planners in ernakulam</b></h1><h1><b>destination wedding in kochi</b></h1><h1><b>Destination Weddings in Kochi</b></h1><h1><b>Destination wedding in Kerala</b></h1><h1><b>Destination weddings in Kerala</b></h1><h1><b>Best wedding event management companies in Cochin</b></h1><h1><b>Event Management Kochi</b></h1><h1><b>Event management ernakulam</b></h1><h1><b>Event Management Kerala</b></h1><h1><b>Wedding planners kochi</b></h1><h1><b>Wedding planners ernakulam</b></h1><h1><b>Wedding planners kerala</b></h1><h1><b>kerala wedding planners</b></h1><h1><b>Wedding venues in Kerala</b></h1><h1><b>Stage decoration in Kochi</b></h1><h1><b>Wedding stage decoration in kochi</b></h1><h1><b>wedding decorators in kochi</b></h1><h1><b>wedding decoration in kochi</b></h1><h1><b>Wedding Design and Decor in Kochi</b></h1><h1><b>Stage Design and Decor in Kochi</b></h1><h1><b>Invitation designing in Kochi</b></h1><h1><b>Invitation designing in Kerala</b></h1><h1><b>Catering services in Kochi</b></h1><h1><b>Catering service in Kochi</b></h1><h1><b>Wedding Photography in Kochi</b></h1><h1><b>Wedding videography in Kochi</b></h1><h1><b>wedding shopping assistance</b></h1><h1><b>wedding shopping assistance in kochi</b></h1>
						</div>
					</div><!-- PAGE-WRAPPER -->
					<style>
					.abc
					{
						padding-left:70px;
						}</style>
					</div><!-- PAGE-WRAPPER -->
					<!-- GO TOP -->
					<a id="go-top"><i class="miu-icon-circle_arrow-up_glyph"></i></a>
					<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
					<script src="assets/js/jquery.js" ></script>
					<!-- jQUERY -->
					<script src="assets/js/jquery-2.1.3.min.js"></script>
					<!-- BOOTSTRAP JS -->
					<script src="assets/js/bootstrap.min.js"></script>
					<!-- VIEWPORT -->
					<script src="assets/js/viewport/jquery.viewport.js"></script>
					<!-- MENU -->
					<script src="assets/js/menu/hoverIntent.js"></script>
					<script src="assets/js/menu/superfish.js"></script>
					<!-- FANCYBOX -->
					<script src="assets/js/fancybox/jquery.fancybox.pack.js"></script>
					<!-- REVOLUTION SLIDER -->
					<script src="assets/js/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
					<script src="assets/js/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>
					<!-- BxSLIDER -->
					<script src="assets/js/bxslider/jquery.bxslider.min.js"></script>
					<!-- PARALLAX -->
					<script src="assets/js/parallax/jquery.parallax-scroll.min.js"></script>
					<!-- ISOTOPE -->
					<script src="assets/js/isotope/imagesloaded.pkgd.min.js"></script>
					<script src="assets/js/isotope/isotope.pkgd.min.js"></script>
					<!-- PLACEHOLDER -->
					<script src="assets/js/placeholders/jquery.placeholder.min.js"></script>
					<!-- CONTACT FORM VALIDATE & SUBMIT -->
					<script src="assets/js/validate/jquery.validate.min.js"></script>
					<script src="assets/js/submit/jquery.form.min.js"></script>
					<!-- GOOGLE MAPS -->
					<script src="assets/js/googlemaps/jquery.gmap.min.js"></script>
					<!-- CHARTS -->
					<script src="assets/js/charts/chart.min.js"></script>
					<script src="assets/js/charts/jquery.easypiechart.min.js"></script>
					<!-- COUNTER -->
					<script src="assets/js/counter/jQuerySimpleCounter.js"></script>
					<!-- YOUTUBE PLAYER -->
					<script src="assets/js/ytplayer/jquery.mb.YTPlayer.js"></script>
					<!-- ANIMATIONS -->
					<script src="assets/js/animations/wow.min.js"></script>
					<!-- CUSTOM JS -->
					<script src="assets/js/custom.js"></script>
					<script src="js/validation.js"></script>
					<script>
					$(document).ready(function() {
					});
					$("#name").focusout(function(){
						if($("#name").val() == ""){
							$("#namelabel").css('display', 'block');
							$('#submit').attr('disabled', 'disabled');
						}
						else{
							$("#namelabel").css('display', 'none');
							$('#submit').removeAttr('disabled');
						}
					});
					$("#email").focusout(function(){
						if($("#email").val() == ""){
							$("#emaillabel").css('display', 'block');
							$('#submit').attr('disabled', 'disabled');
						}
						else{
							$("#emaillabel").css('display', 'none');
							$('#submit').removeAttr('disabled');
						}
					});
					$("#number").focusout(function(){
						if($("#number").val() == ""){
							$("#phonelabel").css('display', 'block');
							$('#submit').attr('disabled', 'disabled');
						}
						else{
							$("#phonelabel").css('display', 'none');
							$('#submit').removeAttr('disabled');
						}
					});
					$("#addresslabel").focusout(function(){
						if($("#address").val() == ""){
							$("#addresslabel").css('display', 'block');
							$('#submit').attr('disabled', 'disabled');
						}
						else{
							$("#addresslabel").css('display', 'none');
							$('#submit').removeAttr('disabled');
						}
					});
					$("#message").focusout(function(){
						if($("#message").val() == ""){
							$("#messagelabel").css('display', 'block');
							$('#submit').attr('disabled', 'disabled');
						}
						else{
							$("#messagelabel").css('display', 'none');
							$('#submit').removeAttr('disabled');
						}
					});
					</script>
				</body>
				</html>
