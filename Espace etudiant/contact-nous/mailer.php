<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';


function sendEmail($senderEmail, $recepientEmail,$senderName,  $body,$attachmentPath,$attachmentName)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPAuth = true;
        $mail->Username = 'hossamhaida4@gmail.com';
        $mail->Password = 'tcksfwacnimhmlnu';

        // Sender and recipient
        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress($recepientEmail);

        // Email content
        if($attachmentPath !=''){
            $mail->addAttachment($attachmentPath, $attachmentName);
        }
        
        $mail->Subject = "test";
        $mail->Body = $body;

        // Send the email
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        return false;
    }
}

?>