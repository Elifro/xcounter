<?php
$recipient = "info@xcounter.se";
$subject = "XCounter.com Contactpage";
// where to go after it gets sent ...
$redirect = "contact.html";
$name = $_POST['name'];
$email = "no-reply@xcounter.se";
$from = $_POST['email'];
$mess = $_POST['mess'];
$message = "
XCounter.com
---------------------------------------------------
Name:  $name
Email: $from
---------------------------------------------------
Message Entered:
$mess
---------------------------------------------------
";
$extraheaders = "From: $email\r\nReply-To: $email\r\n";
if (! mail($recipient, $subject, $message, $extraheaders))
    echo "Mail did not send for some reason.";

header("Location: ".$redirect);

?>