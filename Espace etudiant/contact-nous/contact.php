<?php
require 'mailer.php';
session_start();

if (isset($_POST['send'])) {
    $nom = $_SESSION['Nom'];
    echo $nom;
    // $prenom = $_POST['prenom'];
    $senderEmail = $_SESSION['Email_institutionnel'];
    echo $senderEmail;
    $message = $_POST['message'];
    $recepientEmail = $_POST["profsEmails"];
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $attachmentPath = $_FILES['attachment']['tmp_name'];
        $attachmentName = $_FILES['attachment']['name'];
        echo 'file exist';
    } else {
        $attachmentPath = '';
        $attachmentName = '';
        echo 'no file selected';
    }
    // Concatenate the form field values into the email body
    $body = "L'Email d'etudaint : " . $senderEmail . "\n";
    $body .= "Message: " . $message;

    // Send email using the sendEmail function
    if(sendEmail($senderEmail,$recepientEmail, $nom, $body,$attachmentPath,$attachmentName)){
        $_SESSION['statusContact'] = '<p class="success">La demande a été envoyée avec succès.</p>';
    }else{
        $_SESSION['statusContact'] = '<p class="error">La demande n\'a pas été envoyée Veuillez ressayer.</p>';
    }
    header("Location: ../index.php");
    echo '<script>window.onload = function() { showContent("Contact"); }</script>';    
}

?>