<?php
# @Author: Milton Higaki <higaki>
# @Date:   Saturday, September 5th 2020, 8:50:03 pm
# @Email:  milton.higaki@gmail.com
# @Last modified by:   higaki
# @Last modified time: Saturday, September 5th 2020, 8:50:03 pm
# @Copyright: © 2020 ARKA FILMES - Desenvolvido por MNH


// $mail_host = "contato@arkafilmes.com.br";
$mail_host = "webmaster@arkafilmes.com.br";
$mail_title = "[ARKA Filmes] Contato pelo site";

define("MAIL_HOST", $mail_host);
define("MAIL_TITLE", $mail_title);

$name = "";
$email_from = "";
$message = "";
$phone = "";
$mail_body = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $mail_body .= "<h3>Nome: </h3><p>" . $name . "</p>";
}

if (isset($_POST['email'])) {
    $email_from = $_POST['email'];
    $mail_body .= "<h3>Email: </h3><p>" . $email_from . "</p>";
}

if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    $mail_body .= "<h3>Telefone: </h3><p>" . $phone . "</p>";
}

if (isset($_POST['message'])) {
    $message = nl2br($_POST['message']);
    $mail_body .= "<h3>Mensagem: </h3><p>" . $message . "</p>";
}


if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) ){
    $headers = "From: $email_from\nMIME-Version: 1.0\nContent-type: text/html; charset=iso-8859-1\n";
    if( mail($mail_host, $mail_title, $mail_body, $headers) ) {
      $serialized_data = '{"type":1, "message":"Formulário de contato enviado com sucesso. Obrigado, em breve entrarei em contato!"}';
      echo $serialized_data;
    } else {
      $serialized_data = '{"type":0, "message":"Falha no formulário de contato. Por favor, envie novamente mais tarde!"}';
      echo $serialized_data;
    }
};

?>
