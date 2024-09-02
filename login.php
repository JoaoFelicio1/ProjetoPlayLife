<?php
session_start(); // Inicia a sessão

// Dados de login
$users = [
    'teste' => '1234',  // Usuário e senha que você especificou
    // Adicione mais usuários aqui
];

// Recupera os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica se o usuário existe e a senha está correta
if (isset($users[$username]) && $users[$username] == $password) {
    $_SESSION['username'] = $username; // Salva o usuário na sessão
    header('Location: curriculum.php?user=' . urlencode($username));
    exit();
} else {
    echo 'Usuário ou senha incorretos. <a href="index.html">Tente novamente</a>';
}
?>
