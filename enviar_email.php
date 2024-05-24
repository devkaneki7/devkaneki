<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Endereço de e-mail para onde a mensagem será enviada
    $destinatario = "devkaneki777@gmail.com";

    // Assunto do e-mail
    $assunto = "Nova mensagem do formulário de contato";

    // Corpo do e-mail
    $corpo_email = "Nome: $nome\n";
    $corpo_email .= "Email: $email\n\n";
    $corpo_email .= "Mensagem:\n$mensagem";

    // Enviar e-mail
    if (mail($destinatario, $assunto, $corpo_email)) {
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem. Por favor, tente novamente mais tarde.');</script>";
    }
}
?>
