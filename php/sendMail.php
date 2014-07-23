<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$from = "gianluca.genga@gmail.com";
$to = $email;
$head = "New Contact Lead - VOneSoft";
$body = "Hi , <br /><br />";

$body .= "<table border='1' cellpadding='4' cellspacing='0'>";
$body .= "<tr><td>Name </td><td> </td></tr>";
$body .= "<tr><td>Email </td><td>  </td></tr>";
$body .= "<tr><td>Subject </td><td>  </td></tr>";
  $body .= "<tr><td>Message </td><td></td></tr>";
$body .= "</table>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= "From:" . $from. "\r\n";

mail($to, $head, $body, $headers);
echo '1';
?>