<?php
$recipient = "info@xcounter.se";
$subject = "Company";
// where to go after it gets sent ...
$redirect = "company.html";
$email = "no-reply@xcounter.se";
$product = "Webbpage Company";
$from = $_POST['email'];
$message = "
XCounter.com
---------------------------------------------------
Product: $product
Email: $from
---------------------------------------------------

";
$extraheaders = "From: $email\r\nReply-To: $email\r\n";
if (! mail($recipient, $subject, $message, $extraheaders))
    echo "Mail did not send for some reason.";

header("Location: ".$redirect);

?>