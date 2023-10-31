 <?php
 
 session_start();
 require_once 'conexao.php';
 
 if (isset($_POST['usuario'])) {
     $u = $_POST['usuario'];
     $s = $_POST['senha'];
 
     if ($u == "" || $s == "") {
         echo "<script>alert('Nenhum campo pode estar vazio!')</script>";
         echo '<script>window.location.href="login.php";</script>';
     } else {
         $query = mysqli_query($con, "SELECT * from cliente where nome='$u' and senha='$s'") or die("<script>alert('Usuário não encontrado');</script>");
         $linha = mysqli_num_rows($query);
 
         if ($linha == 0) {
             echo "<script>alert('Usuário não encontrado!')</script>";
             echo '<script>window.location.href="login.php";</script>';
         } else {
             $row = mysqli_fetch_assoc($query);
             $id_cli = $row['ID_CLI'];
             $Nome = $row['Nome'];
 
             $_SESSION['id'] = $id_cli;
             $_SESSION['nome'] = $Nome;
             
             echo '<script>window.location.href="index.php";</script>';
         }
     }
 }
 ?>
 
        