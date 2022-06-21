<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$cargo = $_POST['cargo'];
	$num_squad = $_POST['num_squad'];
	
	$result_colaborador = "INSERT INTO tcolaborador(codigo, nome, cargo, num_squad) VALUES('$codigo','$nome','$cargo','$num_squad')";
	
	$result_colaborador = mysqli_query($conexao, $result_colaborador);

	header('Location: ../colaboradores.php');
?>