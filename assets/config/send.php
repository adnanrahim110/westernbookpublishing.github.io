<?php
use PHPMailer\PHPMailer\PHPMailer;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

if (isset($_POST['add_client_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_type = $_POST['service-type'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'syedamin.prohub@gmail.com';
    $mail->Password = 'bgmh szue ekts ijuu';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setfrom($email);

    $mail->addAddress('syedamin.prohub@gmail.com');

    $mail->isHTML(true);

    $mail->Subject = 'Data from Contact-Us Form';
    $mail->Body = "Name: $name<br>
                    Email: $email<br>
                    Phone: $phone<br>
                    Service Type: $service_type<br>
                    Message: $message"
    ;

    $mail->send();

    echo
        "
    <script>
    alert('Your Message Sent Successfully')
    document.location.href = '../../index.html';
    </script>
    ";
} else {
    echo $mail->ErrorInfo;
    header("location: ../../index.html");
    echo "Error: ". "<br>";
}

if (isset($_POST['c_sub_btn'])) {
    $c_name = $_POST['c-name'];
    $c_email = $_POST['c-email'];
    $c_phone = $_POST['c-phone'];
    $c_message = $_POST['c-message'];
    $c_check = ($_POST['checkbox']) ? $_POST['checkbox'] : 0;

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'syedamin.prohub@gmail.com';
        $mail->Password = 'bgmh szue ekts ijuu';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setfrom($c_email);

        $mail->addAddress('syedamin.prohub@gmail.com');

        $mail->isHTML(true);

        $mail->Subject = 'Data from Contact-Us Form';
        $mail->Body = "Name: $c_name<br>
                    Email: $c_email<br>
                    Phone: $c_phone<br>
                    Message: $c_message<br>
                    Check-box: $c_check"
        ;

        $mail->send();

        echo
            "
    <script>
    document.location.href = '../../index.html'
    alert('Your Message Sent Successfully');
    </script>
    ";
    } else {
        echo $mail->ErrorInfo;
        echo
        "
<script>
document.location.href = '../../index.html'
alert('Something Went Wrong');
</script>
";
    }

?>
