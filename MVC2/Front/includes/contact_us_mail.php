<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader 
require '../includes/PHP-Mailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'notesmarketplace@gmail.com';                     //SMTP username
    $mail->Password   = 'NotesMarketplace@123456';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($FormEmailID, $FormFullName);
    $mail->addAddress('notesmarketplace@gmail.com', 'Notes MarketPlace');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $FormSubject;
    $mail->Body    = "Hello," . "<br><br>" . $FormComments . "<br><br>" . "Regards,  " . "<br>" . $FormFullName;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $_SESSION['contact_us_status'] = "Thank you for contacting us";

    // echo "<div class='success-msg'><p style='color: #6255a5 !important; font-weight: 600; text-align: left !important; font-size: 19px;'>Thank you for contacting us.</p></div>";
} catch (Exception $e) {
    $_SESSION['contact_us_status'] = "Please Retry (Error occured)";

    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}