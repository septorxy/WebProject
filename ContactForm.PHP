<?php
error_reporting(0);
require_once __DIR__ . '/bootstrap.php';
require_once 'header.php';
require_once 'footer.php';
echo !empty($msgClass)?$msgClass:'';

$statusMsg = '';
$msgClass = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['email-subject'];
    $emailFrom = $_POST['email-address'];
    $message = $_POST['message'];

    if (!empty($emailFrom) && !empty($name) && !empty($subject) && !empty($message)) {
        //email headers with the sender's information
        $emailTo = 'tarandirestaurant1@gmail.com';
        $Subject = 'From: ' . $emailFrom . ' Subject: ' . $subject;
        $txt = "You have received an e-mail \n\n" . $message;

        // Additional headers
        $headers = 'From: ' . $name . '<' . $emailFrom . '>' . "\r\n";

        if (mail($emailTo, $Subject, $txt, $headers)) {
           
            //if all the required information was entered
            $statusMsg = 'Your contact request has been submitted successfully !';
            $msgClass = 'succdiv';
        } else {
            //if a problem was encountered
          
            $statusMsg = 'Your contact request submission failed, please try again.';
            $msgClass = 'errordiv';
        }

    } else {
        $statusMsg = 'Please fill all the fields.';
        $msgClass = 'errordiv';
    }
}
echo $twig->render('ContactForm.html', ['statusMsg' => $statusMsg]);
?>