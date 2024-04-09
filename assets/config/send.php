<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';


$host = "localhost";
$username = "westernbook";
$password = "pass0092word";
$database = "westernbookpublishing";


// Creating database connection
$conn = mysqli_connect($host, $username, $password, $database);

// Checking Database connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
// Get form data
if (isset($_POST['add_client_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $service_type = $_POST['service-type'];
    $message = $_POST['message'];

    $booking_query = "INSERT INTO contact_us 
    (name, email, phone, service_type, message) 
    VALUES ('$name', '$email', '$phone', '$service_type', '$message')";

    $booking_query_run = mysqli_query($conn, $booking_query);

    if ($booking_query_run) {
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
    $mail->Body  = "Name: $name<br>
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
        echo "Error: " . $booking_query . "<br>" . $conn->error;
    }
}

if (isset($_POST['c_sub_btn'])) {
    $c_name = $_POST['c-name'];
    $c_email = $_POST['c-email'];
    $c_phone = $_POST['c-phone'];
    $c_message = $_POST['c-message'];
    $c_check = ($_POST['checkbox']) ? $_POST['checkbox'] : 0;
    
    $rapid_msg_query = "INSERT INTO rapid_message 
    (c_name, c_email, c_phone, c_message, c_check) 
    VALUES ('$c_name', '$c_email', '$c_phone', '$c_message', '$c_check')";

    $rapid_msg_query_run = mysqli_query($conn, $rapid_msg_query);

    if ($rapid_msg_query_run) {
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
    $mail->Body  = "Name: $c_name<br>
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
        header("location: ../../index.html");
        echo "Error: " . $rapid_msg_query . "<br>" . $conn->error;
    }
}

$conn->close();