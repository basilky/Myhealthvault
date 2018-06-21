<?php
	$mysqli = new mysqli('139.59.61.30', 'root', 'Mits@123', 'healthvault');
    //$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
    if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
/*
if ($handle = opendir('./documents/basilky145@gmail.com')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
            if ($entry->isFile())
            {

                echo "$entry\n";
            }
        }
    }

    closedir($handle);
}
*/

        
foreach (new DirectoryIterator('./documents/basilky145@gmail.com') as $file) {
  if ($file->isFile()) {
        $fname = $file->getFilename();
        $cTime = new DateTime();
        $cTime->setTimestamp($file->getCTime());
        $date = $cTime->format('Y-m-d');
        $time = $cTime->format('h:i:s');
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $sql = "SELECT JSON_CONTAINS(filelist,'{\"date\" : \"".$date."\", \"name\" : \"".$fname."\", \"time\": \"".$time."\", \"type\": \"".$ext."\"}','$') as 'result' from patientdata where email='basilky145@gmail.com'";
        $sql2="update patientdata set filelist=JSON_ARRAY_APPEND(filelist,'$',CAST('{\"date\" : \"".$date."\", \"name\" : \"".$fname."\", \"time\": \"".$time."\", \"type\": \"".$ext."\",\"access\":[]}' AS JSON)) where email='basilky145@gmail.com'";

        if (($result = $mysqli->query("select filelist as 'result' from patientdata where email='basilky145@gmail.com'")) !== FALSE)
        {
        foreach($result as $row)
        {

        if (strpos($row['result'], $fname) !== false) {
          //  echo 'true';
            $res="true";
        }
        else
        {
            $res="false";
        }
        }
            
        }
        if(strcmp($res,"false")==0)
        {
        if (($result = $mysqli->query($sql2)) !== FALSE)
        {
        //echo "query success";
        }
        else
        {
        echo "query failure";
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
        }
        }
        //echo $sql;
        
}
        header('Content-Type: application/json');
        if (($result = $mysqli->query("select filelist as 'result' from patientdata where email='basilky145@gmail.com'")) !== FALSE)
        {
        //echo "query success";
        foreach($result as $row)
        {
        echo $row['result'];
        }
        }
        else
        {
        echo "query failure";
        echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
$mysqli->close();

?>