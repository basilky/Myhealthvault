<?php
require './mailer/class.phpmailer.php';
$mysqli = new mysqli('fdb13.awardspace.net', '2491663_healthvault', 'Mits@123', '2491663_healthvault');

if ($mysqli->connect_errno)
{
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $status = 0;
    $activationcode = md5($email . time());
/*
var_dump($email);
var_dump($password);
var_dump($activationcode);
 */
    $hashpassword = password_hash($password, PASSWORD_DEFAULT);

    $query = "insert into unverified_users(email,password,status,activationcode) values('$email','$hashpassword','$status','$activationcode')";
    if (!$result = $mysqli->query($query))
    {
        echo "Sorry, the website is experiencing problems.";
        echo "Error: Our query failed to execute and here is why: \n";
        echo "Query: " . $query . "\n";
        echo "Errno: " . $mysqli->errno . "\n";
        echo "Error: " . $mysqli->error . "\n";
        exit;
    }

    if ($result)
    {
        $bodyContent = "<html>

<body>
    <div>Dear ,</div><br>
    <div style='padding-top:8px;'>Please click on the following link to verify and activate your HealthVault
        account</div>
    <div style='padding-top:10px;'><a href='http://myhealthvault.dx.am/email_verification.php?code=$activationcode'>Click
            Here</a></div>
    <div style='padding-top:4px;'><br><br>Powered by <a href='Healthvault'>myhealthvault.dx.am</a></div>
</body>

</html>"; 
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
        $headers[] = 'To: ' . $email;
        $headers[] = 'From: Myhealthvault <myhealthvault.dx.am>';

// Mail it

        $from = 'From: Mail Contact Form mail@myhealthvault.dx.am';
        $to = $email;
        $subject = 'Account verification for HealthVault';
        $body = $bodyContent;
        if (mail($to, $subject, $body, implode("\r\n", $headers)))
        {
            echo 'Verification email sent!';
        }
        else
        {
            echo 'E-mail delivery failure!';
        }
    }

}
$mysqli->close();
