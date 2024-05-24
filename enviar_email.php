<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["_replyto"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "gustavogtavb45@gmail.com"; // Substitua pelo seu endereço de e-mail

    $assunto = "Nova mensagem do formulário de contato";

    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    if (mail($destinatario, $assunto, $corpo_email)) {
        header("Location: obrigado.html"); // Redireciona para uma página de agradecimento
        exit();
    } else {
        echo "Erro ao enviar mensagem. Por favor, tente novamente mais tarde.";
    }
}
?>
