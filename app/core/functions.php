<?php

function redirect($path)
{
	if (headers_sent()) {
		echo "<script> location.replace('" . ROOT . $path . "'); </script>";
		die();
	} else {
		exit(header("Location: " . ROOT . $path));
	}
}

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

