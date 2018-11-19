<?php 
// numeros inteiros
$variavel = 13;
echo is_integer($variavel);
echo "<br>";
// numeros com pontos flutuantes 
$variavel =- 13.10;
echo is_float($variavel);
echo "<br>";


// stings
$variavel = 'José Da Silva';
$variavel = 'José Da Silva';
echo is_string($variavel);
echo "<br>";

// boleanos - boll
$variavel = true;
$variavel = false;
echo is_bool($variavel);
echo "<br>";

// arrays
$variavel = array(1, 2, 3, 10.1, 'joao', true );
echo is_array($variavel);
echo "<br>";

//objetos 
//$variavel = new objeto();
echo is_object($variavel);
echo "<br>";
// recursos
//$variavel = mysql_connect('localhost', 'root');
//echo is_resousrce($variavel);
echo "<br>";
// nulo
$variavel = null;
echo is_null($variavel);
echo "<br>";

echo gettype($variavel);
echo "<br>";
