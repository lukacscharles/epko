<?php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

if (!$name || !$email || !$message) {
    header("Location: index.php?status=error");
    exit;
}

$to = "lukacs.charles@gmail.com, mazzagorsi@gmail.com";
$subject = "Webes ajánlatkérés";

$body = "
Név: $name
Email: $email
Telefon: $phone

Üzenet:
$message
";

$headers = "From: $email\r\nReply-To: $email";

mail($to, $subject, $body, $headers);

// vissza a főoldalra
header("Location: index.html");
exit;