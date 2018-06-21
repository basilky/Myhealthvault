<?php
require './mailer/class.phpmailer.php';
	$mysqli = new mysqli('139.59.61.30', 'root', 'Mits@123', 'healthvault');

//$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$status=0;
$activationcode=md5($email.time());
/*
var_dump($email);
var_dump($password);
var_dump($activationcode);
*/
$hashpassword = password_hash($password, PASSWORD_DEFAULT);

$query="insert into unverified_users(email,password,status,activationcode) values('$email','$hashpassword','$status','$activationcode')";
if (!$result = $mysqli->query($query)) {
    echo "Sorry, the website is experiencing problems.";
    echo "Error: Our query failed to execute and here is why: \n";
    echo "Query: " . $query . "\n";
    echo "Errno: " . $mysqli->errno . "\n";
    echo "Error: " . $mysqli->error . "\n";
    exit;
}
if($result)
{
$mail = new PHPMailer;
$mail->isSMTP();                            
$mail->Host = 'smtp.freehosting.host';             
$mail->SMTPAuth = true;                     
$mail->Username = 'mail@myhealthvault.tk';          
$mail->Password = 'Mits1234'; 
//$mail->SMTPSecure = 'tls';                  
$mail->Port = 587;                          
$mail->setFrom('mail@myhealthvault.tk','HealthVault');
$mail->addReplyTo('mail@myhealthvault.tk', 'HealthVault');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
$mail->isHTML(true);  // Set email format to HTML
$bodyContent = "<html></body><div><div>Dear $name,</div></br></br>";
$bodyContent .= "<div style='padding-top:8px;'>Please click on the following link to verify and activate your HealthVault account</div>
<div style='padding-top:10px;'><a href='http://myhealthvault.tk/email_verification.php?code=$activationcode'>Click Here</a></div>
<div style='padding-top:4px;'><br><br>Powered by <a href='Healthvault'>healthvault.com</a></div></div>
</body></html>";
$mail->Subject = 'Account verification for HealthVault';
$mail->Body    = $bodyContent;
}
if(!$mail->send()) {
    echo 'Verification code could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Verification link has been sent to your email id.';
}
}
$result->free();
$mysqli->close();
?>
