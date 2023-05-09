<?php
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendMail($id,$email){
    $mail = new PHPMailer();
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.titan.email";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "no-reply@jaspueblasur2022.com";
    $mail->Password = "8AMzxE7CNmc8Vsc";
    $mail->SetFrom("no-reply@jaspueblasur2022.com");
    $mail->Subject = "Confirmación de Inscripción Convención JAS Puebla Sur 2022";
    $mail->Body = "Este correo es para confirmar tu correo electrónico y tu asistencia a la Convención JAS Puebla Sur 2022. Para confirmar tu asistencia da click al siguiente enlace: https://jaspueblasur2022.com/confirmacion.php?confirm=".$id;
    $mail->IsHTML(true);
// Activo condificacción utf-8
    $mail->CharSet = 'UTF-8';
    $mail->AddAddress($email);
    if(!$mail->Send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
    //echo "Mensaje enviado correctamente";
    }
}
?>