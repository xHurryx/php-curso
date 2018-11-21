<?php 
$mensagem = '';
if (empty($_POST['nome'])){
	$mensagem .= 'Favor preencher o nome  <br />';
}else{
	if (empty($_POST['email'])){
	$mensagem .= 'Favor preencher o email  <br />';
	}else{
		if (empty($_POST['area'])){
			$mensagem .= 'Favor preencher a area  <br />';
		}else{
			if (empty($_POST['mensagem'])){
				$mensagem .= 'Favor preencher a mensagem  <br />';
			}else{
				$mensagem .='Obrigado por entrar en contato conosco!!<br />';
				$mensagem .= $_POST['nome'] .'<br />';
				$mensagem .= $_POST['email'] .'<br />';
				$mensagem .= $_POST['area'] .'<br />';
				$mensagem .= $_POST['mensagem']. '<br />';
				$mensagem .= '<a href="formulario.html">Voltar<a/>';
			}
		}
	}
}

/*if(!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['area']) && !empty($_POST['mensagem'])){
	$mensagem = '';
	$mensagem .='Obrigado por entrar en contato conosco!!
	<br />';
	$mensagem .= $_POST['nome'] .'<br />';
	$mensagem .= $_POST['email'] .'<br />';
	$mensagem .= $_POST['area'] .'<br />';
	$mensagem .= $_POST['mensagem']. '<br />';
	$mensagem .= '<a href="formulario.html">Voltar<a/>';
}else{
	$mensagem = 'Favor prencher coretamente o formulario<br /> <br />';
	$mensagem .= '<a href="formulario.html">Voltar<a/>';
} */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contato</title>
</head>
<body>
	
	<?php echo $mensagem; ?>

</body>
</html>