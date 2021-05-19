<?
$pagina="inicio";
	$origen=$_GET['origen'];
		if ($origen==0){
		//	SI VIENEN DE LOGEARSE INICIALIZO LAS VARIBLES DE SESION
			$_SESSION['login_user']= base64_encode($_POST["Login"]);
			$_SESSION['pass_user']= base64_encode($_POST["Password"]);
		}
	include_once("../../includes/control_Intranet.php"); 
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

  <!-- Basic Page Needs -->
  <meta charset="utf-8">
  <title>Juan Echezarreta Bedia Intranet</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS Style -->
  <link rel="stylesheet" href="../../css/style.css">   
  
  <!-- Color Skins -->
  <link rel="stylesheet" href="../../css/skins/blue.css" name="skins"> 
  
  <!-- Layout Style -->
  <link rel="stylesheet" href="../../css/layout/wide.css" name="layout"> 
  
  <!-- Style Switcher Box -->
  <link rel="stylesheet" href="../../css/layout/switcher.css">
  
  <!-- Small Icons -->
  <link rel="stylesheet" href="../../css/icons.css">  
  
  <!-- Start JavaScript -->
  
    <script src="../../js/jquery-1.7.2.min.js"></script> <!-- jQuery library -->
    <script src="../../js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing --> 
    <script src="../../js/jquery-ui.min.js"></script> <!-- jQuery Ui --> 
    <script src="../../js/jquery.cookie.js"></script> <!-- jQuery cookie --> 
    <script src="../../js/jquery.uniform.min.js"></script> <!-- jQuery Uniform -->
    <script src="../../js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="../../js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
    <script src="../../js/jquery.eislideshow.js"></script> <!-- Elastic Slider  -->
    <script src="../../js/jquery.iconmenu.js"></script> <!-- Sliding Text and Icon Menu Style  -->
    <script src="../../js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
    <script src="../../js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
    <script src="../../js/carousel.js"></script> <!-- jQuery Carousel  -->
    <script src="../../js/jquery.prettyPhoto.js"></script> <!-- jQuery Prettyphoto  -->
    <script src="../../js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
    <script src="../../js/selectnav.js"></script> <!-- Responsive Navigation Menu by SelectNav -->
    <script src="../../js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
    <script src="../../js/custom.js"></script> <!-- Custom Js file for javascript in html -->
    <script src="../../js/styleswitch.js"></script> <!-- Style Switcher -->
    
    <!-- Contact Form Js -->
    <script type="text/javascript">
       
		function secciones(caso){   
			switch (caso) {
			   case 1: 
			   		document.forms[0].action="altaCuadros.php";
			   break;
			   case 2: 
			   		document.forms[0].action="altaPoesias.php";
			   break;
			    case 3: 
			   		document.forms[0].action="altaEsculturas.php";
			   break;
			}

			
			document.forms[0].method="post";
			document.forms[0].submit()
			}
        </script><!-- Javascript End //-->
  
    
    <!-- End Contact -->
  
  <!-- End JavaScript -->

  <!--[if lt IE 9]>
      <script src="../js/html5.js"></script>
  <![endif]-->

  <!-- Favicons -->
  <link rel="shortcut icon" href="../../images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="../../images/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../../images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../../images/favicon/apple-touch-icon-114x114.png">

</head>
<body>

  <div id="wrap" class="boxed">

 <?
                            include_once ("../../includes/menu_Intranet_i.php"); 
							?>
  
  <div class="container clearfix">
  
  
   
   
   
   
   <!-- Start Contact Form -->
   <div class="eleven columns  bottom">    
      
      <h2 class="title">Opciones Intranet<span class="line"></span></h4>
      
      <div class="form">
      
      <div id="note"></div><!-- End notification -->
      
      <div id="fields">
      
     								<p class="texto_menu_index">
										<a href="javascript:secciones(1);">
										<img src='../../images/arrow_grey.png' alt='Gestion de Cuadros'/>
										<span style="color:#0d92c9;">Gestión de Cuadros</span>
										</a>
									</p>
									<p class="texto_menu_index">
										<a href="javascript:secciones(2);">
										<img src='../../images/arrow_grey.png' alt='Gestion de Poesias'/>
										<span style="color:#0d92c9;">Gestión de Poesias</span>
										</a>
									</p>
									<p class="texto_menu_index">
										<a href="javascript:secciones(2);">
										<img src='../../images/arrow_grey.png' alt='Gestion de Esculturas'/>
										<span style="color:#0d92c9;">Gestión de Esculturas</span>
										</a>
									</p>
      
      </div><!-- End fields -->
      
      </div>
      
      <!-- End contact form -->
      
   </div><!-- End column -->  
   
   
  
   
   
   <div class="clearfix"></div>
   
   
   
       
     
  </div><!-- <<< End Container >>> -->
  
  <?
                            include_once ("../../includes/footer.php"); 
							?>
  
  </div><!-- End wrap -->
  
  <!-- Start Style Switcher -->
  <div class="switcher"></div>
  <!-- End Style Switcher -->
    
</body>
</html>->
  
  <?
                            include_once ("../../includes/footer.php"); 
							?>
  
  </div><!-- End wrap -->
  
  <!-- Start Style Switcher -->
  <div class="switcher"></div>
  <!-- End Style Switcher -->
    
</body>
</html>