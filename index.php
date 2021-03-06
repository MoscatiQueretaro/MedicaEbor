<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	<head>
	<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="ec2d04ec-fe91-41b3-9fd0-63848216a9d8";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="Hospital RBOT"/>
		<meta name="keywords" content="Queretaro, Juriquilla, EBOR, Médica EBOR, Hospital Queretaro, Hospital Juriquilla, Clínica EBOR">	
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
		  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<link href="css/popup.css" rel="stylesheet" type="text/css" />   
			<link href="css/popupinicio.css" rel="stylesheet" type="text/css" />   
				
			
		<!-- TEMPLATE CSS -->
		<link href="css/style.css" rel="stylesheet">
		
		<!-- RESPONSIVE CSS -->
		<link href="css/responsive.css" rel="stylesheet"> 


		
<script type="text/javascript">
function openDialog() {
	$('#overlay').fadeIn('fast', function() {
		$('#popup').css('display','block');
        $('#popup').animate({'left':'30%'},500);
    });
}

function closeDialog(id) {
	$('#'+id).css('position','absolute');
	$('#'+id).animate({'left':'-100%'}, 500, function() {
		$('#'+id).css('position','fixed');
		$('#'+id).css('left','100%');
		$('#overlay').fadeOut('fast');
	});
}
</script>


	
	</head>




	<body onload="openDialog();">



		

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '838931776936478');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=838931776936478&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


		<!-- PRELOADER SPINNER
		============================================= -->	
		<div id="overlay" class="overlay"></div>

<div id="popup" class="popup">
	<a onclick="closeDialog('popup');" class="close"></a>
	<div class="text-center">
		<?php 
		$valor=rand(1,2);
		if ($valor==1)
		{
			echo "
    	<h3>Agenda tu estudio de laboratorio o imagen </h3>
    	<div class=\"box-list\">	
												<a href=\"citalabo.php\" class=\"btn btn-blue blue-hover mt-30\">Agendar estudio</a>			
											</div>";
										}
										else {
											echo "
    	<h3>Agenda tu estudio de imagen o laboratorio </h3>
    	<div class=\"box-list\">	
												<a href=\"citaimagen.php\" class=\"btn btn-blue blue-hover mt-30\">Agendar estudio</a>			
											</div>";
											}

											
											?>
        <div style="float:left; width:270px;">
        	
        </div>
      
	</div>
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
 Querétaro </span> <a href="tel:4426909037" class="callusbtn"><i class="fas fa-phone"></i> 442 690 90 37</a>
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
    					<div class="desktoplogo"><a href="#hero-2"><img src="images/logo.png"  width="100" height="100" alt="header-logo"></a></div>

    					<!-- MAIN MENU -->
      					<nav class="wsmenu clearfix">
        					<ul class="wsmenu-list">


        						<!-- DROPDOWN MENU -->
					        	<!--<li aria-haspopup="true"><a href="#">Home <span class="wsarrow"></span></a>
					           		<ul class="sub-menu">
					           			<li aria-haspopup="true"><a href="#">Dummy Link Style #1</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #2</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #3</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #4</a></li>
					              		<li aria-haspopup="true"><a href="#">Dummy Link Style #5</a></li>
					           		</ul>
					          	</li> -->
					          		<!-- END DROPDOWN MENU -->


					          	<!-- PAGES -->

					          	<li class="nl-simple" aria-haspopup="true"><a href="cui.html">Terapia Intensiva</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="department-single.html">Maternidad</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="imagen.html">Imagen</a></li>
					            <li class="nl-simple" aria-haspopup="true"><a href="lab.html">Laboratorio</a></li>
					          	<li class="nl-simple" aria-haspopup="true"><a href="cirugias.html">Cirugías</a></li>

					          	<li aria-haspopup="true" ><a class="a2" href="#">Menú <span class="wsarrow a2"></span></a>
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
								                    <li><a href="about-us.html">Quiénes Somos</a></li>
								                    		                             
								                </ul>

								                <!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Pacientes:</li>
								                    <li><a href="department-single.html">Maternidad</a></li>
								                    <li><a href="all-doctors.php">Directorio Médico</a></li>
								                  	  <li><a href="aseguradoras.html">Aseguradoras</a></li>	
								                  	  <li><a href="promociones.html">Promociones</a></li>	
								                </ul>

								                <!-- MEGAMENU LINKS -->
               									<ul class="col-lg-3 col-md-12 col-xs-12 link-list">
								                    <li class="title">Información Adicional:</li>
								                    <li><a href="contacts-1.html">Contacto</a></li>							                    
								                    <li><a href="citapre.php">Pre registro</a></li>
								                     <li><a href="faqs.html">Preguntas frecuentes</a></li>
								                    <li><a href="terms.html">Aviso de Privacidad</a></li> 								                   
								                    <li><a href="consultorios.html">Renta de consultorios</a></li>	                   
								                   
								                    
								                </ul>

								              
								                
							                </div>  <!-- End row -->	
							            </div>  <!-- End container -->	
							        </div>  <!-- End wsmegamenu -->	
							    </li>	<!-- END PAGES -->


					          	


					          

							    <!-- NAVIGATION MENU BUTTON -->
							    <li class="nl-simple header-btn" aria-haspopup="true"><a href="citapre.php">Pre Registro</a></li>
							     <li class="nl-simple header-btn" ><a data-toggle="modal" data-target="#myModal"  class="fas fa-phone"></a></li>
							     
							  

        					</ul>
        				</nav>	<!-- END MAIN MENU -->

    				</div>
    			</div>	<!-- END NAVIGATION MENU -->


			</header>	<!-- END HEADER -->




			<!-- HERO-2
			============================================= -->	
			<section id="hero-2" class="hero-section division">


				<!-- SLIDER -->
				<div class="slider blue-nav">
			    	<ul class="slides">



					<li id="slide-5">

					        <!-- Background Image -->
				        	<img src="images/slider/slide-5.jpg" alt="slide-background">
				        	<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7">
		       								<div class="caption-txt">

						       					<!-- Title -->
						       					

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>

							<!-- Image Caption -->
		       				<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->

				     	<!-- SLIDE #1 -->
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="images/slider/slide-1.jpg" alt="slide-background">
				        	<div class="caption d-flex align-items-center center-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7">
		       								<div class="caption-txt">

						       					<!-- Title -->
						       					<h2 class="steelblue-color"><span >Servicios</span> </h2>
									          	
												<!-- Button -->
												<a href="all-services.html" class="btn btn-blue blue-hover">Conoce nuestros servicios</a>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>

							<!-- Image Caption -->
		       				<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->


				      	<!-- SLIDE #2 -->
				      	<li id="slide-2">

				        	<!-- Background Image -->
				        	<img src="images/slider/slide-2.jpg" alt="slide-background">

							<div class="caption d-flex align-items-center right-align">
	        					<div class="container">
		       						<div class="row">
		       						<div class="col-md-9 col-lg-9">
		       								<div class="caption-txt white-color">
		       									<br>
					        					<!-- Title -->
								         	 	<h2 class="steelblue-color"><span >Anticipa tu ingreso</span> </h2>
								         	 	<p class="p-md">
												</p>
												<p class="p-md">
												</p>
												<br>
									          	
									          	<!-- Text -->
											

												<!-- Button -->
												<a href="citapre.php" class="btn btn-blue blue-hover">Pre Registro</a>

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>
							

				     	</li>	<!-- END SLIDE #2 -->


				     	<!-- SLIDE #3 -->
				      	<li id="slide-3">

				      		<!-- Background Image -->
				        	<img src="images/slider/slide-3.jpg" alt="slide-background">
<div class="caption d-flex align-items-center left-align">
	        					<div class="container">
		       						<div class="row">
		       						<div class="col-md-9 col-lg-9">
		       								<div class="caption-txt white-color">
		       									<br>
					        					<!-- Title -->
								         	 	<h2 class="steelblue-color"><span >Conoce nuestros paquetes</span> </h2>
								         	 	<p class="p-md">
												</p>
												<p class="p-md">
												</p>
												<br>
									          	
									          	<!-- Text -->
											

												<!-- Button -->
												<a href="department-single.html" class="btn btn-blue blue-hover">Maternidad </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Apendicectomia </a>
												<a href="department-single.html" class="btn btn-blue blue-hover">Cesarea </a>
												<a href="department-single.html" class="btn btn-blue blue-hover">Parto Normal </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Colecistectomia </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Legrado o AMEU </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Rafi Abierta </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Plastia Sin Malla </a>
												<a href="cirugias.html" class="btn btn-blue blue-hover">Rinoseptumplastia </a>
												

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>
				        	<!-- Image Caption -->
		       			 	<!-- End Image Caption -->

				     	</li>	<!-- END SLIDE #3 -->
				     	<li id="slide-4">

				      		<!-- Background Image -->
				        	<img src="images/slider/slide-4.jpg" alt="slide-background">
<div class="caption d-flex align-items-center left-align">
	        					<div class="container">
		       						<div class="row">
		       						<div class="col-md-9 col-lg-9">
		       								<div class="caption-txt white-color">
		       									<br>
					        					<!-- Title -->
								         	 	<h2 class="steelblue-color"><span >Agenda tu prueba COVID19</span> </h2>
								         	 	<p class="p-md">
												</p>
												<p class="p-md">
												</p>
												<br>
									          	
									          	<!-- Text -->
											

												<!-- Button -->
												<a href="citalabo.php?paquete=SERV-103L" class="btn btn-blue blue-hover">Agendar </a>

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>
				        	<!-- Image Caption -->
		       			 		<!-- End Image Caption -->

				     	</li>

				     	

				    </ul>
			  	</div>	<!-- END SLIDER -->


			</section>	<!-- END HERO-2 -->




			



			<!-- ABOUT-5
			============================================= -->
			<section id="about-5" class="bg-lightgrey pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="images/chief_doctor_700x800.jpg" alt="about-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<h1 class="h1-md darkblue-color ">Hospital EBOR</h1>

								<!-- Title -->
								<h5 class="h5-md darkblue-color">Todo lo que necesitas en un solo lugar</h5>

								<!-- Text -->
								<p class="text-justified" >Hospital Ebor tiene 15 años en la atención médica integral de los pacientes mediante un servicio cálido, un trato humano y personal profesional. Todo con la finalidad de salvaguardar la salud y seguridad del paciente en todo momento.   </p>
								<p class="text-justified">Los servicios de Urgencias, Terapia Intensiva, Quirófanos, Cuneros Neonatales, Laboratorio, Imagen, entre otros, lo hacen un hospital completo para una atención integral ante cualquier padecimiento.</p>
								<p> El Hospital cuenta con una amplia gama de especialidades: Pediatría, Ginecología, Traumatología y Ortopedia, Cirugía General, Urología, Dermatología, Odontología, Nutriologo, Otorrinolaringología, entre otras.

								</p>

								
 

								</p>



								

							</div>
						</div>	<!-- END TEXT BLOCK -->	

						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->


<section id="services-3" class="bg-lightgrey wide-100 services-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
								<h3 class="h3-md darkblue-color">Servicios y Especialidades</h3>		

							<!-- Text -->
							<p>Contamos con una amplia gama de servicios y especialidades con la más alta calidad de medicos y equipo con la mejor tecnologia
							</p>
										
						</div> 
					</div>
				
					
					<!-- SERVICES CONTENT -->
					<div class="row">
						<div class="col-md-12">					
							<div class="owl-carousel owl-theme services-holder">

						
								<!-- SERVICE BOX #1 -->
								<div class="sbox-3 icon-sm">
									<a href="all-services.html">	
									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-083-stethoscope"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Servicios</h5>

									<!-- Text -->
									<p>Conoce toda nuestra gama de servicios
									</p>
											
											</a>																											
								</div>


								<!-- SERVICE BOX #2 -->
								<div class="sbox-3 icon-sm">
									<a href="department-single.html">
									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-060-cardiogram-4"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Maternidad</h5>

									<!-- Text -->
									<p>Somos tu mejor opción en este momento tan importante
									</p>
								</a>
																																						
								</div>


								<!-- SERVICE BOX #3 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<a href="all-doctors.php">
									<div class="sbox-3-icon">
										<span class="flaticon-016-doctor-1"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Directorio Médico</h5>

									<!-- Text -->
									<p>Los mejores médicos trabajan con nosotros, conocelos
									</p>
								</a>
																																						
								</div>


								<!-- SERVICE BOX #4 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<a href="aseguradoras.html">
									<div class="sbox-3-icon">
										<span class="flaticon-051-emergency-call"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Aseguradoras</h5>

									<!-- Text -->
									<p>Conoce las aseguradoras con las que trabajamos
									</p>
																																						
								</div>


								<!-- SERVICE BOX #5 -->
								<div class="sbox-3 icon-sm">

<a href="consultorios.html">
									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-036-hospital-8"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Renta de consultorios</h5>

									<!-- Text -->
									<p>Conoce nuestro exclusivos consultorios
									</p>
								</a>
																																						
								</div>


								<!-- SERVICE BOX #6 -->
								<div class="sbox-3 icon-sm">

<a href="citapre.php">	
									<!-- Icon -->
									<div class="sbox-3-icon">
										<span class="flaticon-150-clipboard"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Pre registro</h5>

									<!-- Text -->
									<p>Agiliza tu proceso de admisión 
									</p>
													
													</a>																									
								</div>


								<!-- SERVICE BOX #7 -->
								<div class="sbox-3 icon-sm">

									<!-- Icon -->
									<a href="contacts-1.html">
									<div class="sbox-3-icon">
										<span class="flaticon-148-smartphone"></span>
									</div>
										
									<!-- Title -->
									<h5 class="h5-xs darkblue-color">Contacto</h5>

									<!-- Text -->
									<p>Estamos a tús ordenes, contactanos.
									</p>
												</a>																										
								</div>


								

							
							</div>
						</div>									
					</div>	<!-- END SERVICES CONTENT --> 
							
						
				</div>	   <!-- End container -->
			</section>

			<!-- SERVICES-2
			============================================= -->
			



			




			<!-- GALLERY-1
			============================================= -->
			<div id="gallery-1" class="gallery-section division">	


				<!-- SECTION TITLE -->	
				<div class="container">
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md darkblue-color">Galería de imágenes</h3>	

							<!-- Text -->
							<p>Conoce nuestras instalaciones
							</p>
										
						</div> 
					</div>
				</div>


				<!-- GALLERY IMAGES -->
				<div class="row gallery-items-list">							
								
							  
					<!-- IMAGE #1 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-1.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-1.jpg" title="Cuneros"><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
										
													 
					<!-- IMAGE #2 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-2.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-2.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
											
									
					<!-- IMAGE #3 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-3.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-3.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
										
																
					<!-- IMAGE #4 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-4.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-4.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
											
									
					<!-- IMAGE #5 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-5.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-5.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
										
										
					<!-- IMAGE #6 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-6.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-6.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
						
						
					<!-- IMAGE #7 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-7.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-7.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
										
													 
					<!-- IMAGE #8 -->
					<div class="col-md-6 col-lg-3 gallery-item">
						<div class="hover-overlay"> 

							<!-- Gallery Image -->
							<img class="img-fluid" src="images/gallery/image-8.jpg" alt="gallery-image" />			
							<div class="item-overlay"></div>				
									
							<!-- Image Zoom -->		
							<div class="image-zoom">
								<a class="image-link" href="images/gallery/image-8.jpg" title=""><i class="fas fa-search-plus"></i></a>
							</div> 

						</div>
					</div>
												
							
				</div>  <!-- END GALLERY IMAGES -->		


			</div>	 <!-- END GALLERY-1 -->	




			<!-- ABOUT-6
			============================================= -->
			



			<!-- STATISTIC-2
			============================================= -->
			<!-- END STATISTIC-2 -->




			<!-- TABS-1
			============================================= -->
			<!-- END TABS-1 -->




			<!-- TESTIMONIALS-2
			============================================= -->
			 <!-- END TESTIMONIALS-2 -->




			<!-- DOCTORS-1
			============================================= -->
			




			<!-- BANNER-2
			============================================= -->
			


	<!-- END BLOG-1 -->




			


			<!-- FOOTER-3
			============================================= -->
			<footer id="footer-3" class="wide-40 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">	


						<!-- FOOTER INFO -->
						<div class="col-md-6 col-lg-4">
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
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<div class="footer-box mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Ubicación</h5>

								<!-- Address -->
								<p>Felipe Angeles 174, Colonia Tecnológico de Santiago de Querétaro</p> 
								<!--<p>Victoria 3000 Australia</p>-->
								
								<!-- Email -->
								<p class="foo-email mt-20">E: <a href="mailto:informes@hospitalebor.com.mx">informes@hospitalebor.com.mx</a></p>

								<!-- Phone -->
								<p>T: 442 690 9037</p>
<p><a href="https://api.whatsapp.com/send?phone=524427857921&text=
">Envíanos un whats app <img  src="images/whats.png" ></a><p>
							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-md-6 col-lg-2">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Acerca de la clinica</h5>

								<!-- Footer Links -->
								<ul class="foo-links clearfix">
									<li><a href="all-services.html">Nuestros servicios </a></li>
									<li><a href="about-us.html">Quiénes somos</a></li>
									<li><a href="department-single.html">Maternidad</a></li>
									<li><a href="imagen.html">Imagen</a></li>
									<li><a href="lab.html">Laboratorio</a></li>									
								</ul>

							</div>
						</div>


						<!-- FOOTER LINKS -->
						<div class="col-md-6 col-lg-2">
							<div class="footer-links mb-40">
												
								<!-- Title -->
								<h5 class="h5-xs">Información Adicional</h5>

								<!-- Footer List -->
								<ul class="clearfix">																		
									<li><a href="contacts-1.html">Contacto</a></li>																				
									<li><a href="terms.html">Aviso de privacidad</a></li>
									<li><a href="faqs.html">Preguntas frecuentes</a></li>
									<li><a href="consultorios.html">Renta de consultorios</a></li>
									
								</ul>

							</div>
						</div>	



					</div>	  <!-- END FOOTER CONTENT -->


					<!-- FOOTER COPYRIGHT -->
					<div class="bottom-footer">
						<div class="row">
							<div class="col-md-12">
								<p class="footer-copyright">&copy; 2021 <span>Hospital EBOR</span>. Todos los derechos reservados</p>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</footer>	<!-- END FOOTER-3 -->




		</div>	<!-- END PAGE CONTENT -->
		



		<!-- EXTERNAL SCRIPTS
		============================================= -->	
	<!--	<script src="js/jquery-3.3.1.min.js"></script>-->	
		<!--<script src="js/bootstrap.min.js"></script>	-->	
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
		<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header  bg-blue ">
          <h4 class="modal-title btn">Nuestros teléfonos</h4>
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






	



</body>


</html>	