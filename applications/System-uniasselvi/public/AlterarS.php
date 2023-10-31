<html> 
<head>
<link rel="stylesheet" type="text/css"  href="css/tecstyle.css" /> 
   <meta charset="UTF-8">
  <title>TecSystems</title>
</head>
<center>
<body background="img/fundo.jpg">
<nav id="menu">
	<ul>
	<li><a href="Cadastro_servico.php">Cadastrar serviços</a></li>
	<li><a href="Requisicoes.php">Requisições</a></li>
	<li><a href="MenuA.php">Voltar</a></li>
	</ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<fieldset><legend>Tabela de serviços:</legend>
<h1>Alterar serviços</h1>
<img id="foto" src="img/icone.png"/>
<table class="tabela">
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th colspan="2">Valores</th>
<th>Alterar</th>
<th>Excluir</th>
</tr>
</thead>
<?php
require_once 'conexao.php';
$result = mysqli_query($con,"select * from Servicos");
if($result){
	while($lin = mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo "<p></p>",$lin['id_ser'];?></td>
<td><?php echo "<p></p>",$lin['nome'];?></td>
<td><?php echo "<p></p>","R$".$lin['valor_loja']."\n"."na loja";?></td>
<td><?php echo "<p></p>","R$".$lin['valor_domicilio']."\n"."em casa";?></td>
<td><a href="Alterar.php?id=<?php echo $lin['id_ser']; ?>">Alterar</a></td>
<td><a href="excluir.php?id=<?php echo $lin['id_ser']; ?>">Excluir</a></td>
</tr>
</tbody>
<?php
}
}
?>
</table>	
</fieldset>
</body>
</center>
</html>