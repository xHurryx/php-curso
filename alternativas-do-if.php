<?php 
$idade = 18;
$nascionalidade = 'Brasileira';

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


if ($idade >= 18 && $nascionalidade != 'Brasileira'):
	echo 'Seja bem vindo';
elseif ($idade < 18):
	echo 'Voce precisa ter 18 anos ou mais';
elseif ($nascionalidade == 'Brasileira'):
	echo 'Em breve estaremos chegando no Brasil';
else:
	echo 'Voce naum tem acesso a isso';
endif;
