<?php
$recipient = "sales@xcounter.se";
$subject = "Products";
// where to go after it gets sent ...
$redirect = "product/hydra-FX35.html";
$email = "no-reply@xcounter.se";
$product = "XC-Flite-X2";
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