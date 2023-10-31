<?php
require_once 'conexao.php';
$id = $_GET['id'];
mysqli_query($con,"Delete from requisiito where id_req = $id");
@mysqli_close($con);
header("Location: Requisicoes.php");
?>