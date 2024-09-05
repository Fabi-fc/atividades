<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = intval($_POST['idade']);

    if ($idade >= 18) {
        echo "Cadastro permitido.";
    } else {
        echo "Você não pode se cadastrar, pois é menor de 18 anos.";
    }
}
?>

<form method="post">
    Idade: <input type="number" name="idade" required>
    <input type="submit" value="Enviar">
</form>
