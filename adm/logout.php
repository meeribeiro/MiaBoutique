<?php
session_start();

// Remova a variável de sessão 'autenticado'
unset($_SESSION['autenticado']);

// Redirecione o usuário de volta para a página de login ou para onde desejar
header("Location: ../index.php");
?>