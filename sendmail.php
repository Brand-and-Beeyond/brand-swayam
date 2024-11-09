<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include Composer's autoload file
require __DIR__ . '/vendor/autoload.php';

// Start the session to show user feedback messages
session_start();

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $comments = htmlspecialchars($_POST['comments']);

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   ="dhirajbhirud2699@gmail.com";
        $mail->Password   = "sdmoaeyoruhpgwmi";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // Recipients
        $mail->setFrom('dhirajbhirud2699@gmail.com', 'Mailer');
        $mail->addAddress('dhirajbhirud2699@gmail.com', 'Dhiraj');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Enquiry from website';
        $mail->Body    = "
            <p>You have a new message:</p>
            <p><strong>Name:</strong> {$name}</p>
            <p><strong>Email:</strong> {$email}</p>
            <p><strong>Phone:</strong> {$phone}</p>
            <p><strong>Message:</strong> {$comments}</p>
        ";

        // Send email
        if ($mail->send()) {
            $_SESSION['message'] = "Message sent successfully.";
            $_SESSION['message_type'] = "success";
        }
    } catch (Exception $e) {
        $_SESSION['message'] = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        $_SESSION['message_type'] = "error";
    }

    // Redirect back to contact page with message
    header('Location: contact.php');
    exit;
}
?>
