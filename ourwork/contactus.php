<?php
    $name = $_POST['name'];
    $visitor_email = $POST['email'];
    $message = $_POST['message'];

    $email_from = 'admin@bengaluruveeraru.org'
    
    $email_subject = "Contact US - BV Website"

    $email_body = "Name: $name.\n".
                    "Email: $visitor_email.\n".
                        "Message: $message.\n";

    $to = "contactus@bengaluruveeraru.org";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Loaction: footer.html");
?>