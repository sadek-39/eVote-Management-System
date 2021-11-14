<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class AwsMailController extends Controller
{
    public function sendemail()
    {
        // Replace sender@example.com with your "From" address.
        // This address must be verified with Amazon SES.
        $sender = 'api@webytor.com';
        $senderName = 'Sender Name';

        // Replace recipient@example.com with a "To" address. If your account
        // is still in the sandbox, this address must be verified.
        $recipient = 'atomsadek@gmail.com';

        // Replace smtp_username with your Amazon SES SMTP user name.
        $usernameSmtp = 'AKIAVA5HK763V5UYKBVN';

        // Replace smtp_password with your Amazon SES SMTP password.
        $passwordSmtp = 'BLjOEK/019DfhIjDwF+12RmGXCBFq/a6EJDBYsCdd/CB';

        // Specify a configuration set. If you do not want to use a configuration
        // set, comment or remove the next line.
        //$configurationSet = 'ConfigSet';

        // If you're using Amazon SES in a region other than US West (Oregon),
        // replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
        // endpoint in the appropriate region.
        $host = 'email-smtp.us-east-1.amazonaws.com';
        $port = 587;

        // The subject line of the email
        $subject = 'see guys api';

        // The plain-text body of the email
        $bodyText =  "Email Test\r\nThis email was sent through the
            API.";

        // The HTML-formatted body of the email
        $bodyHtml = '<h1>Email Test</h1>
            <p>This email was sent through the
            <a href="https://aws.amazon.com/ses">Amazon SES</a> SMTP
            interface using the <a href="https://github.com/PHPMailer/PHPMailer">
            PHPMailer</a> class.</p>';

        $mail = new PHPMailer(true);

        try {
            // Specify the SMTP settings.
            $mail->isSMTP();
            $mail->setFrom($sender, $senderName);
            $mail->Username   = $usernameSmtp;
            $mail->Password   = $passwordSmtp;
            $mail->Host       = $host;
            $mail->Port       = $port;
            $mail->SMTPAuth   = true;
            $mail->SMTPSecure = 'tls';
            //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

            // Specify the message recipients.
            $mail->addAddress($recipient);
            // You can also add CC, BCC, and additional To recipients here.

            // Specify the content of the message.
            $mail->isHTML(true);
            $mail->Subject    = $subject;
            $mail->Body       = $bodyHtml;
            $mail->AltBody    = $bodyText;
            $mail->Send();
            echo "Email sent!" , PHP_EOL;
        } catch (phpmailerexception $e) {
            echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
        } catch (Exception $e) {
            echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
        }

        


    }
}
