<?php
	include_once('conexao.php');

	$numero = $_POST['numero'];
	$nome = $_POST['nome'];
	$sprint = $_POST['sprint'];
	
	$result_squad = "INSERT INTO tsquad(numero, nome, sprint) VALUES('$numero','$nome','$sprint')";
	
	$result_squad = mysqli_query($conexao, $result_squad);

	header('Location: ../squads.php');
?>