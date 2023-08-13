<?php
$recipient_email = "contact@example.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$sender_name = $_POST['name'];
$sender_email = $_POST['email'];

$email_content = "From: $sender_name <$sender_email>\n";
$email_content .= "Subject: $subject\n\n";
$email_content .= $message;

$headers = "From: $sender_name <$sender_email>";

mail($recipient_email, $subject, $email_content, $headers);

header("Location: thank.html");
?>
