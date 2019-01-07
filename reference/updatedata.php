<?php
session_start();

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: https://myhealthvault.dx.am");
  exit;

}
	$mysqli = new mysqli('2491663_healthvault', 'root', 'Mits@123', 'healthvault');
//$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
if(!empty($_GET['type']))
{
    $type=$_GET['type'];
    $subtype=$_GET['sub'];
    $addkey=$_GET['key'];
    $addvalue=$_GET['value'];
    $total='$'.'.'.$subtype.'.'.$addkey;
    $email=$_SESSION['username'];
    $sql="update patientdata set $type=JSON_INSERT($type,'$total','$addvalue') where email='$email'";
    $result=mysqli_query($mysqli,$sql);
}
?>