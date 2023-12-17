<?php


$datachegada = $_POST["datachegada"];
$datasaida = $_POST["datasaida"];
$telefone = $_POST["telefone"];
$nopessoas = $_POST["nopessoas"];
$textarea = $_POST["textarea"];




if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $name = $_POST["destinatario"];

    $assunto = $_POST["assunto"];

    $teste = $_POST["mensagem"];

    /*
    $name = $datachegada;
    $assunto = $datasaida;
    $teste = $textarea;
    */


/*
    $name = $_POST["nome"];
    $email = $_POST["email"];
*/

    echo "=>", $datasaida;
    echo "->", $name,  "->", $assunto, "->", $teste;


    // Configuração de cabeçalho para o e-mail
    
    $headers = "From: contato@pousadaciclodoouro.com.br" . "\r\n";
    $headers .= "Reply-To: contato@pousadaciclodoouro.com.br" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    /*
    $headers = "From: mauricioqvp@outlook.com.br" . "\r\n";
    $headers .= "Reply-To: mauricioqvp@outlook.com.br" . "\r\n";
    
*/
    // Função mail() para enviar o e-mail
    /* $name, $email, $datachegada, $datasaida, $telefone, $nopessoas, $textarea */
    if (mail($name, $assunto, $teste)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o e-mail.";
    }
}

?>

