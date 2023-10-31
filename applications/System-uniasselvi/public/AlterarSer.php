<?php
require_once 'conexao.php';
$id = $_POST['id_ser'];
$nome = $_POST['Nome'];
$desc = $_POST['Desc'];
$valor = $_POST['Valor'];
$valordom = $valor + 20;
$result = mysqli_query($con,"update Servicos set nome='$nome',descricao='$desc',valor_loja='$valor', valor_domicilio='$valordom' where id_ser = '$id'");
if (!$result) {
    echo "Erro na consulta: " . mysqli_error($con);
} else {
    
    echo "<script>alert('Alterado com êxito!');</script>";
    header("Location: AlterarS.php");
}


?>