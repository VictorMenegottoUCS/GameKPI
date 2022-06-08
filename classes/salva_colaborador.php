<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$nome = $_POST['nome'];
	$cargo = $_POST['cargo'];
	
	$result_colaborador = "INSERT INTO tcolaborador(codigo, nome, cargo) VALUES('$codigo','$nome','$cargo')";
	
	$result_colaborador = mysqli_query($conexao, $result_colaborador);

	header('Location: ../colaboradores.php');
?>