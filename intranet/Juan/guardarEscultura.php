<?php 
	include_once ("../../inclusiones/rutas_fich.php");
	include_once(INCLU."funciones_php.php");
	include_once(INCLU."control_Intranet.php");  
	include_once(CLASSUPLOAD."class.upload.php");  
	include_once(INCLU."funciones_php_fechas.php");
		
			$titulo=$_POST["titulo"];
			$texto=$_POST["textonoticia"];
			
				
			$fecha=$_POST['fecha'];
			$foto=$_FILES['foto'];
			
			//PASO LAS FECHAS A FORMATO MYSQL
			$fechaSQL=DateToQuotedMySQLDate($fecha);
			
			//LLAMO AL METODO QUE HACE LA INSERT EN LA TABLA DE PORRAS
			salvarNoticia($titulo, $texto, $fechaSQL);
			
			
			//SACO EL MAX PORRA PAR AGUARDAR LA FOTO DE LA PORRA CON ESE NOMBRE
			$resultado = getMaxNoticia();
			if($resultado){
				$maxidnoticia=$resultado;
			}else{
				
			}
			
			
			//echo "<br>Archivo vale: ".$foto_prod;
			/*VAMOS A GUARDAR LA FOTO EN LOS 3 DIRECTORIOS*/
			 ini_set("max_execution_time",0);
			
			/*GUARDO LA BANDERA*/
			$handle = new Upload($foto);
			if ($handle->uploaded) {
				//FOTO 130x140
				//echo "EOEOE FOTO: ".$bannerPorra;
				if (!file_exists("../../images/noticias/thumbs/")) mkdir("../../images/noticias/thumbs/");
				// -----------
				$handle->file_new_name_body =$maxidnoticia;
				$handle->image_resize          = true;
				$handle->image_ratio_crop      = true;
				$handle->image_y               = 130;
				$handle->image_x               = 84;
				$handle->Process("../../images/noticias/thumbs");
				/*
				$handle->image_resize          = true;
				$handle->image_ratio_fill      = true;
				$handle->image_y               = 130;
					$handle->image_x               = 84;
				$handle->image_background_color = '#FFFFFF';
				*/
				//FOTO GIGANTE 
				if (!file_exists("../../images/noticias/grande/")) mkdir("../../images/noticias/grande/");
				// -----------
				$handle->file_new_name_body =$maxidnoticia;
				$handle->Process("../../images/noticias/grande"); 
				
				if (!file_exists("../../images/noticias/")) mkdir("../../images/noticias/");
				// -----------
				$handle->file_new_name_body =$maxidnoticia;
				$handle->image_resize          = true;
				$handle->image_ratio_fill      = true;
				$handle->image_y               = 180;
					$handle->image_x               = 615;
				$handle->image_background_color = '#FFFFFF';
				$handle->Process("../../images/noticias");
				
			} else {
				// if we are here, the local file failed for some reasons
				echo '<fieldset>';
				echo '  <legend>local file error</legend>';
				echo '  Error: iuoiouu' . $handle->error . '';
				echo '</fieldset>';
			}
			?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>guardar noticia</title>
<script type="text/javascript">
        
		function volver(){ 
			document.forms[0].action="altaNoticias.php?origen=21";
			document.forms[0].method="post";
			document.forms[0].submit()
		}
		
</script>
</head>
<body  onload="javascript:volver()">
<form name="form" method="post">
</form>
</body>
</html>