<?php
session_start();
error_reporting(0);

  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HelpCourse</title>
    
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style2.css">


         <!-- google fonts cdn link -->
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
 
 
         <!--font awesome cdn link-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 
         <!--custom css file link-->
         <link rel="stylesheet" href="css/estiloinicio.css">

  </head>
  <body>
      <!--header section starts-->

	  <header>
		  <div id="menu" class="fas fa-bars"></div>
		  <a href="#" class="logo"><i class="fas fa-user-graduate"></i>HelpCourse</a>

		<nav class="navbar">
			<ul>
			<li><a class="active" href="index.html">Inicio</a></li>
			<li><a href="index.html">Nosotros</a></li>
			<li><a href="index.html">Cursos</a></li>
			<li><a href="index.html">Profesores</a></li>
			<li><a href="index.html">Contáctanos</a></li>
			</ul>
		</nav>

		<div id="login" class="fas fa-user-circle"></div>

		</header>
    <!-- login form -->

    <div class="login-form">

        <form action="">
            <h3>Registro</h3>
            <input type="email" placeholder="Nombre de usuario" class="box">
            <input type="password" placeholder="Contraseña" class="box">
            <p>Olvidaste tu contraseña? <a href="#">Da clic aquí</a></p>
            <p>No tienes una cuenta? <a href="#">Registrate</a></p>
            <input type="submit" class="btn" value="Ingresar">
            <i class="fas fa-times"></i>
        </form>
    </div>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/imagenn.png');" data-stellar-background-ratio="0.5">
      <div class=""></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5">
            <h2 class="mb-0 bread" style="color:white">¡La cita se agendo con éxito!</h2>
            <h1 style="color:white">Revise el correo</h1>
			
			<!--
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> Gracias<span> <i class="ion-ios-arrow-forward"></i></span></p>
            
-->  

		</div>
		
		
        </div>
		
      </div>
	  

    </section>
    <!--
    <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-6 text-center heading-section ftco-animate">
          	<h4 class="w3ls_head">El número de cita es: <?php echo $_SESSION['aptno'];?> </h4>
        </div>
		
    	</div>
			<div class="container-fluid p-0">
    		<div class="row no-gutters">
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Stylist</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-5.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Fashion</span>
	    					<h3>Model</h3>
	    				</div>
	    				<a href="images/work-6.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-7.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				<img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
	    				<div class="text">
	    					<span>Beauty</span>
	    					<h3>Makeup</h3>
	    				</div>
	    				<a href="images/work-8.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
    		</div>
    	</div>

		</section>
-->

    <!-- contact section ends-->

    <!-- footer section starts-->

    <div class="footer">
        
        <div class="box-container">

             <div class="box">
                 <h3> Sucursales </h3>
                 <a href="#">Quito</a>
             </div>

             <div class="box">
                <h3> Enlaces rapidos </h3>
                <a href="index.html">Inicio</a>
                <a href="index.html">Nosotros</a>
                <a href="index.html">Cursos</a>
                <a href="index.html">Profesores</a>
                <a href="index.html">Contáctanos</a>
            </div>

            <div class="box">
                <h3> Información de contacto </h3>
                <p> <i class="fas fa-map-marker-alt"></i> Ecuador, Quito </p>
                <p><a href="https://helpcourse.xyz">helpcourse.com</a></p>
                <p> <i class="fas fa-phone"></i> +5939876512356 </p>

                
            </div>

        </div>

        <h1 class="credit">Creado por <a href="#">HelpCourse</a> &copy; todos los derechos reservados.</h1>


    </div>
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
      <!--jquery cdn link-->
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--custom js file link-->
<script src="js/script.js"></script>  
  </body>
</html>