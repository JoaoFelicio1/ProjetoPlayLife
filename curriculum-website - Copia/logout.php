<?php
// Inicia a sessão
session_start();

// Destrói todas as variáveis de sessão
$_SESSION = array();

// Se você usou um cookie de sessão, exclua-o
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Finalmente, destrói a sessão
session_destroy();

// Redireciona para a página de login
header('Location: index.html');
exit();
?>
