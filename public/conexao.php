<?php
$server = '172.29.0.3:3306';
$base = 'tecsystems';
$usuario = 'root';
$senha = 'root';
$con = mysqli_connect($server, $usuario, $senha);

if (!$con) {
    die('Erro ao conectar-se: ' . mysqli_connect_error());
}

$db = mysqli_select_db($con, $base);
mysqli_set_charset($con, 'utf8');


if ($con) {
    echo "<script>console.log('Conectado!');</script>";
} else {
    echo "Erro ao conectar-se!";
}

