<?php
//PEGA OS DADOS ENVIADOS PELO FORMULÁRIO 
$id = $_POST["id"]; 

require 'PHPMailerAutoload.php';

$email = new PHPMailer();

//$email->isSMTP(); // Define que a mensagem será SMTP
//$email->Host = "smtp.gmail.com"; // Endereço do servidor SMTP, altere para suas informações.
//$email->SMTPSecure = 'ssl';
//$email->SMTPAuth = true; // ativando a autenticação SMTP (obrigatório, não alterar)
//$email->Username = ''; // usuário de smtp Usuário do servidor SMTP (endereço de email), altere para suas informações. 
//$email->Password = ''; // Senha do servidor SMTP (senha do email usado), altere para suas informações
//$email->Port = 465; //Porta de envio de SMTP (obrigatório, não alterar) 


$email->From      = 'mauricioqvp@gmail.com'; // Endereço do Remetente
$email->FromName  = 'Fichas'; // Nome do Remetente
$email->Subject   = 'Ficha Bibliografica'; // Assunto
$email->Body      = 'Arquivo em anexo'; // Corpo do e-mail
$email->AddAddress( $id ); // Endereço do Destinatário

$caminho = 'arquivo/rapazes.jpg';
$email->addAttachment($caminho);

if(!$email->send()) {
    echo 'A mensagem não pode ser enviada.';
    echo 'Erro: ' . $email->ErrorInfo;
} else {
    echo 'A mensagem foi enviada com sucesso!';
}
?>