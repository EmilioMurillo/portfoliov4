//<//?//php
// Check for empty fields
//if(empty($_POST['name'])  		||
   //empty($_POST['email']) 		||
   //empty($_POST['phone']) 		||
   //empty($_POST['message'])	||
   //!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   //{
	//echo "No arguments Provided!";
	//return false;
   //}

//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
//$to = 'emilio.a.murillo@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
//$email_subject = "Website Contact Form:  $name";
//$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
//$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers .= "Reply-To: $email_address";
//mail($to,$email_subject,$email_body,$headers);
//return true;
//?>

<?php

    $name = $_REQUEST[ 'contact-name' ];
    $email = $_REQUEST[ 'contact-email' ];
    $subject = $_REQUEST[ 'contact-subject' ];
    $message = $_REQUEST[ 'contact-message' ];
    $mail_subject = $subject . "( Customer Contact )";
    $message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;

    /* Replace YOUR_MAIL With Your Mail Address inside '' */
    if ( mail( 'emilio.a.murillo@gmail.com', $mail_subject, $message, "From:" . $email ) ) {
        echo "Thank you <strong>$name</strong> for contacting me !!!";
    } else {
        echo "Error in sending message !!! Please try again";
    }

?>
