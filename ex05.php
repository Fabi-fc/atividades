<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    if ($usuario == "admin" && $senha == "1234") {
        echo "Login bem-sucedido";
    } else {
        echo "Login ou senha incorretos";
    }
}
?>

<form method="post">
    Usuário: <input type="text" name="usuario" required><br>
    Senha: <input type="password" name="senha" required><br>
    <input type="submit" value="Login">
</form>
