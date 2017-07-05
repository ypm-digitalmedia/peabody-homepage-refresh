<?php
// $arrStr = $_POST['jsonData'];
$form_email = json_decode($_POST['form_email']);
$form_firstName = json_decode($_POST['form_firstName']);
$form_lastName = json_decode($_POST['form_lastName']);

// $arr = json_decode($_POST['jsonData']);
// $arr=json_decode( $_POST['jsonData'] );

$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('America/New_York'));

$to = "ypm.digitalmedia@gmail.com";
// $to = "andrew.melien@yale.edu";
$subject = "Email signup from Peabody Website";

$message = "<html>";
$message .= "<head>";
$message .= "<style type='text/css'>body { font-family: sans-serif; font-size: 14px; } </style>";
$message .= "<title>Email signup from Peabody Website</title>";
$message .= "</head>";
$message .= "<body>";
$message .= "<p>Submitted " . $dt->format('Y-m-d H:i:s') . "</p>";
$message .= "<table cellpadding='5' cellspacing='5' border='0' style='margin: 20px;'>";
$message .= "<tr><td style='padding-right: 10px;'><strong>First name:</td><td>" . $form_firstName . "</td></tr>";
$message .= "<tr><td style='padding-right: 10px;'><strong>Last name:</td><td>" . $form_lastName . "</td></tr>";
$message .= "<tr><td style='padding-right: 10px;'><strong>Email address:</td><td>" . $form_email . "</td></tr>";
$message .= "</table>";
$message .= "</body>";
$message .= "</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <no-reply@peabody.yale.edu>' . "\r\n";


echo $message;
// echo $arr;

// mail($to,$subject,$message,$headers);

// echo $arrStr;
// print_r($arr);
// echo $arr[0]['firstName'] . " | " . $arr[0]['lastName'] . " | " . $arr[0]['email'];
?>
