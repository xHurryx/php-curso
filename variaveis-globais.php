<?php 
$texto = 'oi';

function imprimi_texto(){
	global $texto;
	$texto = 'oi mundo!';
}

imprimi_texto();

echo $texto;