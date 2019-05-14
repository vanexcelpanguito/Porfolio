<?php

echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

//require '../email/src/Exception.php';
//require '../email/src/PHPMailer.php';
//require '../email/src/SMTP.php';

require '../email/PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'tls://smtp.gmail.com:587';//tls://smtp.gmail.com:587 / ssl://smtp.gmail.com:465
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;//465/587

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';//ssl/tls

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "vanexcelpanguito@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "dzxfzmzzscogtjim";

//Set who the message is to be sent from
$mail->setFrom('vanexcelpanguito@gmail.com', 'Van Excel');

//Set an alternative reply-to address
$mail->addReplyTo('vaneksel123@gmail.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress('vaneksel123@gmail.com', 'Van Doe');

//Set the subject line
$mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML(file_get_contents('../email/PHPMailer/examples/contents.html'), dirname(__FILE__));

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment('../email/PHPMailer/examples/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>