<?php require_once  "php/conexion.php"; 
$pacientetipo  = $_REQUEST["paquete"];
	//echo '<script type="text/javascript">alert("valor '.$pacientetipo.'");</script>';
?>

<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="Hospital EBOR"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Hospital EBOR</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet"> 

		<!-- BOOTSTRAP CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
				
		<!-- FONT ICONS -->
		<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">		
		<link href="css/flaticon.css" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="css/menu.css" rel="stylesheet">	
		<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
		<link href="css/magnific-popup.css" rel="stylesheet">	
		<link href="css/owl.carousel.min.css" rel="stylesheet">
		<link href="css/owl.theme.default.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet">
		<link href="css/jquery.datetimepicker.min.css" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 
	
	</head>




	<body>




		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="loader-wrapper">
			<div id="loader"><div class="loader-inner"></div></div>
		</div>




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">




			<!-- HEADER
			============================================= -->
			<header id="header" class="header">


				<!-- MOBILE HEADER -->
			   <div class="wsmobileheader clearfix">
			    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			    	<span class="smllogo"><a href="index.php"><img   src="images/logo.png" width="100" height="80" alt="mobile-logo"/></span>
			    	<a href="tel:4426909037" class="callusbtn"><i class="fas fa-phone" style="color:#004a91"></i></a>
			    	<a href="tel:4428268162" class="callusbtn"><i class="fas fa-phone" style="color:#004a91"></i></a>
			 	</div>


			 	<!-- HEADER STRIP -->
			 	<div class="headtoppart bg-deepblue clearfix">
			    	<div class="headerwp clearfix">

			    		<!-- Address -->
			     		<div class="headertopleft">			     			
			        		<div class="address clearfix"><span><i class="fas fa-map-marker-alt"></i>Felipe Angeles #174,
 Quer??taro </span> <a href="tel:4426909037" class="callusbtn"><i class="fas fa-phone"></i> 442 690 90 37</a>
					<a href="tel:4428268162" class="callusbtn"><i class="fas fa-phone"></i>Urgencias 442 826 81 62</a>
			            	</div>
			     		</div>

			     		<!-- Social Links -->
					      <div class="headertopright">
					        <a class="twittericon" title="Instagram" href="https://www.instagram.com/Hospital_Ebor/"><i class="fab fa-instagram"></i> <span class="mobiletext02">Instagram</span></a>
					        <a class="ico-facebook" title="Facebook" href="https://www.facebook.com/HospitalEborQro/"><i class="fab fa-facebook-f"></i> <span class="mobiletext02">Facebook</span></a>
				      	</div>

				    </div>
			  	</div>	<!-- END HEADER STRIP -->


			  	<!-- NAVIGATION MENU -->
			  	<div class="wsmainfull menu clearfix">
    				<div class="wsmainwp clearfix">

    					<!-- LOGO IMAGE -->
    					<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80 pixels) -->
    					<div class="desktoplogo"><a href="index.php"><img src="images/logo.png"  width="100" height="100" alt="header-logo"></a></div>

    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix">
        					<ul class="wsmenu-list">


        						<li class="nl-simple" aria-haspopup="true"><a href="cui.html">Terapia Intensiva</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="department-single.html">Maternidad</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="imagen.html">Imagen</a></li>
					            <li class="nl-simple" aria-haspopup="true"><a href="lab.html">Laboratorio</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="cirugias.html">Cirug??as</a></li>

					          	<!-- PAGES -->
					           <li aria-haspopup="true" ><a class="a2" href="#">Men?? <span class="wsarrow a2"></span></a>
            						<div class="wsmegamenu clearfix">
             							<div class="container">
               								<div class="row">

               									<!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Acerca de:</li>
								                    <h5 class="h5-xs2"><a href="index.php">Inicio</a></h5>
								                      <li></li>
								                       <h5 class="h5-xs2"><a href="all-services.html">Nuestros Servicios</a></h5>
								                   <li></li>
								                    <li><a href="about-us.html">Qui??nes Somos</a></li>
								                    		                             
								                </ul>

								                <!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Pacientes:</li>
								                    <li><a href="department-single.html">Maternidad</a></li>
								                    <li><a href="all-doctors.php">Directorio M??dico</a></li>
								                  	  <li><a href="aseguradoras.html">Aseguradoras</a></li>	
								                </ul>

								                <!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Informaci??n Adicional:</li>
								                    <li><a href="contacts-1.html">Contacto</a></li>							                    
								                    <li><a href="citapre.php">Pre registro</a></li>
								                     <li><a href="faqs.html">Preguntas frecuentes</a></li>
								                    <li><a href="terms.html">Aviso de Privacidad</a></li> 								                   
								                    <li><a href="consultorios.html">Venta de consultorios</a></li>	                   
								                   
								                    
								                </ul>

								              
								                
							                </div>  <!-- End row -->	
							            </div>  <!-- End container -->	
							        </div>  <!-- End wsmegamenu -->	
							    </li>

							    <!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="citapre.php">Pre Registro</a></li>
							      <li class="nl-simple header-btn" ><a data-toggle="modal" data-target="#myModal"  class="fas fa-phone"></a></li>



        					</ul>
        				</nav>	<!-- END MAIN MENU -->

    				</div>
    			</div>	<!-- END NAVIGATION MENU -->


			</header>	<!-- END HEADER -->




			<!-- DOCTOR BREADCRUMBS -->
			<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">	
				<div class="container">
					<div class="row">
						<div class="col-md-7 offset-md-5">
			 				<div class="doctor-data darkblue-color">

			 					<!-- Name -->	
			 					<h2 class="h2-xs">Informaci??n</h2>
			 					
							</div>
						</div>
					</div>   <!-- End row -->	
				</div>	  <!-- End container -->
			</section>	<!-- END DOCTOR BREADCRUMBS -->




			<!-- DOCTOR-1 DETAILS -->
			<section id="doctor-1-details" class="doctor-details-section division">	
				<div class="container">
					<div class="row">


						<!-- DOCTOR PHOTO -->
						<div class="col-md-5">
			 				<div class="doctor-photo mb-40">

			 					<?php 

			 					        $stmt = $conn->prepare("SELECT especialidad,nombre,consultorio,telefono,celular,correo,foto,dias,libre,quien,titulo,idioma  FROM doctores where id=:id ORDER BY especialidad");
			 					        			 $stmt->bindValue(':id', (int)$pacientetipo, PDO::PARAM_INT);
											          $stmt->execute();
											          $countriesList = $stmt->fetchAll();

											          foreach($countriesList as $country){
											
			 					echo "
			 					<img class=\"img-fluid\" src=\"images/medicos/".$country['foto']."\" alt=\"doctor-foto\">

			 					
			 					<div class=\"doctor-info\">
									<table class=\"table table-striped\">
										<tbody>
										    <tr>
										      	<td>Nombre</td>
										      	<td>".$country['nombre']."</td>
										    </tr>
										    <tr>
										      	<td>Especialidades</td>
										      	<td>".$country['titulo']."
										      	</td>
										   	</tr>
										   	<tr>
										      	<td>Lenguaje(s)</td>
										      	<td>".$country['idioma']."</td>
										   	</tr>
										   	<tr class=\"last-tr\">
										      	<td>D??as de consulta</td>
										      	<td>".$country['dias']."</td>
										   	</tr>
										   		<tr>
										      	<td>Consultorio</td>
										      	<td>".$country['consultorio']."</td>
										   	</tr>
										</tbody>
									</table>
								</div>	<!-- End Doctor Info -->

								<!-- Doctor Contacts -->	
			 					<div class=\"doctor-contacts text-center\">
				 					<h4 class=\"h4-xs\"><i class=\"fas fa-mobile-alt\"></i>".$country['celular']."</h4>
									<h4 class=\"h4-xs blue-color\"><i class=\"fas fa-envelope-open-text\"></i> 
										<a href=\"mailto:yourdomain@mail.com\" class=\"blue-color\">".$country['correo']."</a>
									</h4>
								</div>

								<!-- Buttons -->
								 ";
								}
 ?>
			 				</div>
			 			</div>	<!-- END DOCTOR PHOTO -->


			 			<!-- DOCTOR'S BIO -->
						<div class="col-md-7">
							<div class="doctor-bio">

										<?php 
			 					echo "
			 					<!-- Text -->	
						   		<p class=\" text-justify>\">".$country['libre']."
						   		</p>



									

								"; ?>
							</div>
						</div>	<!-- END DOCTOR BIO -->


					</div>    <!-- End row -->	
				</div>	   <!-- End container -->
			</section>  <!-- END DOCTOR-1 DETAILS -->



 <!-- END TESTIMONIALS-2 -->

	


			<!-- FOOTER-1
			============================================= -->
			<footer id="footer-1" class="bg-image wide-40 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER INFO -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 360 x 80  pixels) -->
								<img src="images/footer-logo.png" width="100" height="100" alt="footer-logo">

								<!-- Text -->	
								<p class="p-sm mt-20">Conecta con nosotros en nuestras redes sociales
								</p>  

								<!-- Social Icons -->
								<div class="footer-socials-links mt-20">
									<ul class="foo-socials text-center clearfix">

										<li><a href="https://www.facebook.com/HospitalEborQro/" class="ico-facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="https://www.instagram.com/Hospital_Ebor/" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
																																				
										<!--
										<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>	
										<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>											
										<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>	
										<li><a href="#" class="ico-linkedin"><i class="fab fa-linkedin-in"></i></a></li>
										<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>									
										<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>											
										<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>
										<li><a href="#" class="ico-yelp"><i class="fab fa-yelp"></i></a></li>
										<li><a href="#" class="ico-yahoo"><i class="fab fa-yahoo"></i></a></li>
									    -->	

									</ul>									
								</div>	
							
							</div>		
						</div>


						<!-- FOOTER CONTACTS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
							
							
								<!-- Title -->
								<h5 class="h5-xs">Ubicaci??n</h5>

								<!-- Address -->
								<p>Felipe Angeles 174, Colonia Tecnol??gico de Santiago de Quer??taro</p> 
								<!--<p>Victoria 3000 Australia</p>-->
								
								<!-- Email -->
								<p class="foo-email mt-20">E: <a href="mailto:informes@hospitalebor.com.mx">informes@hospitalebor.com.mx</a></p>

								<!-- Phone -->
								<p>T: 442 690 9037</p>
<p><a href="https://api.whatsapp.com/send?phone=524427857921&text=
">Env??anos un whats app <img  src="images/whats.png" ></a><p>
							</div>
						</div>


						<!-- FOOTER WORKING HOURS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
							
								<!-- Title -->

								<h5 class="h5-xs">Acerca del hospital</h5>

								<p class="foo-email mt-20"><a href="all-services.html">Nuestros servicios </a></p>
								<p class="foo-email mt-20"><a href="about-us.html">Qui??nes somos</a></p>
								<p class="foo-email mt-20"><a href="terms.html">Aviso de privacidad</a></p>
								<p class="foo-email mt-20"><a href="contacts-1.html">Contacto</a></p>

								<p class="foo-email mt-20"><a href="faqs.html">Preguntas frecuentes</a></p>
				

															

							</div>
						</div>


						<!-- FOOTER PHONE NUMBER -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-box mb-40">
												
								<!-- Title -->
								<h5 class="h5-xs">Urgencias</h5>

								<!-- Footer List -->
								<h5 class="h5-xl blue-color">24 Horas</h5>
	<h5 class="h2-xs blue-color"><a href="tel:4428268162" class="callusbtn"><i class="fas fa-phone"></i> 442 826 81 62</a></h5>
								<!-- Text -->	
								 																												

							</div>
						</div>	


					</div>	  <!-- END FOOTER CONTENT -->


					<!-- FOOTER COPYRIGHT -->
						<!-- FOOTER COPYRIGHT -->
					<div class="bottom-footer">
						<div class="row">
							<div class="col-md-12">
								<p class="footer-copyright">&copy; 2020 <span>Hospital EBOR</span>. Todos los derechos reservados</p>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->										
			</footer><!-- END FOOTER-1 -->




		</div>	<!-- END PAGE CONTENT -->



		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/modernizr.custom.js"></script>
		<script src="js/jquery.easing.js"></script>
		<script src="js/jquery.appear.js"></script>
		<script src="js/jquery.stellar.min.js"></script>	
		<script src="js/menu.js"></script>
		<script src="js/sticky.js"></script>
		<script src="js/jquery.scrollto.js"></script>
		<script src="js/materialize.js"></script>	
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>	
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/hero-form.js"></script>
		<script src="js/contact-form.js"></script>
		<script src="js/comment-form.js"></script>
		<script src="js/appointment-form.js"></script>
		<script src="js/jquery.datetimepicker.full.js"></script>		
		<script src="js/jquery.validate.min.js"></script>	
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/wow.js"></script>	
	
		<!-- Custom Script -->		
		<script src="js/custom.js"></script>

		<script> 
			new WOW().init();
		</script>

<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header  bg-blue ">
          <h4 class="modal-title btn">Nuestros tel??fonos</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
         <div class="modal-body">
        	<ul class="clearfix">																		
									<h5>  <a   ><i class="fas fa-phone"></i>  442 690 9037</a></h5>																				
									<h5> <a   ><i class="fas fa-phone"></i>  Urgencias -  442 826 81 62</a></h5>
								
								</ul>

        
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <a data-dismiss="modal"  class="btn btn-blue blue-hover mt-30">cerrar</a>
							   
        <!--  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
        </div>
        
      </div>
    </div>
  </div>
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->	
		<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
		<!-- End Google Analytics -->

	</body>



</html>	