<html>

<head>
	<?php
	require_once 'conexao.php';
	?>
	<link rel="stylesheet" type="text/css" href="css/tecstyle.css" />
	<meta charset="UTF-8">
	<title>TecSystems</title>
</head>
<center>

	<body background="img/fundo.jpg">
		<nav id="menu">
			<ul>
				<li><a href="Cadastro_servico.php">Cadastrar serviços</a></li>
				<li><a href="AlterarS.php">Voltar</a></li>
			</ul>
		</nav>
		<a href="index.php"><img src="img/tec.png"></a>
		<fieldset>
			<legend>Tabela de dados a serem alterados</legend>
			<h1>Alterar serviços</h1>
			<form action="AlterarSer.php" method="POST">
				<?php
				$idAlt = $_GET['id'];
				$result = mysqli_query($con, "Select * from Servicos where id_ser = '$idAlt'");
				mysqli_error($con);
				if ($result) {
					while ($lin = mysqli_fetch_assoc($result)) {
				?>
						<fieldset class="nomargin">
							<legend>ID:</legend><input type="text" readonly="true" name="id_ser" value="<?php echo $lin['id_ser']; ?>"></br>
						</fieldset>
						<fieldset class="nomargin">
							<legend>Nome:</legend><input type="text" id="Nome" name="Nome" value="<?php echo $lin['nome']; ?>"></br>
						</fieldset>
						<fieldset class="nomargin">
							<legend>Descrição:</legend><input type="text" id="Desc" name="Desc" value="<?php echo $lin['descricao']; ?>"></br>
						</fieldset>
						<fieldset class="nomargin">
							<legend>Valor:</legend><input type="number" id="Valor" name="Valor" value="<?php echo $lin['valor_loja']; ?>"></br>
						</fieldset>
				<?php
					}
				}
				?>
				<input type="submit" value="Alterar">
			</form>
		</fieldset>
	</body>
</center>

</html>