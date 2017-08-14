<!DOCTYPE HTML>
<html>
<head>
<title>ConstruccionesNEA</title>
<!-- Bootstrap -->
<link href="<?php echo base_url('Bootstrap/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<link  rel="shortcut icon" href="<?php echo base_url('Bootstrap/images/favicon.png')?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script  type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('Bootstrap/css/blue.css')?>" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8">

<!-- Estilo para que funcione la galeria de imagenes de Modelos  -->
<link href="<?php echo base_url('Bootstrap/css/baguettebox.min.css')?>" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url('Bootstrap/css/gallery-clean.css')?>" rel='stylesheet' type='text/css' />

<!-- Se agrega la referencia a la fuente de la pagina  -->
<link rel="stylesheet" href="<?php echo base_url('Bootstrap/fonts/RobotoCondensed-Regular-webfont.ttf')?>" type="text/css">

<!-- start plugins -->
<script  type="text/javascript" src="<?php echo base_url('Bootstrap/js/jquery.min.js')?>"></script>
<script  type="text/javascript" src="<?php echo base_url('Bootstrap/js/bootstrap.min.js')?>"></script>
<!--start slider -->
    <link rel="stylesheet" href="<?php echo base_url('Bootstrap/css/fwslider.css')?>" media="all">
    <script  src="<?php echo base_url('Bootstrap/js/jquery-ui.min.js')?>"></script>
    <script  src="<?php echo base_url('Bootstrap/js/css3-mediaqueries.js')?>"></script>
    <script  src="<?php echo base_url('Bootstrap/js/fwslider.js')?>"></script>
<!--end slider -->
<!-- must have -->
<link href="<?php echo base_url('Bootstrap/css/allinone_carousel.css')?>" rel="stylesheet" type="text/css">
<script  src="<?php echo base_url('Bootstrap/js/jquery-ui-1.8.16.custom.min.js')?>" type="text/javascript"></script>
<script  src="<?php echo base_url('Bootstrap/js/jquery.ui.touch-punch.min.js')?>" type="text/javascript"></script>
<script  src="<?php echo base_url('Bootstrap/js/allinone_carousel.js')?>" type="text/javascript"></script>
<!--[if IE]><script src="js/excanvas.compiled.js" type="text/javascript"></script><![endif]-->
<!-- must have -->

<!-- Owl Carousel Assets -->
<link href="<?php echo base_url('Bootstrap/css/owl.carousel.css')?>" rel="stylesheet">
<script  src="<?php echo base_url('Bootstrap/js/owl.carousel.js')?>"></script>
		
		<!-- //Owl Carousel Assets -->
<!-- start circle -->

<style>
    /**********************************
Responsive navbar-brand image CSS
- Remove navbar-brand padding for firefox bug workaround
- add 100% height and width auto ... similar to how bootstrap img-responsive class works
***********************************/

.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  padding: 5px;
  width: auto;
}


/* EXAMPLE 3

line height is 20px by default so add 30px top and bottom to equal the new .navbar-brand 80px height  */

.example3 .navbar-brand {
  height: 80px;
}

.example3 .nav >li >a {
  padding-top: 30px;
  padding-bottom: 30px;
}
.example3 .navbar-toggle {
  padding: 10px;
  margin: 25px 15px 25px 0;
}

/*Colapsar el menu antes de un px determinado  */
@media (max-width: 1200px) {
  .navbar-header {
      float: none;
  }
  .navbar-left,.navbar-right {
      float: none !important;
  }
  .navbar-toggle {
      display: block;
  }
  .navbar-collapse {
      border-top: 1px solid transparent;
      box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
  }
  .navbar-fixed-top {
      top: 0;
      border-width: 0 0 1px;
  }
  .navbar-collapse.collapse {
      display: none!important;
  }
  .navbar-nav {
      float: none!important;
      margin-top: 7.5px;
  }
  .navbar-nav>li {
      float: none;
  }
  .navbar-nav>li>a {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .collapse.in{
      display:block !important;
  }
}

/*Color de las letras de la barra de menu  */
.navbar-default .navbar-nav>li>a {
    color: #ED6A1B;
}

@font-face {
    font-family: 'roboto_condensedregular';
    src: url('./Bootstrap/fonts/RobotoCondensed-Regular-webfont.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;

}
nav,legend {
    font-family: 'roboto_condensedregular';
	  background:#ffffff;
	  font-size: 100%;
}
.main_grid1{
  font-family: 'roboto_condensedregular';
	
}

body{
    font-family:"Arial",Helvetica,Arial,sans-serif;
    font-size:14px;
    line-height:1.42857143;
    color:#333;
    background-color:#fff
}

#bannerBg{
    background-image: url(http://www.g-tres.com/wp-content/uploads/construccion-castellon.jpg);
}

</style>

</head>

<body>

<div class="example3">
  <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white; heigth:90px;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3" >
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar" style="background-color: #194C85;"></span>
          <span class="icon-bar" style="background-color: #194C85;"></span>
          <span class="icon-bar" style="background-color: #194C85;"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url('')?>"><img src="<?php echo base_url('Bootstrap/images/logo.png')?>" class="img-responsive" alt=""/></a>
	    </div>
			
			<?php
					$this->load->view("menu")
			?>
			
		<!--/.nav-collapse -->
	  </div>
    <!--/.container-fluid -->
  </nav>
</div>



<?php
    $this->load->view($contenido)
?>






<div class="container">
    
</div>




</body>
</html>