<?php 


function foo(){
	$numero_de_argumentos = func_num_args();
	echo 'Numero de argumentos: ' . $numero_de_argumentos . '<br />';
}

foo();