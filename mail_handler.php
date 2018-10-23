<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

if(isset($_POST['submit'])){
    $to = "pri.zucato@hotmail.com"; // this is the Email address where you want to receive the mess
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];// this is the sender's name
    $subject = "Form submission";
    $message = $name.", e-mail adress ".$_POST['email'].","." wrote the following:"."\n\n"."\"".$_POST['message']."\""; // this is the sender's message
    $headers = "From:".$from. "\r\n";

    if(mail($to,$subject,$message,$headers)){
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";}
    }
?>