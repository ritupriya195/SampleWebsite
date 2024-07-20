<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ritupriya195@gmail.com"; // Replace with your email address
    $subject = "New Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Use mail() function to send the email
    mail($to, $subject, $mailBody, $headers);

    // Redirect to a thank you page or display a success message
    header("Location: thank-you.html");
    exit();
}

?>
