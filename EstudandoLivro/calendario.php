<?php
function linha()
{
	echo "
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	";
}
?>

<?php
function calendario()
{
	$dia = 1;
	$semana = array();
	
	while($dia <= 31){
		array_push($semana,$dia);
		
		if(count($semana) == 7){
			linha($semana);
			$semana = array();
		}
		
		$dia++;
	}
}
?>
<table border="1">
<tr>
<th>Dom</th>
<th>Seg</th>
<th>Ter</th>
<th>Qua</th>
<th>Qui</th>
<th>Sex</th>
<th>Sáb</th>
</tr>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
<?php linha(); ?>
</table>
