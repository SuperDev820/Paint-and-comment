<?php
		$_SESSION['login_user'];
		$_SESSION['pass_user'];
		
		include_once("funciones_php.php");
		//Comprobamos q en la BD exista algun cliente cuyon LOGIN y PASSWORD coincidan con los
		$resultado = getAdmin($_SESSION['login_user'],$_SESSION['pass_user']);
		if($resultado){
			
		}else{
			echo("<script language='javascript'>alert('Su contraseña o su usuario no son correctos.');</script>");
			echo("<script language='javascript'>location.href='../index.php'</script>");
		}
        //fin del if
?>