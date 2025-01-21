<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$p_name=$_POST['p_name'];
$p_email=$_POST['p_email'];
$p_subject=$_POST['p_subject'];
$p_phone=$_POST['p_phone'];
$p_message=$_POST['p_message'];

// Modify the path in the require statement below to refer to the 
// location of your Composer autoload.php file.
require './vendor/autoload.php';

try {
    // Instantiate a new PHPMailer 
    $mail = new PHPMailer;

    // Tell PHPMailer to use SMTP
    $mail->isSMTP();

    //$mail->SMTPDebug = 2;

    // Replace sender@example.com with your "From" address. 
    // This address must be verified with Amazon SES.
    $mail->setFrom('acallies15@apu.edu', 'Reletnless Performance Training  Admin');
    // Replace recipient@example.com with a "To" address. If your account 
    // is still in the sandbox, this address must be verified.


    //$mail->addAddress('acallies15@apu.edu', 'Adrian Callies'); Use for testing purposes
    $mail->addAddress('callieskeith@gmail.com', 'Keith Callies');

    // Replace smtp_username with your Amazon SES SMTP user name.
    $mail->Username = getenv('AMAZON_USER');
    
    // Replace smtp_password with your Amazon SES SMTP password.
    $mail->Password = getenv('AMAZON_PASSWORD');
        
    // Specify a configuration set. If you do not want to use a configuration
    // set, comment or remove the next line.
    //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', 'ConfigSet');
    
    // If you're using Amazon SES in a region other than US West (Oregon), 
    // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP  
    // endpoint in the appropriate region.
    $mail->Host = 'email-smtp.us-west-2.amazonaws.com';// May be subject to change since most emails will be sent in the Texas Area

    // The subject line of the email
    $mail->Subject = 'Relentless Performance Training Website: New Message!';

    // The HTML-formatted body of the email
    $mail->Body = "<h1>Someone has contacted Relentless Performance Training!</h1>
    <h2>Subject: ".$p_subject."</h2>
    <p>".$p_name." has contacted you. The following message is below:</p>
    <i>"." ".$p_message. " <b>Please respond to ".$p_name." at the following contact information: </b> Email: ".$p_email." Phone: ".$p_phone."</i>";


    // Tells PHPMailer to use SMTP authentication
    $mail->SMTPAuth = true;

    // Enable TLS encryption over port 587
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Tells PHPMailer to send HTML-formatted email
    $mail->isHTML(true);

    // The alternative email body; this is only displayed when a recipient
    // opens the email in a non-HTML email client. The \r\n represents a 
    // line break.
    $mail->AltBody = "Email Test\r\nThis email was sent through the 
        Amazon SES SMTP interface using the PHPMailer class.";

    $mail->send();
    header("Location: ./form-submit.html");
}
catch (Exception $e){
    // echo 'Message could not be send. Error: ', $mail->ErrorInfo;
    echo 'Message could not be send. Error: ';
}
?>
