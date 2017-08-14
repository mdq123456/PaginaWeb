<!DOCTYPE HTML>
<html>
<head>
<title>Modus-Versus a bootstrap Website Template | Home :: w3layouts</title>
<!-- Bootstrap -->
<link href="<?php echo base_url('Bootstrap/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Bootstrap/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('Bootstrap/css/blue.css')?>" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="<?php echo base_url('Bootstrap/js/jquery.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Bootstrap/js/bootstrap.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Bootstrap/js/bootstrap.min.js')?>"></script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url('Bootstrap/css/fwslider.css')?>" media="all">
    <script src="<?php echo base_url('Bootstrap/js/jquery-ui.min.js')?>"></script>
    <script src="<?php echo base_url('Bootstrap/js/css3-mediaqueries.js')?>"></script>
    <script src="<?php echo base_url('Bootstrap/js/fwslider.js')?>"></script>
<!--end slider -->
<!-- must have -->
<link href="<?php echo base_url('Bootstrap/css/allinone_carousel.css')?>" rel="stylesheet" type="text/css">
<script src="<?php echo base_url('Bootstrap/js/jquery-ui-1.8.16.custom.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('Bootstrap/js/jquery.ui.touch-punch.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('Bootstrap/js/allinone_carousel.js')?>" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

<!-- Owl Carousel Assets -->
<link href="<?php echo base_url('Bootstrap/css/owl.carousel.css')?>" rel="stylesheet">
<script src="<?php echo base_url('Bootstrap/js/owl.carousel.js')?>"></script>
		
		<!-- //Owl Carousel Assets -->
<!-- start circle -->

</head>
<body>
<div class="navbar navbar-light navbar-fixed-top" style="background-color: white;">
    <div class="container">
        <div class="header">
			<div class="row">
				<div class="col-sm-2">
					
					<a href="<?php echo base_url('')?>"><img src="<?php echo base_url('Bootstrap/images/logo.png')?>" class="img-responsive" alt=""/></a>
					
				</div>
				<div class="col-sm-10">
					<div class="">
						<nav>
							<ul class="" style = "">
								<li class="activate"><a href="<?php echo base_url('')?>">INICIO</a></li>
								<li><a href="contact.html">CONTÁCTATE</a></li>
								<li><a href="about.html">QUIÉNES SOMOS?</a></li>
								<li><a href="service.html">SERVICIOS</a></li>
								<li><a href="portfolio.html">PORTFOLIO</a>
								<ul class="sub-menu list-unstyled">
									<li><a href="portfolio.html">Portfolio Page</a></li>
									<li><a href="portfolio.html">Portfolio Page</a></li>
									<li><a href="portfolio.html">Portfolio Page</a>
										<ul class="list-unstyled">
											<li><a href="portfolio.html">Sub-Menu 1</a></li>
											<li><a href="portfolio.html">Sub-Menu 2</a></li>
											<li><a href="portfolio.html">Sub-Menu 3</a></li>
										</ul>
									</li>
								</ul>
								</li>
								<li><a href="feature.html">feature</a></li>
							</ul>
						</nav>

					</div>
				</div>
				<div class="clearfix"></div>

			
			</div>

            
        </div>
    </div>
</div>




<?php
    $this->load->view($contenido)
?>





<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.html"><img src="<?php echo base_url('Bootstrap/images/logo.png')?>" alt=""/></a>
			</div>		
			<p class="f_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info(at)mycompany.com</a></span>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>company</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>community</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Lorem ipsum dolor sit amet</a></li>
				<li><a href="#">Nullam nec sapien eget</a></li>
				<li><a href="#">Curabitur pellentesque</a></li>
				<li><a href="#">Mauris dictum neque</a></li>
				<li><a href="#">Lorem ipsum dolor sit</a></li>
				<li><a href="#">Nullam nec sapien</a></li>
				<li><a href="#">Curabitur mauris tempor </a></li>
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="<?php echo base_url('Bootstrap/images/blog_pic1.jpg')?>" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>26, may 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.html"><img src="<?php echo base_url('Bootstrap/images/blog_pic2.jpg')?>" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.html"><p>Lorem Ipsum is simply dummy text of the this printing and typesetting industry.</p></a>
					<span>17, June 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>