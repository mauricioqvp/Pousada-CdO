<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//require("mail/class.phpmailer.php");

require_once("./mail/PHPMailerAutoload.php");


echo "Seu cadastro foi efetuado. ";
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();

/*Estou colocando aqui*/
// ---- Recebe dados ----
$email=$_POST['email'];

// ---- Monta mensagem ---
$msg .= "<h2>Pousada Ciclo do Ouro</h2><hr>";
$msg .= "<h4>Ouro Preto - MG </h4>Tel.: (31) 3551-6804<br>Web site: www.pousadaciclodoouro.com.br<hr>";
$msg .= "Solicito cadastro de meu e-mail em sua lista de newsletter: <br>";
$msg .= "<b>E-mail:</b> $email<br>";


 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->IsSMTP(); // Define que a mensagem será SMTP
//$mail->Host = "mail.stepinformatica.com.br"; //"pluto.hmnoc.net"; //"mail.pousadaciclodoouro.com.br";  // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br) (????)
//$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
//$mail->Username = 'contato+pousadaciclodoouro.com.br'; // Usuário do servidor SMTP (endereço de email)
//$mail->Password = '123456'; // Senha do servidor SMTP (senha do email usado)
 

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.stepinformatica.com.br"; //"pluto.hmnoc.net"; //"mail.pousadaciclodoouro.com.br";  // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br) (????)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'contato@pousadaciclodoouro.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = '4Hdq7Awd13'; // Senha do servidor SMTP (senha do email usado) 'jane00pangea'



// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $_POST['email']; //"seu@e-mail.com.br"; // Seu e-mail
$mail->Sender = $_POST['email']; //"seu@e-mail.com.br"; // Seu e-mail
$mail->FromName = $nome; //"Locaweb"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@pousadaciclodoouro.com.br', 'Email do site');
//$mail->AddAddress('contato@pousadaciclodoouro.com.br');
//$mail->AddCC('ciclano@site.net', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem de Hospede - PROVENIENTE SITE"; // Assunto da mensagem
$mail->Body = $msg;
$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano!';
//' \r\n <IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo
 
// Envia o e-mail
$enviado = $mail->Send();
 
// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
 
// Exibe uma mensagem de resultado
if ($enviado) {
echo "<br>E-mail enviado com sucesso!";
} else {
echo "Não foi possível enviar o e-mail.
 
";
echo "Informações do erro: 
" . $mail->ErrorInfo;
}
 
?>