<html>
<head>
  <link rel="stylesheet" href="css/tecstyle.css" type="text/css">
  <meta charset="UTF-8">
  <title>Login do administrador</title>
</head>
<center><body background="img/fundo.jpg">
<nav id="menu">
  <ul>
    <li><a href="Solicitar.php" >Serviços</a></li>
    <li><a href="login.php">Login</a></li>
    <li><a href="index.php">Voltar</a></li>
  </ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<div class="Login adm">
  <fieldset>
	<h1>Login do administrador</h1>
  <img id="foto" src="img/adm.jpg"/>
    <form method="POST" action="login_adm.php" >
    <fieldset class="nomargin"><legend> Usúario</legend><input type="text" name="usuario"  /></fieldset></br>
        <fieldset class="nomargin"><legend> Senha</legend><input type="password" name="senha"  /></fieldset></br>
        <input type="submit" value="Entrar">
    </form>
	</fieldset>
</div>
     <?php
     require_once 'conexao.php';
        if(isset($_POST['usuario'])){
          $u = $_POST['usuario'];
          $s = $_POST['senha'];
          if($u=="" || $s==""){
            echo "<script>alert('Nenhum campo pode estar vazio!');</script>";
          }else{              
                $query = mysqli_query($con, "SELECT * from admin where login='$u' and senha='$s'") or die("<script>alert('Erro no sql');</script>");
                $linha = mysqli_num_rows($query);
                if($linha == 0){
                  echo "<script>alert('Usuário nao encontrado!');</script>";
                }else{
                  header("Location: MenuA.php");
                }       
        } 
        }
        ?>
</body></center>
</html>