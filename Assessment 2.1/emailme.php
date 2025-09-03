<!DOCTYPE html>
<title> emailme </title>
<?php

$to  = "sutly008@unisa.com.au"
$subject = "email"
$message = "Hello email!";

if (mail($to,$subject,$message,$header)) {echo "email Sent!";}
else {
    echo "failed";
} ?>
</html>