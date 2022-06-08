<?php
	include_once('conexao.php');

	$codigo = $_POST['codigo'];
	$descricao = $_POST['descricao'];
	$pontos = $_POST['pontos'];
	$meta = $_POST['meta'];
	
	$result_kpi = "UPDATE tkpi SET codigo = '$codigo',  descricao = '$descricao', pontos = '$pontos',  meta = '$meta' WHERE codigo = '$codigo'";
	
	$result_kpi = mysqli_query($conexao, $result_kpi);

	header('Location: ../kpis.php');
?>