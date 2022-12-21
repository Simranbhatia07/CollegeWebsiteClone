<?php
$name = $_POST['name'];
$vis_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['method'];

$email_from = 'simran10bhatia@gmail.com';

$email_subject = 'new message';

$email_body = "User Name:$name.\n".
              "User Email:$vis_email.\n".
              "Subject:$subject.\n".
              "message:$message.\n";


$to = 'simran10bhatia@gmail.com';
$headers = "From: $email_from\r\n";

$headers = "Reply-To:$vis_email\r\n";

mail($to,$email_subject,$email_body, $hreaders)

header("Location: contact-html");

?>