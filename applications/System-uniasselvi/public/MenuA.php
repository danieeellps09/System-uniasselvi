<html>
<head>
<?php
require_once 'conexao.php';
?>
<link rel="stylesheet" type="text/css"  href="css/tecstyle.css" /> 
   <meta charset="UTF-8">
  <title>Menu administrativo</title>
</head>
<center>
<body background="img/fundo.jpg">
<nav id="menu">
	<ul>
	<li><a href="Cadastro_servico.php">Cadastrar serviços</a></li>
	<li><a href="AlterarS.php">Alterar serviços</a></li>
	<li><a href="Requisicoes.php">Requisições</a></li>
	<li><a href="breaker.php">Voltar</a></li>	
	</ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<form action="MenuA.php" method="POST">
<fieldset class="Ser">
<legend>Serviços no banco:</legend>
<div>
<input type="text" name="pesquisa" placeholder="Buscar pelo nome..."><input type="submit" value="Buscar"></br>
<table class="tabela">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Valor</th>
</tr>
</thead>
<?php
if(isset($_POST['pesquisa'])){
$pesq = $_POST['pesquisa'];
$result = mysqli_query($con,"select * from Servicos where nome like '$pesq'");
if($result){
	while($lin = mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo "<p></p>",$lin['id_ser'];?></td>
<td><?php echo "<p></p>",$lin['nome'];?></td>
<td><?php echo "<p></p>",$lin['valor_loja'];?></td>
</tr>
</tbody>
<?php
}
}
}
?>
</table>	
</div>
</fieldset>
<fieldset class="Cli">
<legend>Clientes no banco:</legend>
<div>
<table class="tabela">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Endereço</th>
<th>Excluir</th>
</tr>
</thead>
<?php
$result = mysqli_query($con,"select * from cliente");
if($result){
	while($lin = mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo "<p></p>",$lin['ID_CLI'];?></td>
<td><?php echo "<p></p>",$lin['Nome'];?></td>
<td><?php echo "<p></p>",$lin['Endereco'];?></td>
<td><a href="ExcluirC.php?id=<?php echo $lin['ID_CLI']; ?>">Excluir</a></td>
</tr>
</tbody>
<?php
}
}
?>
</table>	
</div>
</fieldset>
</form>
</body>
</center>
</html>