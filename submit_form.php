<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer library
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // Set mailer to use SMTP
        $mail->Host = 'smtp.your-email-provider.com'; // Specify main and backup SMTP servers
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 's010150@victorycollege.com'; // SMTP username
        $mail->Password = 'yapper1'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587; // TCP port to connect to (587 for TLS, 465 for SSL)

        // Recipients
        $mail->setFrom('s010150@victorycollege.com', 'Your Name');
        $mail->addAddress('s010150@victorycollege.com'); // Add a recipient

        // Content
        $mail->isHTML(false); // Set email format to HTML
        $mail->Subject = 'New Message from Contact Form';
        $mail->Body    = "You have received a new message from your website contact form.\n\n" .
                          "Name: $name\n" .
                          "Email: $email\n\n" .
                          "Message:\n$message";

        $mail->send();
        echo 'Message sent successfully!';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
