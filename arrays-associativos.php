<?php

$dados_pessoais = array(
					'nome' =>	'Paulo Cesar',
					'sobrenome' =>	'Dantas',
					'email' =>	'paulo@paulo.com'
					);

echo '<pre>';
print_r($dados_pessoais);
echo '</pre>';

echo '<br><hr><br>';
print_r($dados_pessoais['nome']);