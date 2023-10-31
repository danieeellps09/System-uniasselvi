<html>
<head>
  <link rel="stylesheet" href="css/tecstyle.css" type="text/css">
  <meta charset="UTF-8">
  <title>Login do cliente</title>
</head>
<center><body background="img/fundo.jpg">
<nav id="menu">
  <ul>
    <li><a href="Solicitar.php" >Serviços</a></li>
     <li><a href="Login_adm.php">Login adm</a></li>
    <li><a href="index.php">Voltar</a></li>
  </ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<div class="Login cli">
  <fieldset>
	<h1>Login do cliente</h1>
  <img id="foto" src="img/login.jpg"/>
    <form method="post" action="sessao.php">
    	<fieldset class="nomargin"><legend> Usúario</legend><input type="text" name="usuario"/></fieldset></br>
        <fieldset class="nomargin"><legend>Senha</legend><input type="password" name="senha"/></fieldset></br>
        <input type="submit" value="Entrar">
      <a href="Cadastro.php"><input type="button" value="Cadastre-se!"></a>
    </form>
	</fieldset>
</div>
        </body></center>
</html>