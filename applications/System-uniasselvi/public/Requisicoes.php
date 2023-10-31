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
	<li><a href="AlterarS.php">Alterar serviços</a></li>
	<li><a href="MenuA.php">Voltar</a></li>	
	</ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>    
<fieldset><legend>Tabela de requisições:</legend>
<h1>Requisições de clientes</h1>
<img id="foto" src="img/req.png"/>
<table class="tabela">
<thead>
<tr>
<th>ID</th>
<th>Serviço</th>
<th>Cliente</th>
<th>Endereço</th>
<th>Excluir</th>
</tr>
</thead>
<?php
require_once 'conexao.php';  
$result = mysqli_query($con, "select * from requisiito");
if($result){
	while($lin = mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo "<p></p>",$lin['id_req'];?></td>
<td><?php echo "<p></p>",$lin['servico'];?></td>
<td><?php echo "<p></p>",$lin['cliente'];?></td>
<td><?php echo "<p></p>",$lin['endereco'];?></td>
<td><a href="ExcluirR.php?id=<?php echo $lin['id_req']; ?>">Excluir</a></td>
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