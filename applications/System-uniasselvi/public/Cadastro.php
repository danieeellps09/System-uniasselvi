<html>
<head>
  <link rel="stylesheet" href="css/tecstyle.css" type="text/css">
  <meta charset="UTF-8">
  <title>Cadastro</title>
</head>
<center><body background="img/fundo.jpg">
<nav id="menu">
  <ul>
    <li><a href="Solicitar.php" >Serviços</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="Login_adm.php">Login adm</a></li>
  </ul>
</nav>
<div class="Cadastro">
  <fieldset>
	<h1>Cadastro de clientes</h1>
    <form method="post" action="Cadastro.php">
    	<fieldset class="nomargin"><legend>Usuario:</legend><input type="text" name="usuario"/></br></fieldset>
       <fieldset class="nomargin"><legend>Senha:</legend><input type="password" name="senha"/></br></fieldset>
       <fieldset class="nomargin"><legend>Cidade:</legend><input type="text" name="cidade"/></br></fieldset>
       <fieldset class="nomargin"><legend>Endereço:</legend><input type="text" name="endereco"/></br></fieldset>
       <fieldset class="nomargin"><legend>CPF:</legend><input type="text" name="cpf" id="campoCpf"/></br></fieldset>
        <input type="submit" value="Cadastrar">
        <a href="login.php"><input type="button" value="Sair"></a></br>
        <a href="Cadastro.php"><input type="button" value="Limpar campos"></a>
    </form>
	</fieldset>
</div>
        <?php
        require_once 'conexao.php';
        if(isset($_POST['usuario'])){
          $u = $_POST['usuario'];
          $s = $_POST['senha'];
          $c = $_POST['cidade'];
          $e = $_POST['endereco'];
          $cpf = $_POST['cpf'];
          if($u=="" || $s=="" || $c=="" || $e=="" || $cpf = ""){
            echo "Nenhum campo pode estar vazio!";
          }else{
            mysqli_query($con,"Insert into cliente values(null,'$cpf','$c','$e','$u','$s')");
            @mysqli_close($con);
            echo "<script>alert('Cadastrado com êxito!');</script>";
            echo "<script> window.location=\"login.php\"</script>";
          } 
        }
        ?>
</body>
</center>
</html>