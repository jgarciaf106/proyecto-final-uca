<?php

/**
 * Si se han enviado encabezados, use JavaScript para redirigir al usuario a la ruta especificada. De
 * lo contrario, use la función header() de PHP para redirigir al usuario a la ruta especificada
 * 
 * @param path La ruta a la que redirigir.
 */
function redirect($path)
{
	if (headers_sent()) {
		echo "<script> location.replace('" . ROOT . $path . "'); </script>";
		die();
	} else {
		exit(header("Location: " . ROOT . $path));
	}
}

/**
 * Mezcla las claves de la matriz, luego devuelve los primeros tres elementos de la matriz mezclada.
 * 
 * @param array La matriz para aleatorizar.
 */
function randomize($array)
{
	$keys = array_keys($array);
	shuffle($keys);
	$random = array();
	for ($i = 0; $i < 3; $i++) {
		$random[$keys[$i]] = $array[$keys[$i]];
	}
	return (array) $random;
}

/**
 * Si el usuario ha iniciado sesión, devuelve verdadero, de lo contrario, devuelve falso.
 * 
 * @return un valor booleano.
 */
function isUserLogIn(){
	if(isset($_SESSION['USER'])){
		if($_SESSION['LOGIN']){
			return true;
		}
	}
	return false;
}