<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $sobrenome = $_POST['sobrenome'];
  $email = $_POST['email'];
  $mensagem = $_POST['mensagem'];

  $destinatario = 'regianealmeidastor@gmail.com';

  $assunto = 'Mensagem de $nome';
  $corpo = "Nome: $nome $sobrenome\n\nE-mail: $email\n\nMensagem: $mensagem";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($destinatario, $assunto, $corpo, $headers)) {
    echo 'E-mail enviado com sucesso!';
  } else {
    echo 'Ocorreu um erro ao enviar o e-mail.';
  }
}
?>
