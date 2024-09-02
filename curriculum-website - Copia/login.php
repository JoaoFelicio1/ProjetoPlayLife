<?php
// Dados de login
$users = [
    'user1' => 'password1',
    'user2' => 'password2',
    // Adicione mais usuários aqui
];

// Recupera os dados do formulário
$username = $_POST['username'];
$password = $_POST['password'];

// Verifica se o usuário existe e a senha está correta
if (isset($users[$username]) && $users[$username] == $password) {
    header('Location: curriculum.php?user=' . urlencode($username));
    exit();
} else {
    echo 'Usuário ou senha incorretos. <a href="index.html">Tente novamente</a>';
}
?>
