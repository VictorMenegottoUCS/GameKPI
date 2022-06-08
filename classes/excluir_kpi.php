<?php
	include("conexao.php");

	if(!empty($_GET['codigo'])){
		$codigo = $_GET['codigo'];

		$consultaCodigo = "SELECT * FROM tkpi WHERE codigo = $codigo";
		$conCodigo = mysqli_query($conexao, $consultaCodigo);

		if($conCodigo->num_rows > 0){
			$result_kpi = "DELETE FROM tkpi WHERE codigo = '$codigo'";
	
			$result_kpi = mysqli_query($conexao, $result_kpi);	
		}
	}

	header('Location: ../kpis.php');
?>