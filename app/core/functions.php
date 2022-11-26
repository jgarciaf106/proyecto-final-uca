<?php 

function redirect($path)
{
	header("Location: " . ROOT."/".$path);
	die;
}

// function to ramdomize arra and return 3 values
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