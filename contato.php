<?php 

if(isset($_POST['nome'])){	
	$aviso = '';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$area = $_POST['area'];
	$mensagem = $_POST['mensagem'];
	
	if (empty($nome)) {
		$aviso .= 'Favor preencher o nome <br />';
	}
	if (empty($email)) {
		$aviso .= 'Favor preencher o email <br />';
	}
	if (empty($area)) {
		$aviso .= 'Favor preencher o area <br />';
	}
	if (empty($mensagem)) {
		$aviso .= 'Favor preencher o mensagem <br />';
	}
	if (empty($aviso)) {
		$aviso .= 'Recebemos sua mensagem. Dados enviados <br />';
		$aviso .= 'Nome: ' . $nome . '<br />';
		$aviso .= 'Nome: ' . $email . '<br />';
		$aviso .= 'Nome: ' . $mensagem . '<br />';

		$aviso .= '<br /><br /><a href="contato.php">voltar</a>'

		$sucesso = true;
	}	
}/*else{
	$aviso .= 'Formulario não foi enviado';
}*/ 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contato</title>
</head>
<body>
	<?php if (!empty($aviso)): ?> 		
		<h2><?php print $aviso; ?></h2>
	<?php endif; ?>
	<?php if (!$sucesso):?>
	<form action="contato.php" method="post">
		<label for="nome">Nome</label><input type="text" name="nome" id="nome" value="<?php if(isset($nome)){echo $nome;}?>"/><br />		
		<label for="email">Email</label><input type="text" name="email" id="email" value="<?php if(isset($email)){echo $email;}?>"/><br />
		Selecione para quem quer enviar:
		<select name="area">
			<option value="vendas">Vendas</option>
			<option value="suporte">Suporte</option>
		</select><br />
		MENSAGEN<br />		
		<textarea name="mensagem" cols="40" rows="10"/><?php if(isset($mensagem)){echo $mensagem;}?></textarea>
		<br />
		<input type="submit" value="Enviar">		
	</form>
	<?php endif; ?>

</body>
</html>