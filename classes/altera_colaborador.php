<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$cargo = $_POST['cargo'];
	$num_squad = $_POST['num_squad'];
	
	$result_colaborador = "UPDATE tcolaborador SET codigo = '$codigo',  nome = '$nome', cargo = '$cargo', num_squad = '$num_squad' WHERE codigo = '$codigo'";
	
	$result_colaborador = mysqli_query($conexao, $result_colaborador);

	header('Location: ../colaboradores.php');
?>