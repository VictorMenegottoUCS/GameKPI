<?php
	include_once('conexao.php');

	$num_squad = $_POST['num_squad'];
	$codigo_kpi = $_POST['codigo_kpi'];
	$pontos = $_POST['pontos'];
	
	$result_pontuacao = "INSERT INTO tpontuacao(num_squad, codigo_kpi, pontos) VALUES('$num_squad','$codigo_kpi','$pontos')";
	
	$result_pontuacao = mysqli_query($conexao, $result_pontuacao);

	header('Location: ../pontuacao.php');
?>