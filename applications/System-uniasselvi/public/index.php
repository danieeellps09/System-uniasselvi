<html>
<head>
<?php
require_once 'sessao.php';
?>
<link rel="stylesheet" type="text/css"  href="css/tecstyle.css" /> 
   <meta charset="UTF-8">
  <title>TecSystems</title>
</head>
<center>
<body background="img/fundo.jpg">
<nav id="menu">
	<ul>
		<li><a href="Solicitar.php">Serviços</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="breaker.php">Log out</a></li>
		<li><a href="Login_adm.php">Login adm</a></li>
	</ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<fieldset class="notop">
<legend>Exemplos de serviços:</legend>
<marquee>	
<img src="img/limpar-memoria.png" height="60px" width="100px">
<img src="img/a-profissao-do-futuro-2.jpg" height="60px" width="100px">
<img src="img/man-comp.jpg" height="60px" width="100px">
<img src="img/maxresdefault.jpg" height="60px" width="100px">
<img src="img/assistencia.jpg" height="60px" width="100px">
<img src="img/10.jpg" height="60px" width="100px">
<img src="img/ma.jpg" height="60px" width="100px">
</marquee>
</fieldset>
<fieldset class="notop"><legend>Usuário logado:</legend>
<label onclick="break()"><?php
if(!isset($_SESSION['id'])){
 	echo "Realize seu login!";
}else{
 	echo $_SESSION['nome'];
}
?>
</label>
</br>
</fieldset>
<div class="imgrodape"><legend>Nossos serviços são confiáveis</legend>
<img src="img/asstec.png" height="150px" width="150px">
</div>
</body>
</center>
</html>