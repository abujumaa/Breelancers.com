<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "o.abujumaa@email.com"; // Your email address
    $subject = "New Contact Form Submission";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>