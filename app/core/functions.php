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

// function with a switch to execut sweert alerts
function alerts($alertData, $timer=1500)
{
	$message = $alertData['message'];
	switch ($alertData['type']) {
		case 1:
			echo "<script>Swal.fire({icon: 'error',title: '$message',showConfirmButton: false,timer: '$timer'})</script>";
			break;
		case 2:
			echo "<script>Swal.fire({icon: 'success',title: '$message',showConfirmButton: false,timer: '$timer'})</script>";
			break;
		case 3:
			echo "<script>Swal.fire({icon: 'warning',title: '$message',showConfirmButton: false,timer: '$timer'})</script>";
			break;
		default:
			echo "<script>Swal.fire('Error!', 'Something went wrong', 'error')</script>";
			break;
	}
}


/**
 * Si el archivo tiene menos de 500 kb y es un jpg, png, jpeg o gif, mueva el archivo al directorio de
 * destino
 * 
 * @param image El archivo de imagen que se cargará.
 * 
 * @return un valor booleano.
 */
function storeImage($image)
{
	$target_dir = "/Applications/MAMP/htdocs/uca/app/local/";
	$target_file = $target_dir . basename($image["name"]);
	$uploadOk = 1;

	$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
	

	// Check file size
	if ($image["size"] > 500000) {
		$uploadOk = 0;
	}

	// Allow certain file formats
	if (
		$imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif"
	) {
		$uploadOk = 0;
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		return false;
		// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($image["tmp_name"], $target_file)) {
			return true;
		} else {
			return false;
		}
	}
}