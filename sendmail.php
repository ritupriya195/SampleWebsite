<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '156.unihost.it';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'mukul.active@gmail.com';                 // SMTP username
    $mail->Password = 'mg@2104mac';                           // SMTP password
    $mail->SMTPSecure = 'STARTTLS';                           
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('mukul.active@gmail.com');
    $mail->addAddress($_POST['mail']);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = "Enquiry Found"
    $mail->Body    = $_POST['text'];

    $mail->send();
    header('Location: http://www.example.net/contact.php');
    exit();
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>