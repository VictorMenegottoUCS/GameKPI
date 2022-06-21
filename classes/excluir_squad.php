<?php
	include("conexao.php");

	if(!empty($_GET['numero'])){
		$numero = $_GET['numero'];

		$consultaNumero = "SELECT * FROM tsquad WHERE numero = $numero";
		$conNumero = mysqli_query($conexao, $consultaNumero);

		if($conNumero->num_rows > 0){
			$result_squad = "DELETE FROM tsquad WHERE numero = '$numero'";
	
			$result_squad = mysqli_query($conexao, $result_squad);	
		}
	}

	header('Location: ../squads.php');
?>