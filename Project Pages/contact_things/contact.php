<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $recipient = 'norainedhally.cruz@gmail.com';
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $sender = $_POST["sender"]; 
    
    $headers = "From: $sender"; /* Set sender's email as the "From" address */
    $headers .= "Content-Type: text/html; charset=UTF-8";
    
    $headers .= "Cc: $sender";
    
    if (mail($recipient, $subject, $message, $headers)) {
        /* Email sent successfully */
        header("Location: contact_things/message_success.html");
        exit;
    } else {
        /* Email sending failed */
        echo "Email sending failed";
    }
}
?>