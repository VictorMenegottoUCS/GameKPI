<?php
	include_once('conexao.php');

	$numero = $_POST['numero'];
	$nome = $_POST['nome'];
	$sprint = $_POST['sprint'];
	
	$result_squad = "UPDATE tsquad SET numero = '$numero',  nome = '$nome', sprint = '$sprint' WHERE numero = '$numero'";
	
	$result_squad = mysqli_query($conexao, $result_squad);

	header('Location: ../squads.php');
?>