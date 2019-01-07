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
    $email= $_SESSION['username'];
    $file=$_GET['file'];
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
        $hasFound = false;
        //Iterate "array" collection for get the email and file names
        foreach($array as $item) 
        { 
            $num++;
            $uses = $item['email'];
            //echo $uses;
            if(strcmp($uses,$shemail)==0)
            {
                $got=$num;
                $index = 0;
                foreach($item['share_files'] as $f){
                    
                    if(strcmp($f,$file)==0){
                        echo "File found";
                        echo $index;
                        $hasFound = true;
                        break;
                    }
                    $index +=1;
                }
            }
            
            if($hasFound)break;
        }
        $sql2="update patientdata set sharedby=JSON_REMOVE(sharedby,'$[$got].share_files[$index]') where email='$email'";
        $result2=mysqli_query($mysqli,$sql2);
        $sql2="SELECT JSON_EXTRACT(sharedby,'$[$got].share_files') as 'result' from patientdata where email='$email'";
        $result2=mysqli_query($mysqli,$sql2);
        foreach($result2 as $item)
        {
            if(strcmp($item['result'],'[]')==0)
            {
                $sql2="update patientdata set sharedby=JSON_REMOVE(sharedby,'$[$got]')";
                $result2=mysqli_query($mysqli,$sql2);
            }
        }
        
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        
        $result3=mysqli_query($mysqli,"select sharedtome as 'result' from patientdata where email='$shemail'");
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
        $hasFound = false;
        //Iterate "array" collection for get the email and file names
        foreach($array as $item) 
        { 
            $num++;
            $uses = $item['email'];
            //echo $uses;
            if(strcmp($uses,$email)==0)
            {
                $got=$num;
                $index = 0;
                foreach($item['share_files'] as $f){
                    
                    if(strcmp($f,$file)==0){
                        echo "File found";
                        echo $index;
                        $hasFound = true;
                        break;
                    }
                    $index +=1;
                }
            }
            
            if($hasFound)break;
        }
        $sql2="update patientdata set sharedtome=JSON_REMOVE(sharedtome,'$[$got].share_files[$index]') where email='$shemail'";
        $result2=mysqli_query($mysqli,$sql2);
        $sql2="SELECT JSON_EXTRACT(sharedtome,'$[$got].share_files') as 'result' from patientdata where email='$shemail'";
        $result2=mysqli_query($mysqli,$sql2);
        foreach($result2 as $item)
        {
            if(strcmp($item['result'],'[]')==0)
            {
                $sql2="update patientdata set sharedtome=JSON_REMOVE(sharedtome,'$[$got]') where email='$shemail'";
                $result2=mysqli_query($mysqli,$sql2);
            }
        }


}
        
?>