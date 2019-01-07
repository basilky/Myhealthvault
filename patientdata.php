<?php
if(!empty($_GET['email']))
{
	$email=$_GET['email'];
	$mysqli = new mysqli('fdb13.awardspace.net', '2491663_healthvault', 'Mits@123', '2491663_healthvault');
	if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

//var_dump($result);
if(!empty($_GET['request']))
{
    $request=$_GET['request'];
    if(strcmp($request,"healthdata")==0)
        {
        $result=$mysqli->query("SELECT healthdata FROM patientdata WHERE email='$email' LIMIT 1");
        if ( false===$result ) {
        printf("error: %s\n", mysqli_error($mysqli));
        }
        foreach($result as $row)
        {
        header('Content-Type: application/json');
        echo $row['healthdata'];
        }
        }
    if(strcmp($request,"profile")==0)
        {
        $result=$mysqli->query("SELECT profile FROM patientdata WHERE email='$email' LIMIT 1");
        if ( false===$result ) {
        printf("error: %s\n", mysqli_error($mysqli));
        }
        foreach($result as $row)
        {
        header('Content-Type: application/json');
        echo $row['profile'];
        }
        }
    if(strcmp($request,"filelist")==0)
        {
        $dir = "/home/mreuser1/public_html/myhealthvault.dx.am/documents/".$email; //path
        
        $return_array = array();
        
        if(is_dir($dir))
            {
            if($dh = opendir($dir))
            {
                while(($file = readdir($dh)) != false)
                {
                
                    if($file == "." or $file == "..")
                    {
                    
                    } else 
                    {
                    $return_array[] = $file; // Add the file to the array
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode($return_array);
            }
        
        }
        if(strcmp($request,"fil")==0)
        {
        $dir = "/home/mreuser1/public_html/myhealthvault.dx.am/documents/".$email;
header('Content-Type: application/json');

$list = array(); //main array

if(is_dir($dir)){
    if($dh = opendir($dir)){
        while(($file = readdir($dh)) != false){

            if($file == "." or $file == ".."){
                //...
            } else { //create object with two fields
            $size= filesize('test6.txt');
            echo $size;
            exit;
                $list3 = array(
                'file' => $file, 
                'size' => $size);
                array_push($list, $list3);
            }
        }
    }

    $return_array = array('files'=> $list);

    echo json_encode($return_array);
}
        }
}
}
?>
