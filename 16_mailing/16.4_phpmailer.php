<?php

require_once "phpmailer/PHPMailer.php";
require_once "phpmailer/Exception.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer( true );

try {
    $mail->setFrom( "john@example.com" );
    $mail->addAddress( 'pobitroraj.07@gmail.com' );
    $mail->addReplyTo( 'info@example.com', 'Information' );
    $mail->addCC( 'pobitrombd@gmail.com' );
    $mail->addBCC( 'pobitromondal7@gmail.com' );

    // Content
    $mail->isHTML( true ); // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Attachments
    // $mail->addAttachment( 'd/Xampp/htdocs/php-lwhh/16_mailing/avro-phonetic.pdf' );
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    $mail->send();
    echo 'Mail has been sent';
} catch ( Exception $e ) {
    echo "Failed: {$mail->ErrorInfo}";
}