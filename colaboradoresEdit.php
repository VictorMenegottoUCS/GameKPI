<?php

	include("classes/conexao.php");

	$codigo = '';
	$nome = '';
	$cargo = '';

	$consulta = "SELECT * FROM tcolaborador";
	$con = mysqli_query($conexao, $consulta) or die($mysqli->error);

	if(!empty($_GET['codigo'])){
		$codigo = $_GET['codigo'];

		$consultaCodigo = "SELECT * FROM tcolaborador WHERE codigo = $codigo";
		$conCodigo = mysqli_query($conexao, $consultaCodigo);

		if($conCodigo->num_rows > 0){
			while($colab = $conCodigo->fetch_array()){
				$codigo = $colab['codigo'];
				$nome = $colab['nome'];
				$cargo = $colab['cargo'];
			}
		}
		else{
			header('Location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="estilos/estilo.css" rel="stylesheet">
	<link rel="icon" type="imagem/png" href="imagens/iconeguia.png" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>Cadastro de colaboradores</title>
</head>

<body>
	<input type="checkbox" id="check">
	<label for="check" id="icone"><img src="https://i.imgur.com/RWHvwPE.png"/></label>
	<div class="barra">
		<nav>
			<a href="index.php"><div class="link">Home</div></a>
			<a href="colaboradores.php"><div class="link">Colaboradores</div></a>
			<a href="kpis.php"><div class="link">KPI's</div></a>
			<a href="squads.php"><div class="link">Squads</div></a>
			<a href="pontuacao.php"><div class="link">Pontuação</div></a>
			<a href="ranking.php"><div class="link">Ranking</div></a>
			<a href="suporte.php"><div class="link">Suporte</div></a>
		</nav>
	</div>

	<div id="formulario">
		<div class="mb-3">
			<form method="POST" action="classes/altera_colaborador.php">
				<label for="colcod" class="form-label" id="lblcod">Código:</label>
	  			<input type="text" class="form-control" id="colcod" name="codigo" value="<?php echo $codigo ?>">

	  			<label for="colnom" class="form-label" id="lblnom">Nome:</label>
	  			<input type="text" class="form-control" id="colnom" name="nome" value="<?php echo $nome ?>"> 

	  			<label for="colcar" class="form-label" id="lblcar">Cargo:</label>
	  			<input type="text" class="form-control" id="colcar" name="cargo" value="<?php echo $cargo ?>">
	  			
	  			<input type="hidden" name="codigoH" value="<?php echo $codigo ?>">
	  			<button type="submit" class="btn btn-success" id="btUpdate">Confirmar</button>
	  		</form>
		</div>
	</div>

	<div id="grid">
		<table border="1">
			<thead>
				<tr>
					<th>Código</th>
					<th>Nome</th>
					<th>Cargo</th>
					<th>Ações</th>
				</tr>
			</thead>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php echo $dado["codigo"]; ?></td>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["cargo"]; ?></td>
				<td><a class='btn btn-sm btn-primary' href='colaboradoresEdit.php?codigo=<?php echo $dado['codigo']; ?>'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
		  					<path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
		  				</svg>
					</a>	
					<a class='btn btn-sm btn-danger' href='classes/excluir_colaborador.php?codigo=<?php echo $dado['codigo']; ?>'>
						<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
	  						<path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
	  						<path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
						</svg>
					</a>
				</td>
			</tr>
			<?php } ?> 			
		</table>
	</div>
</div>

</body>

</html>	