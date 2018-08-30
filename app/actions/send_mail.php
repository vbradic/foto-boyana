<?php

if (empty($_POST["name"])) {
    $name = "";
} else {
    $name = $_POST["name"];
}

echo "name=".$name;

/*ini_set("SMTP","ssl://smtp.gmail.com");
ini_set("smtp_port","465");

mail("76756B@gmail.com","php mail",$name);*/

$to      = '76756B@gmail.com';
$subject = 'the subject';
$message = $name;
$headers = 'From: vukbradic@yahoo.com' . "\r\n" .
    'Reply-To: vukbradic@yahoo.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

