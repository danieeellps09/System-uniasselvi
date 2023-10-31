<html>
<head>
<marquee style="font-size: 1px;"><marquee direction="right">
</marquee></marquee>
<link rel="stylesheet" type="text/css"  href="css/tecstyle.css" /> 
   <meta charset="UTF-8">
  <title>Cadastro de serviços</title>
</head>
<center>
<body background="img/fundo.jpg">
<nav id="menu">
	<ul>
		<li><a href="AlterarS.php">Alterar serviços</a></li>
		<li><a href="Requisicoes.php">Requisições</a></li>
		<li><a href="MenuA.php">Voltar</a></li>
	</ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
		<fieldset>
		<h1>Cadastro de serviços</h1>
		<img id="foto" src="img/icone.png"/>
		<form action="Cadastro_servico.php" method="POST">
		<fieldset class="nomargin"><legend>Nome:</legend><input type="text" name="nome"></br></fieldset>
		<fieldset class="nomargin"><legend>Descrição:</legend><input type="text" name="desc"></br></fieldset>
		<fieldset class="nomargin"><legend>Valor na loja:</legend><input type="double" name="VL"></br></fieldset>
	
		
		</br><input type="submit" value="Cadastrar">	
	</form>
	</fieldset>
     <?php
     require_once 'conexao.php';
		if(isset($_POST['nome'])){
		$n = $_POST['nome'];
		$d = $_POST['desc'];
		$v = $_POST['VL'];
		$vd = $v + 20;
		if($n == "" ||$d == "" ||$v == 0 ||$vd == 0){
			echo "<script>alert('Nenhum campo pode estar vazio!');</script>";
		}else{
			$my = mysqli_query($con,"Insert into Servicos values (null,null, 1,'$n','$d','$v','$vd')");
	

			if($my){
			echo "<script>alert('Cadastrado com êxito!');</script>";
			
		}else{
			echo "<script>alert('Erro ao cadastrar!');</script>"; 
		}
		echo mysqli_error($con);
		@mysqli_close($con);
		}
}
		?>
</body>
</center>
</html>
