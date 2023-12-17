<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="css/treino.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
  $nome=$_POST['nome'];
$email=$_POST['email'];
$datachegada=$_POST['datachegada'];
$datasaida=$_POST['datasaida'];
			
// ---- Monta mensagem ---
$msg .= "<h2>Pousada Ciclo do Ouro - CELULAR - em: $dataenvio </h2><hr>";
$msg .= "<h4>Ouro Preto - MG </h4>Tel.: (31) 3551-6804<br>Web site: www.pousadaciclodouro.com.br<hr>";
$msg .= "<b>Nome:</b> $nome<br>";
$msg .= "<b>E-mail:</b> $email<br>";
$msg .= "<b>Data de Chegada:</b> $datachegada<br>";
$msg .= "<b>Data de Saida:</b> $datasaida<br>";
$msg .= "<b>Telefone:</b> $telefone<br>";
$msg .= "<b>Numero de pessoas:</b> $nopessoas<br>";
$msg .= "<b>Mensagem:</b> $textarea<br><hr>";
			
echo $msg;
?>
</body>
</html>
