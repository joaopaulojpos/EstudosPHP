<?php
require_once "ListarDisciplinas.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Cadastro de Disciplinas</title>
<meta charset="utf-8">
</head>
<body>

<form name="cadastro" action="Disciplina.php" method="POST">
<fieldset>
<legend>Inserir Disciplinas</legend>
Nome da Disciplina: <input type="text" id="Nomedis" name="Nomedis" required autofocus><br /><br />
Nome do Professor: <input type="text" id="Professor" name="Professor" required ><br /><br />
<input type="submit" name="enviar" value="ENVIAR">
</fieldset>
</form>
<p>&nbsp;</p>

<table>
<?php foreach($lista as $linha): ?>
<tr>
	<td><?php echo $linha['nome']; ?></td><td><?php echo $linha['professor']; ?></td>
</tr>
<?php endforeach;?>
</table>

<!--<form name="listaDisciplina" action="ListarDisciplinas.php" method="POST">
<input type="submit" name="listar" value="LISTAR DISCIPLINAS">
</form>-->

</body>
</html>