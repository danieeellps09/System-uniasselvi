<html>
<head>
  <link rel="stylesheet" href="css/tecstyle.css" type="text/css">
  <meta charset="UTF-8">
  <title>Solicitar</title>
<?php
  require_once 'sessao.php';
  if(!isset($_SESSION['id'])){
    echo "<script>alert('Realize seu login para solicitar nossos serviços!');</script>";
    echo "<script> window.location=\"index.php\"</script>";
  }else{
?>
</head>
<center>
<body background="img/fundo.jpg">
	 <nav id="menu">
  <ul>
    <li><a href="index.php">Voltar</a></li>
    <li><a href="breaker.php">Log out</a></li>
  </ul>
</nav>
<a href="index.php"><img src="img/tec.png"></a>
<fieldset class="notop">
    <h1>Solicitar serviços</h1>
    <form action="Solicitar.php" method="POST">
    <table class="tabela">
    <thead>
        <tr>
            <th>Nome:</th>
            <th colspan="2">Valores:</th>
            
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
<td><?php echo "<p></p>",$lin['nome'];?></td>
<td><?php echo "<p></p>","R$".$lin['valor_loja']."\n"."na loja";?></td>
<td><?php echo "<p></p>","R$".$lin['valor_domicilio']."\n"."em casa";?></td>
</tr>
</tbody>
<?php
}
}
?>
    </table>
     <fieldset class="nomargin"><legend>Usuário logado:</legend>
<label>
<?php echo $_SESSION['nome']; ?>
</label></br>
</fieldset>
<label>Serviço:</label><input type="text" name="servico">
<label>Endereço:</label><input type="text" name="endereco">
<input type="submit" value="Solicitar">
 </fieldset>
<?php

if(isset($_POST['servico'])){
$nome = $_SESSION['nome'];
$ser = $_POST['servico'];
$end = $_POST['endereco'];
$cli = mysqli_query($con,"select * from cliente where nome = '$nome'");

  $query = mysqli_query($con,"SELECT * from Servicos where nome='$ser'") or die("<script>alert('Erro no sql );</script>");
                $linha = mysqli_num_rows($query);
                $linha3 = mysqli_num_rows($cli);
                if($linha == 0){
                  echo "<script>alert('Serviço não encontrado! Seja preciso ao digitar!')</script>";
                }else{

                    $insertR = mysqli_query($con,"insert into requisiito values('0','$ser','$nome','$end')");
                    $error =  mysqli_error($con);
                    if($insertR){
                      echo "<script>alert('Serviço solicitado com sucesso! Cliente: $nome')</script>";
                    }else{
                       echo "<script>alert('Erro ao solicitar! )</script>";
                       echo $error;
                      
                    }
                  }
                }
              }
?>
</form>
</body>
</center>
</html>