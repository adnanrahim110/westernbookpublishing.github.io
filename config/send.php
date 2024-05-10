<?php
session_start();
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('location: ' . $url);
}
function topheading($heading)
{
    $_SESSION['topheading'] = $heading;
}

use PHPMailer\PHPMailer\PHPMailer;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Get form data
if (isset($_POST['add_client_btn'])) {
    $mail = new PHPMailer(true);

    $name = $_POST['name'];
    $email = $_POST['email'];
    // $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $service = $_POST['service-type'];
    $message = $_POST['message'];

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adnankaka.786110@gmail.com';
    $mail->Password = 'xcvk pfwy wwkf bfbo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($email);

    $mail->addAddress('chrisparker@westernbookpublishing.com');

    $mail->isHTML(true);

    $mail->Subject = 'test';

    $mail->Body = "Name: $name <br> 
                    Email: $email <br> 
                    Phone: $phone <br> 
                    Service Type: $service <br> 
                    Message: $message";

    if ($mail->send()) {
        redirect("../index", "Thank you for submitting your query to <span style=\"color: #ed1c21;\">Western Book Publishing</span><br> 
        One of our consultants will be in touch with you shortly to discuss next steps.");
        topheading('Thankyou 😊');
    } else {
        redirect("../index", "Something Went Wrong". $mail->ErrorInfo);
        topheading('Oops ‼️');
    }
} elseif (isset($_POST['c_sub_btn'])) {
    $mail = new PHPMailer(true);

    $cname = $_POST['c-name'];
    $cemail = $_POST['c-email'];
    // $subject = $_POST['subject'];
    $cphone = $_POST['c-phone'];
    $cmessage = $_POST['c-message'];

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adnankaka.786110@gmail.com';
    $mail->Password = 'xcvk pfwy wwkf bfbo';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($cemail);

    $mail->addAddress('chrisparker@westernbookpublishing.com');

    $mail->isHTML(true);

    $mail->Subject = 'test';

    $mail->Body = "Name: $cname <br> 
                    Email: $cemail <br> 
                    Phone: $cphone <br> 
                    Message: $cmessage";

    if ($mail->send()) {
        redirect("../index", "Thank you for submitting your query to <span style=\"color: #ed1c21;\">Western Book Publishing</span><br> 
        One of our consultants will be in touch with you shortly to discuss next steps.");
        topheading('Thankyou 😊');
    } else {
        redirect("../index", "Something Went Wrong". $mail->ErrorInfo);
        topheading('Oops ‼️');
    }
} else {
    redirect("../index", "Please fill out all places". $mail->ErrorInfo);
    topheading('Oops ‼️');
}
