<?php

	include("classes/conexao.php");

	$sprint = 1;
	$nome = '';
	$pontos = '';
	$colocacao = 0;

	$consulta = "SELECT nome, SUM(pontos) AS pontos FROM tpontuacao INNER JOIN tsquad ON tsquad.numero = tpontuacao.num_squad WHERE sprint = $sprint GROUP BY nome ORDER BY pontos DESC";
	$con = mysqli_query($conexao, $consulta) or die($mysqli->error);

	if(!empty($_GET['sprint'])){
		$sprint = $_GET['sprint'];

		$consultaNumero = "SELECT nome, SUM(pontos) AS pontos FROM tpontuacao INNER JOIN tsquad ON tsquad.numero = tpontuacao.num_squad WHERE sprint = $sprint GROUP BY nome ORDER BY pontos DESC";
		$conNumero = mysqli_query($conexao, $consultaNumero);

		if($conNumero->num_rows > 0){
			while($squad = $conNumero->fetch_array()){
				$sprint = $sprint;
				$nome = $squad['nome'];
				$pontos = $squad['pontos'];
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

	<title>Ranking</title>
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
			<a href="sobre.php"><div class="link">Sobre</div></a>
		</nav>
	</div>

	<div id="formulario">
		<div class="mb-3">
			<form method="POST" action="#">
				<label for="sprint" class="form-label" id="lblnum">Número da Sprint:</label>
	  			<input type="text" class="form-control" id="sprint" name="sprint" value="<?php echo $sprint ?>">

	  			<input type="hidden" name="sprintH" value="<?php echo $sprint ?>">
	  			<button type="submit" class="btn btn-success" id="btconfirmar" href='ranking.php?sprint=<?php echo $_POST['sprint']; ?>'>Consultar</button>
	  		</form>
		</div>
	</div>

	<div id="grid">
		<table border="1">
			<thead>
				<tr>
					<th>Colocação</th>
					<th>Squad</th>
					<th>Pontos</th>
				</tr>
			</thead>
			<?php while($dado = $con->fetch_array()){ ?>
			<tr>
				<td><?php echo $colocacao+1?></td>
				<?php $colocacao = $colocacao + 1;?>
				<td><?php echo $dado["nome"]; ?></td>
				<td><?php echo $dado["pontos"]; ?></td>
			</tr>
			<?php } ?> 			
		</table>
	</div>
</div>
</body>

</html>