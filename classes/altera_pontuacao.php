<?php
	include_once('conexao.php');

    $codigo = $_POST['codigo'];
	$num_squad = $_POST['num_squad'];
	$codigo_kpi = $_POST['codigo_kpi'];
	$pontos = $_POST['pontos'];
    
	$result_pontuacao = "UPDATE tpontuacao SET num_squad = '$num_squad',  codigo_kpi = '$codigo_kpi', pontos = '$pontos' WHERE codigo = '$codigo'";
	
	$result_pontuacao = mysqli_query($conexao, $result_pontuacao);

	header('Location: ../pontuacao.php');
?>