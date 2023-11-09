<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Verificando se o nome foi preenchido
    if (empty($_POST["nome"])) {
        echo "O campo Nome é obrigatório.";
    } else {
        $nome = $_POST["nome"];
        echo "Nome: " . $nome . "<br>";
    }

    // Verificando se o email é válido
    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST["email"];
        echo "E-mail: " . $email . "<br>";
    } else {
        echo "E-mail inválido.<br>";
    }

    // A senha tá sem validação, mas era bom vocês darem uma olhada e tentar fazer

    // Tá verificando se o Termos e condições foram aceitados
    if (isset($_POST["termos"])) {
        echo "Você aceitou os Termos e Condições.<br>";
    } else {
        echo "Você deve aceitar os Termos e Condições.<br>";
    }
} else {
    echo "O formulário não foi enviado corretamente.";
}
?>
