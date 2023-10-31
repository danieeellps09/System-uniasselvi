<?php
require_once 'sessao.php';
unset($_SESSION['id']);
unset($_SESSION['nome']);

session_destroy();
echo '<script>window.location.href="index.php";</script>';
?>