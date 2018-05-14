<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
include "connect.php";
$username = $_POST['username'];

function randomPassword()
{
$digit = 6;
$karakter = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";

srand((double)microtime()*1000000);
$i = 0;
$pass = "";
while ($i <= $digit-1)
{
$num = rand() % 32;
$tmp = substr($karakter,$num,1);
$pass = $pass.$tmp;
$i++;
}
return $pass;
}

// membuat password baru secara random -> memanggil function randomPassword
$newPassword = randomPassword();

// perlu dibuat sebarang pengacak
$pengacak  = "NDJS3289JSKS190JISJI";

// mengenkripsi password dengan md5() dan pengacak
$newPasswordEnkrip = md5($newPassword);

// mencari alamat email si user
$query = mysqli_query($conn, "SELECT * FROM user WHERE name = '$username'");
$data  = mysqli_fetch_array($query);
$alamatEmail = $data['email'];

mysqli_query($conn, "UPDATE user SET password = '$newPasswordEnkrip' WHERE name = '$username'");

date_default_timezone_set('Etc/UTC');

require '../phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "luthfijojow@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "xxxxxxxx";

//Set who the message is to be sent from
$mail->setFrom('luthfijojow@gmail.com', 'EVE-OR');

//Set an alternative reply-to address
$mail->addReplyTo('luthfijojow@gmail.com', 'EVE-OR');

//Set who the message is to be sent to
$mail->addAddress(''.$alamatEmail.'', "User EVE-OR");

//Set the subject line
$mail->Subject = 'New Password';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML("Hello '" .$data['name']. "' this is your new password <br> password : $newPassword");

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
//$mail->addAttachment('../phpmailer/images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
