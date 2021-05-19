<?php
/**
 * @copyright   2010 Mikel Etxezarreta<mikel@campusdeportivo.com>
 * @link       
 * @since       Version 1.0
 */
global $db;
include_once ('config.php');

// Include ezSQL
include_once(LIB."ezsql/ez_sql_core.php");
include_once(LIB."ezsql/ez_sql_mysql.php");
 
 // Initiate database access
$db = new ezSQL_mysql($dbconfig['user'], $dbconfig['pass'], $dbconfig['db'], $dbconfig['host']);


/**************ADMININTRANET************************/
function cortarTexto($texto) {
 
    $tamano = 410; // tamaño máximo  
	$tamanofijo=410;
    $textoFinal = ''; // Resultado
 
    // Si el numero de carateres del texto es menor que el tamaño maximo,
    // el tamaño maximo pasa a ser el del texto
    if (strlen($texto) < $tamano) $tamano = strlen($texto);
 
    for ($i=0; $i <= $tamano - 1; $i++) {
        // Añadimos uno por uno cada caracter del texto
        // original al texto final, habiendo puesto
        // como limite la variable $tamano
        $textoFinal .= $texto[$i];
    }
 	
	//echo "tamano: ".$tamanofijo;
	//echo "v: ".strlen($texto);
	if (strlen($texto) < $tamanofijo){
		$textoFinal=$textoFinal;
	}else{
		$textoFinal=$textoFinal."...";
	}
    // devolvemos el texto final
    return $textoFinal;
 
}
function cortarTextoTitulo($texto) {
 
    $tamano = 35; // tamaño máximo
    $textoFinal = ''; // Resultado
 
    // Si el numero de carateres del texto es menor que el tamaño maximo,
    // el tamaño maximo pasa a ser el del texto
    if (strlen($texto) < $tamano) $tamano = strlen($texto);
 
    for ($i=0; $i <= $tamano - 1; $i++) {
        // Añadimos uno por uno cada caracter del texto
        // original al texto final, habiendo puesto
        // como limite la variable $tamano
        $textoFinal .= $texto[$i];
    }
	
 	if (strlen($texto) < $tamano){
		$textoFinal=$textoFinal;
	}else{
		$textoFinal=$textoFinal."...";
	}
    // devolvemos el texto final
    return $textoFinal;
 
}

function getAdmin($user, $clave)
{
	global $db;
	$admindecode=base64_decode($user);
	$clavedecode=base64_decode($clave);
	$sql = "select NombreUsuario, ClaveUsuario from UsuariosIntranet where NombreUsuario='".$admindecode."' and ClaveUsuario='".$clavedecode."'";
	//echo "SQL: ".$sql;
	$result = $db->get_row( $sql );
	
	if( $result )
	{
		return $result;
	}
	
	return false;
}


