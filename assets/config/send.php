<?php

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

    $mail->addAddress('adnankaka.786110@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'test';

    $mail->Body = "Name: $name <br> 
                    Email: $email <br> 
                    Phone: $phone <br> 
                    Service Type: $service <br> 
                    Message: $message";

    if ($mail->send()) {
        echo
            "
        <script>
        alert('Your Message Sent Successfully')
        document.location.href = '../../index.html';
        </script>
        ";
    } else {
        echo "<script>
        alert('Message could not be sent. Mailer Error: ')
        </script>" . $mail->ErrorInfo;
    }
}
elseif (isset($_POST['c_sub_btn'])) {
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

    $mail->addAddress('adnankaka.786110@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'test';

    $mail->Body = "Name: $cname <br> 
                    Email: $cemail <br> 
                    Phone: $cphone <br> 
                    Message: $cmessage";

    if ($mail->send()) {
        echo
            "
        <script>
        alert('Your Message Sent Successfully')
        document.location.href = '../../index.html';
        </script>
        ";
    } else {
        echo "<script>
        alert('Message could not be sent. Mailer Error: ')
        </script>" . $mail->ErrorInfo;
    }
} else {
    echo
    "
  <script>
  alert('Error: Please fill out all fields')
  document.location.href = '../../index.html';
  </script>
  " . $mail->ErrorInfo;
}
