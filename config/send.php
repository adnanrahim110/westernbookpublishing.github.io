<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

require '../vendor/autoload.php';
function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('location: ' . $url);
}
function topheading($heading)
{
    $_SESSION['topheading'] = $heading;
}
function getUserIP()
{
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false) {
            $ip_addresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($ip_addresses[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$user_ip = getUserIP();
function getIPInfo($ip)
{
    // Make a request to ipinfo.io API to get IP information
    $ip_info_json = file_get_contents("https://ipinfo.io/$ip/json");

    // Decode the JSON response
    $ip_info = json_decode($ip_info_json, true);

    // Return IP information
    return $ip_info;
}

$ip_info = getIPInfo($user_ip);

$ip = $ip_info['ip'];
$city = $ip_info['city'];
$region = $ip_info['region'];
$country = $ip_info['country'];
$location = $ip_info['loc'];
$organization = $ip_info['org'];

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
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email);

    $mail->addAddress('chrisparker@westernbookpublishing.com', $_POST['name']);

    $mail->isHTML(true);

    $mail->Subject = 'Sign Up';

    $mail->Body = 
        'Name: ' . $name . '<br>' .
        'Email: ' . $email . '<br>' .
        'Phone: ' . $phone . '<br>' .
        'Service Type: ' . $service . '<br>' .
        'Message: ' . $message . '<br>' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $email;

    $mail->AltBody = 
        'Name: ' . $name . '\n' .
        'Email: ' . $email . '\n' .
        'Phone: ' . $phone . '\n' .
        'Service Type: ' . $service . '<br>' .
        'Message: ' . $message . '\n' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $email;

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
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($cemail);

    $mail->addAddress('chrisparker@westernbookpublishing.com', $_POST['name']);

    $mail->isHTML(true);

    $mail->Subject = 'test';

    $mail->Body = 
        'Name: ' . $cname . '<br>' .
        'Email: ' . $cemail . '<br>' .
        'Phone: ' . $cphone . '<br>' .
        'Message: ' . $cmessage . '<br>' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $cemail;

    $mail->AltBody = 
        'Name: ' . $cname . '\n' .
        'Email: ' . $cemail . '\n' .
        'Phone: ' . $cphone . '\n' .
        'Message: ' . $cmessage . '\n' .
        'IP Address: ' . $user_ip . '<br>' .
        'City: ' . $city . '<br>' .
        'Region: ' . $region . '<br>' .
        'Country: ' . $country . '<br>' .
        'Organization: ' . $organization . '<br>' .
        'From: ' . $cemail;

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
