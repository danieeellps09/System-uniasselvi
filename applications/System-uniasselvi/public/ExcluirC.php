<?php
$sure = "<script>prompt('Você tem certeza? </br>1-Sim</br>2-Não');</script>";
require_once 'conexao.php';
$id = $_GET['id'];
mysqli_query($con,"Delete from cliente where ID_CLI = $id");
@mysqli_close($con);
header("Location: MenuA.php");
?>