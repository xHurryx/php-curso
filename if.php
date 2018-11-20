<?php 
$idade = 18;

if ($idade >= 18) {
	echo 'Voce  é maior de idade';
}


/*
* == igualdade
* != desigualdade
* > maior que
* >= maior que ou igual a
* < menor que
* <= menor que ou igual a
 */

echo "<br><hr><br>";

$nascionalidade = 'Brasileira';

if ($idade >= 18 && $nascionalidade != 'Brasileira') {
	echo 'Seja bem vindo';
}else{
	echo 'Voce naum tem acesso a isto';
}

/*
* && e 
* || ou
* 
 */

echo "<br><hr><br>";
$idade = 17;
if ($idade >= 18 && $nascionalidade != 'Brasileira') {
	echo 'Seja bem vindo';
}elseif ($idade < 18) {
	echo 'Voce precisa ter 18 anos ou mais';
}elseif ($nascionalidade == 'Brasileira') {
	echo 'Em breve estaremos chegando no Brasil';
}
else{
	echo 'Voce naum tem acesso a isso';
}

echo "<br><hr><br>";

$verdade = false;
if (!$verdade) {
	echo 'Não é verdade';
}