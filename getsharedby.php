<?php
if(!empty($_GET['email']))
{
	
	$mysqli = new mysqli('139.59.61.30', 'root', 'Mits@123', 'healthvault');
	if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
	}
  $email=$_GET['email'];
        $result=$mysqli->query("SELECT sharedby as 'result' FROM patientdata WHERE email='$email' LIMIT 1");
        if ( false===$result ) {
        printf("error: %s\n", mysqli_error($mysqli));
        }
        foreach($result as $row)
        {
        header('Content-Type: application/json');
        echo $row['result'];
        }
}
?>