<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$mail = new PHPMailer(true); 

try {
   
    $mail->isSMTP();                                       
    $mail->Host       = 'smtp.hostinger.com';                 
    $mail->SMTPAuth   = true;                           
    $mail->Username   = 'noreply2@hellodev.site';           
    $mail->Password   = 'Gta?^h&z1^';                        
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    
    $mail->Port       = 587;                                

    $mail->setFrom('noreply2@hellodev.site', 'Sports Faculty');
    $mail->addAddress('batajad124@cironex.com', 'Recipient Name');

   
    $mail->isHTML(true);                                    
    $mail->Subject = 'Registration Successful';

    $fname = htmlspecialchars($_POST['fname']);
    $sname = htmlspecialchars($_POST['sname']);
    $email = htmlspecialchars($_POST['email']);
    $number = htmlspecialchars($_POST['number']);
    $c_fname = htmlspecialchars($_POST['c_fname']);
    $c_sname = htmlspecialchars($_POST['c_sname']);
    $dob = htmlspecialchars($_POST['dob']);
    $venue = htmlspecialchars($_POST['venue']);
    $class = htmlspecialchars($_POST['class']);
    $startDate = htmlspecialchars($_POST['start-date']);
    $action = htmlspecialchars($_POST['action']);

   
    $mail->Body    = "
        <h1>Registration Details</h1>
        <p><strong>Parent's First Name:</strong> $fname</p>
        <p><strong>Parent's Surname:</strong> $sname</p>
        <p><strong>Email Address:</strong> $email</p>
        <p><strong>Phone Number:</strong> $number</p>
        <p><strong>Child's First Name:</strong> $c_fname</p>
        <p><strong>Child's Surname:</strong> $c_sname</p>
        <p><strong>Child's Date of Birth:</strong> $dob</p>
        <p><strong>Venue:</strong> $venue</p>
        <p><strong>Class:</strong> $class</p>
        <p><strong>Start Date:</strong> $startDate</p>
        <p><strong>Action:</strong> $action</p>
    ";
    $mail->AltBody = "Registration Details\n
        Parent's First Name: $fname\n
        Parent's Surname: $sname\n
        Email Address: $email\n
        Phone Number: $number\n
        Child's First Name: $c_fname\n
        Child's Surname: $c_sname\n
        Child's Date of Birth: $dob\n
        Venue: $venue\n
        Class: $class\n
        Start Date: $startDate\n
        Action: $action\n
    ";

    $mail->send();
    echo "<script>
            alert('Message has been sent');
            window.location.href = 'index.php';
          </script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
