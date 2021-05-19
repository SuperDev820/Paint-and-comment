<?php

$pagina="inicio";
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
  <link rel="stylesheet" href="../css/style.css">   
  
  <!-- Color Skins -->
  <link rel="stylesheet" href="../css/skins/blue.css" name="skins"> 
  
  <!-- Layout Style -->
  <link rel="stylesheet" href="../css/layout/wide.css" name="layout"> 
  
  <!-- Style Switcher Box -->
  <link rel="stylesheet" href="../css/layout/switcher.css">
  
  <!-- Small Icons -->
  <link rel="stylesheet" href="../css/icons.css">  
  
  <!-- Start JavaScript -->
  
    <script src="../js/jquery-1.7.2.min.js"></script> <!-- jQuery library -->
    <script src="../js/jquery.easing.1.3.min.js"></script> <!-- jQuery Easing --> 
    <script src="../js/jquery-ui.min.js"></script> <!-- jQuery Ui --> 
    <script src="../js/jquery.cookie.js"></script> <!-- jQuery cookie --> 
    <script src="../js/jquery.uniform.min.js"></script> <!-- jQuery Uniform -->
    <script src="../js/ddsmoothmenu.js"></script> <!-- Nav Menu ddsmoothmenu -->
    <script src="../js/jquery.flexslider.js"></script> <!-- Flex Slider  -->
    <script src="../js/jquery.eislideshow.js"></script> <!-- Elastic Slider  -->
    <script src="../js/jquery.iconmenu.js"></script> <!-- Sliding Text and Icon Menu Style  -->
    <script src="../js/colortip.js"></script> <!-- Colortip Tooltip Plugin  -->
    <script src="../js/tytabs.js"></script> <!-- jQuery Plugin tytabs  -->
    <script src="../js/carousel.js"></script> <!-- jQuery Carousel  -->
    <script src="../js/jquery.prettyPhoto.js"></script> <!-- jQuery Prettyphoto  -->
    <script src="../js/jquery.isotope.min.js"></script> <!-- Isotope Filtering  -->
    <script src="../js/selectnav.js"></script> <!-- Responsive Navigation Menu by SelectNav -->
    <script src="../js/jquery.ui.totop.js"></script> <!-- UItoTop plugin  -->
    <script src="../js/custom.js"></script> <!-- Custom Js file for javascript in html -->
    <script src="../js/jquery.tweet.js"></script> <!-- jQuery Tweets -->
    <script src="../js/styleswitch.js"></script> <!-- Style Switcher -->
    
    <!-- Contact Form Js -->
    
    <script type="text/javascript">                                 
	function validarEnter_intra (e) {
			tecla = (document.all)?e.keyCode:e.which; //aquí tecla toma un valor numérico. Si el navegador es IE el valor que toma es e.keyCode Si es Firefox o netscape e.which
			if(tecla==13){
				var todook
			todook=0;
			if(document.forms[0].Login.value == ""){
				document.forms[0].Login.focus();
				alert("Ha olvidado introducir el Login.");
				todook=1;
				return;
			}
			if(document.forms[0].Password.value == ""){
				document.forms[0].Password.focus();
				alert("Ha olvidado introducir el Password.");
				todook=1;
				return;
			}
			if ( todook=1){
				 document.forms[0].method="post"
				 document.forms[0].submit();
				 }
			return(todook);
			}
		}  


		function checkFormulario2()
		{
			var todook
			todook=0;
			if(document.forms[0].Login.value == ""){
				document.forms[0].Login.focus();
				alert("Ha olvidado introducir el Login.");
				todook=1;
				return;
			}
			if(document.forms[0].Password.value == ""){
				document.forms[0].Password.focus();
				alert("Ha olvidado introducir el Password.");
				todook=1;
				return;
			}
			if ( todook=1){
				 document.forms[0].method="post"
				 document.forms[0].submit();
				 }
			return(todook);
		 }
	
    </script>  
    
    <!-- End Contact -->
  
  <!-- End JavaScript -->

  <!--[if lt IE 9]>
      <script src="../js/html5.js"></script>
  <![endif]-->

  <!-- Favicons -->
  <link rel="shortcut icon" href="../images/favicon/favicon.ico">
  <link rel="apple-touch-icon" href="../images/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../images/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../images/favicon/apple-touch-icon-114x114.png">

</head>
<body>

  <div id="wrap" class="boxed">

 <?php

                            include_once ("../includes/menu_Intranet_i.php"); 
							?>
  
  <div class="container clearfix">
  
  
   
   
   
   
   <!-- Start Contact Form -->
   <div class="eleven columns  bottom">    
      
      <h2 class="title">Acceso a la Intranet<span class="line"></span></h4>
      
      <div class="form">
      
      <div id="note"></div><!-- End notification -->
      
      <div id="fields">
      
      <form id="ajax-contact-form" action="">
      
      <div class="form-box">
        <label>Usuario <small>(<span style="color:#F00">*</span> )</small></label>
        <input type="text" name="Login" class="text">
      </div><!-- End Box -->
      
      <div class="form-box">
        <label>Clave <small>(<span style="color:#F00">*</span> )</small></label>
        <input type="text" name="Password" class="text">
      </div><!-- End Box -->
      
     
      
      <div class="clearfix"></div>
      
      <input type="submit" name="submit" value="acceso" class="button medium color" />
      
      </form>
      
      </div><!-- End fields -->
      
      </div>
      
      <!-- End contact form -->
      
   </div><!-- End column -->  
   
   
  
   
   
   <div class="clearfix"></div>
   
   
   
       
     
  </div><!-- <<< End Container >>> -->
  
  <?php

                            include_once ("../includes/footer.php"); 
							?>
  
  </div><!-- End wrap -->
  
  <!-- Start Style Switcher -->
  <div class="switcher"></div>
  <!-- End Style Switcher -->
    
</body>
</html>