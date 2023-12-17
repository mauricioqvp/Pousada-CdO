<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Global site tag (gtag.js) - Google AdWords: 1024126174 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-1024126174"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-1024126174');
</script>
<!-- Event snippet for responsivo_ciclo_do_ouro conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-1024126174/6GtCCJeBgnwQ3tmr6AM'});
</script>
<meta charset="utf-8">			
</head>
<body>
<?php
 
// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
//require("mail/class.phpmailer.php");

require_once("./mail/PHPMailerAutoload.php");
 
// Inicia a classe PHPMailer
$mail = new PHPMailer();
date_default_timezone_set('UTC');

/*Estou colocando aqui*/
// ---- Recebe dados ----
$nome=utf8_decode($_POST['nome']);
$email=utf8_decode($_POST['email']);
$datachegada=utf8_decode($_POST['datachegada']);
$datasaida=utf8_decode($_POST['datasaida']);
$telefone=utf8_decode($_POST['telefone']);
$nopessoas=utf8_decode($_POST['nopessoas']);
$textarea=utf8_decode($_POST['textarea']);
$dataenvio=date("d,M,Y");
	 
// ---- Monta mensagem ---
$msg .= "<h2>Pousada Ciclo do Ouro - em: $dataenvio </h2><hr>";
$msg .= "<h4>Ouro Preto - MG </h4>Tel.: (31) 3551-6804<br>Web site: www.pousadaciclodoouro.com.br<hr>";
$msg .= "<b>Nome:</b> $nome<br>";
$msg .= "<b>E-mail:</b> $email<br>";
$msg .= "<b>Data de Chegada:</b> $datachegada<br>";
$msg .= "<b>Data de Saida:</b> $datasaida<br>";
$msg .= "<b>Telefone:</b> $telefone<br>";
$msg .= "<b>Numero de pessoas:</b> $nopessoas<br>";
$msg .= "<b>Mensagem:</b> $textarea<br><hr>";
 
// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->IsSMTP(); // Define que a mensagem será SMTP
//$mail->Host = "mail.stepinformatica.com.br"; //"pluto.hmnoc.net"; //"mail.pousadaciclodoouro.com.br";  // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br) (????)
//$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
//$mail->Username = 'contato+pousadaciclodoouro.com.br'; // Usuário do servidor SMTP (endereço de email)
//$mail->Password = '123456'; // Senha do servidor SMTP (senha do email usado)
 

$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.pousadaciclodoouro.com.br"; //"pluto.hmnoc.net"; //"mail.pousadaciclodoouro.com.br";  // Endereço do servidor SMTP (caso queira utilizar a autenticação, utilize o host smtp.seudomínio.com.br) (????)
$mail->SMTPAuth = true; // Usar autenticação SMTP (obrigatório para smtp.seudomínio.com.br)
$mail->Username = 'contato@pousadaciclodoouro.com.br'; // Usuário do servidor SMTP (endereço de email)
$mail->Password = 'jane00pangea'; // Senha do servidor SMTP (senha do email usado)

// Y@x+v5QKW2sB

// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = $_POST['email']; //"seu@e-mail.com.br"; // Seu e-mail
$mail->Sender = $_POST['email']; //"seu@e-mail.com.br"; // Seu e-mail
$mail->FromName = $nome; //"Locaweb"; // Seu nome
 
// Define os destinatário(s)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->AddAddress('contato@pousadaciclodoouro.com.br', 'mauricioqvp@outlook.com');
//$mail->AddAddress('contato@pousadaciclodoouro.com.br');
$mail->AddCC('mauricioqvp@outlook.com', 'Ciclano'); // Copia
//$mail->AddBCC('fulano@dominio.com.br', 'Fulano da Silva'); // Cópia Oculta
 
// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
//$mail->CharSet = 'iso-8859-1'; // Charset da mensagem (opcional)
 
// Define a mensagem (Texto e Assunto)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->Subject  = "Mensagem de Hospede - PROVENIENTE DO NOVO SITE"; // Assunto da mensagem
$mail->Body = $msg;
$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n ';
//<IMG src="http://seudomínio.com.br/imagem.jpg" alt=":)"  class="wp-smiley"> ';
 
// Define os anexos (opcional)
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
//$mail->AddAttachment("/home/login/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();
 


// Exibe uma mensagem de resultado
if ($enviado) {
echo "E-mail enviado com sucesso!";
} else {
echo "Não foi possível enviar o e-mail.";
echo "Informações do erro: " . $mail->ErrorInfo;
}
 

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();
?>
</body>