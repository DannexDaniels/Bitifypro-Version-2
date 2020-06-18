<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 6/11/20
 * Time: 9:19 PM
 */

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';


class Outputs
{
    public function debug_to_console($data) {
        $output = $data;
        if (is_array($output))
            $output = implode(',', $output);

        echo "<script>console.log('" . $output . "' );</script>";
    }

    public function sendMail($emailType, $data){
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'bitifypro.dannextech.co.ke';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'verify@bitifypro.dannextech.co.ke';                     // SMTP username
            $mail->Password   = 'Daniel@4146';                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            if ($emailType=="registration"):
                if ($this->sendVerification($mail,$data))
                    if ($this->sendToAdmin($mail, $data, $emailType))
                        return true;
            endif;

            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        } catch (Exception $e) {
            print_r($mail->ErrorInfo);
            $this->debug_to_console("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
            return false;
        }
    }

    public function sendVerification($mail,$data){
        $mail->setFrom('verify@bitifypro.dannextech.co.ke', 'Bitify Pro');
        $mail->addAddress($data['email'], $data['username']);     // Add a recipient
        //$mail->addAddress('test-c3lp5bzad@srv1.mail-tester.com');               // Name is optional
        $mail->addReplyTo('verify@bitifypro.dannextech.co.ke', 'Verify');
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Verify Bitify Pro Account';
        $mail->Body    = "<p>Hello ".$data['username']."<br />Thank you for creating an account with us. We are glad you chose us to help you make your money grow.<br />Before we start, click the link below to verify your account<br /><a href='https://bitifypro.com'>https://bitifypro.com</a></p>";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        $this->debug_to_console('Message has been sent');
        return true;
    }

    public function sendToAdmin($mail, $data, $emailType){
        if ($emailType == "registration"):
            $mail->setFrom('verify@bitifypro.dannextech.co.ke', 'Bitify Pro');
            $mail->addAddress('dannexdaniels@gmail.com', 'Admin' );     // Add a recipient
            $mail->addAddress('johnkiharajohn@gmail.com', 'Admin');               // Name is optional
            $mail->addReplyTo('verify@bitifypro.dannextech.co.ke', 'Verify');
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'New Bitify Pro Account';
            $mail->Body    = "<p>Hello Admin,<br /> a new user (".$data['username'].") has created an account.<br />Click the link below to add a wallet ID for the user <br /><a href='https://bitifypro.dannextech.co.ke/authentication/set_wallet.php?uname=".$data['username']."'>https://bitifypro.com/setwalletid/".$data['username']."</a></p>";
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            $this->debug_to_console('Message has been sent');
            return true;
        endif;
    }

    public function alert($message, $redirect=""){
        echo "<script>alert('".$message."'); window.location.href='".$redirect."';</script>";
    }
}