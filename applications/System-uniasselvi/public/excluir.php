<?php
require_once 'conexao.php';
$id = $_GET['id'];
mysqli_query($con,"Delete from Servicos where id_ser = $id");
@mysqli_close($con);
header("Location: AlterarS.php");
?>