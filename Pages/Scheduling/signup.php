<?php

$to = "nrtheprogrammer@gmail.com";
$subject = "Sign up request";
$message = "<html>

<p>The following would like to sign up for services with the following information: </p>

</html>";

mail($to, $subject, $message);