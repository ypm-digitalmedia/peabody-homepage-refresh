<?php

$arrStr = $_POST['jsonData'];
$arr = json_decode($arrStr);
// $arr=json_decode( $_POST['jsonData'] );

$to = "ypm.digitalmedia@gmail.com";
// $to = "andrew.melien@yale.edu";
$subject = "Email signup from Peabody Website";

$message = "<html>";
$message .= "<head>";
$message .= "<title>Email signup from Peabody Website</title>";
$message .= "</head>";
$message .= "<body>";
// $message .= "<p>Submitted " . date("Y-m-d h:i:sa", getdate()) . "</p>";
$message .= "<p>" . $arrStr . "</p>";
$message .= "</body>";
$message .= "</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$headers .= 'From: <no-reply@peabody.yale.edu>' . "\r\n";


mail($to,$subject,$message,$headers);

// echo $arrStr;
// print_r($arr);
// echo $arr[0]['firstName'] . " | " . $arr[0]['lastName'] . " | " . $arr[0]['email'];
?>
