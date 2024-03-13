<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'mail.integr8.com.ph';
    $mail->SMTPAuth = true;
    $mail->Username = 'shapetech_ojt@integr8.com.ph';
    $mail->Password = 'shapetech_ojt';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom($email, $name);
    $mail->addAddress('angelogaspe@gmail.com'); 
    $mail->Subject = 'ShapeTech Client Inquiry';
    $mail->Body = "
    <html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            .container {
                max-width: 600px;
                margin: auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            h1 {
                color: #333;
                font-size: 24px;
                margin-bottom: 20px;
            }
            p {
                color: #666;
                font-size: 16px;
                margin-bottom: 10px;
            }
            .highlight {
                color: #007bff;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Client Details and Inquiry</h1>
            <p><span class='highlight'>Name:</span> $name</p>
            <p><span class='highlight'>Email:</span> $email</p>
            <p><span class='highlight'>Message:</span> $message</p>
        </div>
    </body>
    </html>
";
$mail->isHTML(true);

    $mail->send();

    $_SESSION['success_message'] = 'Email successfully sent.';
} catch (Exception $e) {
    $_SESSION['error_message'] = 'Failed to send email. Error: ' . $mail->ErrorInfo;
}

header('Location: ../support.php#contact-form');
exit;
?>