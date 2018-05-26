<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    
    $email_from = 'contact@doddsart.com';
    $email_subject = "New Form Submission";
    $email_body = "You have received a new message from the user $name:\n".$message;

    $to = "doddsvisualart@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
?>
