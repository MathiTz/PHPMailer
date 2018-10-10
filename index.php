<?php

  require("vendor/phpmailer/phpmailer/src/PHPMailer.php");
  require("vendor/phpmailer/phpmailer/src/SMTP.php");

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "matheus.santos@alu.ufc.br";
    $mail->Password = "Denise280600";
    $mail->SetFrom("matheus.santos@alu.ufc.br");
    $mail->Subject = "Test";
    $mail->Body = "hello";
    $mail->AddAddress("matheusalves789@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
?>