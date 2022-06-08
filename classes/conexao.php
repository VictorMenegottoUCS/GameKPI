<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$nome = "gameficacao";
	
	//Criar a conexão
	$conexao = new mysqli($servidor, $usuario, $senha, $nome);

	/*
	if($conexao->connect_errno)
	{
		echo "Erro de conexão!";
	}
	else
	{
		echo "Conexão ok!";
	}
	*/
?>