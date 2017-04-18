<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 4/17/17
 * Time: 11:29 PM
 */

$to = "zhou_xue@bentley.edu";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
    "CC: xuezhou9019@gmail.com";

$result = mail($to,$subject,$txt,$headers);

// send email


echo $result;

