<?php 
// Send  email 
require_once(__DIR__.'/lib/PHPMailer/class.phpmailer.php');
require_once(__DIR__.'/lib/PHPMailer/class.smtp.php');

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->IsHTML(true);
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "cosselenium@gmail.com";
    $mail->Password = "wordplz1";
    $mail->setFrom('cosselenium@gmail.com');//From which Email address.
//Set who the message is to be sent to
    $mail->AddAddress('r.sattamsahoo@costrategix.com', 'Raj');
//Set the subject line
    $mail->Subject = Some Tried to Contact-Myrollercoster.com,;
    $mail->Body = "Name:- $_GET['name']<br>Email:- $_GET['email']<br>Phone:- $_GET['phone']<br>Message to You:- $_GET['message']" ; //Set body message.
    $mail->AddAttachment(__DIR__."/$filename");//Add attachment.
    if (!$mail->send()) {
        $mail="Mailer Error: " . $mail->ErrorInfo;
    } else {
        $mail="Message sent!";
    }
     ?>