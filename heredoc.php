<?php
header ('Content-type: text/html; charset=UTF-8');
$nome = 'João Da Silva';	
$variavel = <<<QQC
Exemplo de variavel definida pela sintaxe heredoc<br /> 
É possível expandir variáveis: $nome;
QQC;

echo "$variavel";