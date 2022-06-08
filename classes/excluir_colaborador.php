<?php
	include("conexao.php");

	if(!empty($_GET['codigo'])){
		$codigo = $_GET['codigo'];

		$consultaCodigo = "SELECT * FROM tcolaborador WHERE codigo = $codigo";
		$conCodigo = mysqli_query($conexao, $consultaCodigo);

		if($conCodigo->num_rows > 0){
			$result_colaborador = "DELETE FROM tcolaborador WHERE codigo = '$codigo'";
	
			$result_colaborador = mysqli_query($conexao, $result_colaborador);	
		}
	}

	header('Location: ../colaboradores.php');
?>