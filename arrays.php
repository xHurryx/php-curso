<?php 

/*
$meses[] = 'Janeiro';
$meses[] = 'Fevereiro';
$meses[] = 'Março';
$meses[] = 'Abril';
$meses[] = '5';
$meses[] = '6';
$meses[] = '7';
$meses[] = '8';
$meses[] = '9';
$meses[] = '10';
$meses[] = 'Novembro';
$meses[] = '12';*/


$dias_da_semana = array('Domingo', 'Segunba', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
$meses = array (
		'Janeiro',
		'Fevereiro',
		'Março',
		'Abril',
		'Maio',
		'Junho',
		'Julho',
		'Agosto',
		'Setembro',
		'Outubro',
		'Novembro',
		'Dezembro',
	); 


echo $dias_da_semana[date('w')] . ', ' . date('d'). ' de '. $meses[date('m')-1]. ' de '. date('Y');
echo '<br>';
//echo date('w');
echo '<br><hr><br>';
echo '<pre>';
print_r($meses);
echo '<br>';
print_r($meses[0]);
echo '</pre>';
echo '<br><hr><br>';
echo '<pre>';
var_dump($meses);
echo '<br>';
var_dump($meses[0]);
echo '</pre>';

echo '<br><hr><br>';
echo '<br><hr><br>';

