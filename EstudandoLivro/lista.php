<?php session_start(); ?>

<html lang="pt-br">
<head>
<title>Lista de Contatos</title>
<meta charset="utf-8">
</head>
<body>
	<h1>Lista de Contatos</h1>
	<form>
		<fieldset>
			<legend>Novo Contato</legend>
			<label>
			Nome:
			<input type="text" name="nome" />
			</label>
			<label>
			Telefone:
			<input type="tel" name="telefone" />
			</label>
			<label>
			E-mail:
			<input type="email" name="email" />
			</label>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>
	<?php
		$contatos = array();
		
		if(isset($_GET['nome'])){
			$_SESSION['contatos'][] = $_GET['nome'];
		}
		
		if(isset($_GET['telefone']))
		{
			$_SESSION['contatos'][] = $_GET['telefone'];
		}
		
		$contatos = array();
		
		if(isset($_SESSION['contatos']))
		{
			$contatos = $_SESSION['contatos'];
		}
		
		if(isset($_SESSION['contatos']))
		{
			$contatos = $_SESSION['contatos'];
		}
	?>
	<table>
		<tr>
			<th>Contatos</th>
		</tr>
		<?php foreach ($contatos as $contato): ?>
			<tr>
				<td><?php echo $contato ?></td>
				<td><?php echo $contato ?></td>
			</tr>
		<?php endforeach ?>
	</table>
</body>
</html>