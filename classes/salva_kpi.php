<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$descricao = $_POST['descricao'];
	$pontos = $_POST['pontos'];
	$meta = $_POST['meta'];
	
	$result_kpi = "INSERT INTO tkpi(codigo, descricao, pontos, meta) VALUES('$codigo','$descricao','$pontos','$meta')";
	
	$result_kpi = mysqli_query($conexao, $result_kpi);

	header('Location: ../kpis.php');
?>