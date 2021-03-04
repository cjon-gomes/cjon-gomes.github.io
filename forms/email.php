<?php
date_default_timezone_set('America/Sao_Paulo');
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$nome = $_POST['name'];
$email = $_POST['email'];
$assunto = $_POST['subject'];
$mensagem = $_POST['message'];
if($nome && $mensagem){
    $mail = new PHPMailer();
	
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'jonathan3xx@gmail.com';
	$mail->Password = 'Jonathan1#';
	$mail->Port = 587;

	$mail->setFrom('jonathan3xx@gmail.com');
	$mail->addAddress('jonathan3xx@gmail.com');
	

	$mail->isHTML(true);
	$mail->Subject = $assunto;
	$mail->Body = "Nome:{$nome}<br>
                    Email:{$email}<br>
                    Assunto:{$assunto}<br>
                    Mensagem:{$mensagem}";
	

	if($mail->send()) {
		echo 'Email enviado com sucesso';
        $nome = "";
        $email = "";
        $assunto = "";
        $mensagem = "";

	} else {
		echo 'Email nao enviado';
	}
}

 