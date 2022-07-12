<?php
	include("conexao.php");

	if(!empty($_GET['codigo'])){
        $codigo = $_GET['codigo'];

		$consultaCodigo = "SELECT * FROM tpontuacao WHERE codigo = $codigo";

		$conCodigo = mysqli_query($conexao, $consultaCodigo);

		if($conCodigo->num_rows > 0){
			$result_pontuacao = "DELETE FROM tpontuacao WHERE codigo = '$codigo'";
	
			$result_pontuacao = mysqli_query($conexao, $result_pontuacao);	
		}
	}

	header('Location: ../pontuacao.php');
?>