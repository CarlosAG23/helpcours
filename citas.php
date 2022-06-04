<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $services=$_POST['services'];
    $adate=$_POST['adate'];
    $atime=$_POST['atime'];
    $phone=$_POST['phone'];
    $aptnumber = mt_rand(100000000, 999999999);
  
    $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
    if ($query) {
    $ret=mysqli_query($con,"select AptNumber from tblappointment where Email='$email' and  PhoneNumber='$phone'");
    $result=mysqli_fetch_array($ret);
    $_SESSION['aptno']=$result['AptNumber'];
    echo "<script>window.location.href='thank-you.php'</script>";	
  }
  else
    {
      $msg="Algo salió mal. Inténtalo de nuevo";
    }
}


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
    <link href="index.html">

    
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
 	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	 <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> 
 
 	<!--font awesome cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
 
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style2.css">
    <!--custom css file link-->
	<link rel="stylesheet" href="css/estiloinicio.css">
  <!--Modificado
  <script type="text/javascript">
    function muestraselect(str){
      var conexion;
      if(str==""){
        document.getElementById("txtHint").innerHTML="";
        return;

      }
      if(window.XMLHttpRequest){
        conexion = new XMLHttpRequest();
      }
      conexion.onreadystatechange=function(){
        if(conexion.readyState == 4 && conexion.status= 200){
          document.getElementById("cfecha").innerHTML=conexion.responseText;
        }
      }

    }
  -->
  </script>

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



    <!-- END nav -->
<!--
    <section id="home-section" class="hero" style="background-image: url(images/bg.jpg);" data-stellar-background-ratio="0.5">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third align-self-end order-md-last img-fluid" src="images/bg_1.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading">SPA ConfiguroWeb</span>
			            <h1 class="mb-4">Ponte Bella</h1>
			            <p class="mb-4">Nos enorgullecemos de nuestro trabajo de alta calidad y atención al detalle. Los productos que utilizamos son de marca de primera calidad.</p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      <div class="slider-item js-fullheight">
	      	<div class="overlay"></div>
	        <div class="container-fluid p-0">
	          <div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
	          	<img class="one-third align-self-end order-md-last img-fluid" src="images/bg_2.png" alt="">
		          <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	<div class="text mt-5">
		          		<span class="subheading">Belleza Natural</span>
			            <h1 class="mb-4">Salon de Belleza ConfiguroWeb</h1>
			            <p class="mb-4">Este salón ofrece enormes instalaciones con equipos de tecnología avanzada y un servicio de la mejor calidad. Aquí le ofrecemos el mejor tratamiento que nunca haya experimentado antes.</p>
			            
			           
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>
	    </div>
    </section>
-->
    <section id="home-section" class="hero" style="background-image: url(images/pattern.jpg);" data-stellar-background-ratio="0.5">

		<div class="flex-center">
		  <div id="fondo" class="flex-center">
		  </div>
	  </div>
    
    <div class="container-fluid px-0">
      <div class="row no-gutters d-md-flex justify-content-end">
    			<div class="one-forth d-flex align-items-end"> 

    				<div class="text">
    					<div class="overlay"></div>
    					
                <div class="appointment-wrap">
    						  <!--<span class="subheading">Reservaciones</span>-->
								  <h1 class="mb-2">Agendar cita</h3>
                  <form action="" id="appointment-form" method="post" class="appointment-form">
                  
                    <div class="row">

                        <div class="col-sm-12">
                          <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="Nombre" name="name" required="true">
					                </div>
                        </div>

			                  <div class="col-sm-12">
			                    <div class="form-group">
					                  <input type="email" class="form-control" id="appointment_email" placeholder="Correo" name="email" required="true">
					                </div>
			                  </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <div class="select-wrap">
		                          <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                          <select name="services" id="services" required="true" class="form-control">
		                      	    <option value="">Seleccione el curso</option>
		                      	    <?php $query=mysqli_query($con,"select * from tblservices");
                                  while($row=mysqli_fetch_array($query))
                                      {
                                ?>
		                            <option value="<?php echo $row['ServiceName'];?>"><?php echo $row['ServiceName'];?></option>
		                            <?php } 
                                ?> 
		                          </select>
		                        </div>
                          </div>
			                  </div>
                        <!--Modificacion-->
			            
                        <div class="col-sm-12">
                          <div class="form-group">
			                      <input type="text" class="form-control appointment_date" placeholder="Fecha" name="adate" id='adate' required="true">
			                    </div>    
			                  </div>
			            
                        <div class="col-sm-12">
			                    <div class="form-group">
			                      <input type="text" class="form-control appointment_time" placeholder="Hora" name="atime" id='atime' required="true"  >
                            
			                    </div>
			                  </div>
			            
                        <div class="col-sm-12">
			                    <div class="form-group">
			                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono" required="true" maxlength="10" pattern="[0-9]+">
			                    </div>
			                  </div>

				            </div>

				                <div class="form-group">
			                    <input type="submit" name="submit" value="Enviar cita" class="btn btn-primary">
			                  </div>
			            </form>
                  
		            </div>
					  </div>
        </div>
			</div>
	  </div>
    </section>




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
  <script src="app.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
  </body>
</html>