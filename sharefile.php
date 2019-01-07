<?php

session_start();
/*

if(!isset($_SESSION['username']) || empty($_SESSION['username'])){

  header("location: https://myhealthvault.dx.am");
  exit;

}

*/
	$mysqli = new mysqli('fdb13.awardspace.net', '2491663_healthvault', 'Mits@123', '2491663_healthvault');
//$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
if(!empty($_GET['email'])&&!empty($_GET['file']))
{
    $shemail=$_GET['email'];
    $email=$_SESSION['username'];
    $file=$_GET['file'];
    $mymail=$_SESSION['username'];
    
    $sql="select sharedby as 'result' from patientdata where email='$email' limit 1";
    $result=mysqli_query($mysqli,$sql);
    foreach($result as $row)
    {
    $res=$row['result'];
    }
    //echo $res;
    if (strpos($res, $shemail) !== false) {
      echo 'true';
    $res="true";
    }
    else
    {
     $res="false";
     echo "wdwdw";
    }
    if(strcmp($res,"false")==0)
    {
        $abc="{\"email\":\"".$shemail."\", \"admin\":\"yes\", \"share_files\":[\"$file\"]}";
        $new="update patientdata set sharedby=JSON_ARRAY_APPEND(sharedby,'$',CAST('$abc' AS JSON)) where email='$email'";
        $result=mysqli_query($mysqli,$new);
    }
    else if(strcmp($res,"true")==0)
    {
        $result3=mysqli_query($mysqli,"select sharedby as 'result' from patientdata where email='$email'");
                if ( false===$result3 ) {
        printf("error: %s\n", mysqli_error($mysqli));
        }
                foreach($result3 as $item)
        {
           // echo $item['result'];
                  $array=json_decode($item['result'],true);
        }
        $num=-1;
        //var_dump($result3);
        //var_dump($array);

        foreach($array as $item) 
        { 
        $num++;
        $uses = $item['email'];
        //echo $uses;
        if(strcmp($uses,$shemail)==0)
        {
            $got=$num;
        }
        }
        echo $got;
        $update="update patientdata set sharedby=JSON_ARRAY_INSERT(sharedby,'$[$got].share_files[0]','$file') where email='$email'";
        $result=mysqli_query($mysqli,$update);
    }
    /////////////////////////////////////////////////////////
    
    
    
$sql="select sharedtome as 'result' from patientdata where email='$shemail'";
    $result=mysqli_query($mysqli,$sql);
    foreach($result as $row)
    {
    $res=$row['result'];
    }
    //echo $res;
    if (strpos($res, $email) !== false) {
      echo 'true';
    $res="true";
    }
    else
    {
     $res="false";
     echo "wdwdw";
    }
    if(strcmp($res,"false")==0)
    {
        $abc="{\"email\":\"".$email."\", \"admin\":\"yes\", \"share_files\":[\"$file\"]}";
        $new="update patientdata set sharedtome=JSON_ARRAY_APPEND(sharedtome,'$',CAST('$abc' AS JSON)) where email='$shemail'";
        //echo $new;
        $result=mysqli_query($mysqli,$new);
    }
    else if(strcmp($res,"true")==0)
    {
        $result3=mysqli_query($mysqli,"select sharedtome as 'result' from patientdata where email='$shemail'");
                if ( false===$result3 ) {
        printf("error: %s\n", mysqli_error($mysqli));
        }
                foreach($result3 as $item)
        {
           // echo $item['result'];
                  $array=json_decode($item['result'],true);
           //       echo $item['result'];
        }
        $num=-1;
        //var_dump($result3);
        //var_dump($array);

        foreach($array as $item) 
        { 
        $num++;
        $uses = $item['email'];
        //echo $uses;
        if(strcmp($uses,$email)==0)
        {
            $got=$num;
        }
        }
        echo $got;
        $update="update patientdata set sharedtome=JSON_ARRAY_INSERT(sharedtome,'$[$got].share_files[0]','$file') where email='$shemail'";
        $result=mysqli_query($mysqli,$update);
    }
}
        
?>