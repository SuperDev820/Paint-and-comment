<?
	include_once ("../../inclusiones/rutas_fich.php");
	include_once(INCLU."control_Intranet.php");  
	include_once(INCLU."funciones_php.php");
	include_once(INCLU."funciones_php_fechas.php");
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="robots" content="index, follow" />
  <meta name="keywords" content="" />
  <meta name="title" content="" />
  <meta name="description" content="" />
  <title>FUNDACI&Oacute;N CMAE::ALTA NOTICIA</title>

<!-- Stylesheets Start //-->
<link rel="shortcut icon" href="../../images/favicon.ico"/>
<link href="../../css/style.css" rel="stylesheet" type="text/css" />
<link href="../../css/intranet.css" rel="stylesheet" type="text/css" />
<!-- Stylesheets Start End //-->

<!-- Javascript Start //-->

<script type="text/javascript" src="../../js/cufon.js"></script>
<script type="text/javascript" src="../../js/fonts/ColaborateLight.js"></script>
<script type="text/javascript" src="../../js/functions.js"></script> 
<script type="text/javascript" src="../../ckeditor/ckeditor.js"></script>
<script type="text/javascript">
  Cufon.replace('h1')('h2')('h3')('h4')('h5') ('.label_forms')('.cabecera_tabla') ('.columna_txt_2')('.columna_txt')('.sidelist')('#myslidemenu a',{hover: 'true'})('#myslidemenu li li a',{textShadow: '1px 1px #ffffff',hover: 'true'})('a.slidebutton', {textShadow: '1px 1px #ffffff', hover: 'true'})('#slogan h4', {textShadow: '1px 1px #ffffff'})('a.button', {hover: 'true'});
</script>
<script>
			function volver(){
				document.forms[0].action="index.php?origen=1";
				document.forms[0].target="_self";
				document.forms[0].method="post";  
				document.forms[0].submit();	
			}
		</script></head>
<body>
  <div id="wrapper">
    <div id="topwrapper"></div>
    <div id="mainwrapper">
      <!-- Header Start -->
      <div id="header">
       
      </div>
      <!-- Header End  -->
      
      <!-- Page Heading -->
      <div id="page-heading"> 
        <img src="../../images/page-heading5.jpg" alt="" />
        
      </div>
      <!-- Page Heading End -->
      <div class="clear"></div>
          
      <div class="center">
      
        <!-- Full Width Wrapper -->
        <div class="maincontent-full">
         
            <form  method="post" enctype="multipart/form-data" id="formContacto">
								  <?
										include_once(INCLU."form_alta_noticias.php");
									?>
						</form>
         
         
          
               
        </div>
        <!-- Full Width Wrapper End -->
      </div>
      <div class="clear"></div>
    </div>

    <!-- Footer Start -->
    <div id="bottomwrapper"></div>
    <div id="footer">
      
      <div class="clear"></div>
      
      <div class="bottom">
         <?
				//echo "INCLI: ".INCLU;
				include_once(INCLU."footer.php");
			?>
      </div>    
    </div>
    <!-- Footer End  -->
  </div>
</body>
</html>