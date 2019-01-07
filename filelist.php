<?php
$mysqli = new mysqli('fdb13.awardspace.net', '2491663_healthvault', 'Mits@123', '2491663_healthvault');
//$mysqli = new mysqli('localhost', 'mreuser1_mits', 'mits@123','mreuser1_healthvault');
if ($mysqli->connect_errno)
{
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}

$sql2 = "update patientdata set filelist='[]' where email='" . $_GET['id'] . "'";

//echo $sql2;
if (($result = $mysqli->query($sql2)) !== false)
{
    //  echo "query success";
}
else
{
    //   echo "query failure";
    //   echo "Error: " . $sql . "<br>" . $mysqli->error;
}

foreach (new DirectoryIterator('./documents/' . $_GET['id'] . '/') as $file)
{
//echo "Rwere";
    if ($file->isFile())
    {
        //echo "erwte";
        $fname = $file->getFilename();
        $cTime = new DateTime();
        $cTime->setTimestamp($file->getCTime());
        $date = $cTime->format('Y-m-d');
        $time = $cTime->format('h:i:s');
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $sql2 = "update patientdata set filelist=JSON_ARRAY_APPEND(filelist,'$',CAST('{\"date\" : \"" . $date . "\", \"name\" : \"" . $fname . "\", \"time\": \"" . $time . "\", \"type\": \"" . $ext . "\",\"access\":[]}' AS JSON)) where email='" . $_GET['id'] . "'";

//echo $sql2;
        if (($result = $mysqli->query($sql2)) !== false)
        {
            //    echo "query success";
        }
        else
        {
            //    echo "query failure";
            //    echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }
    //echo $sql;

}
header('Content-Type: application/json');
if (($result = $mysqli->query("select filelist as 'result' from patientdata where email='" . $_GET['id'] . "'")) !== false)
{
    //echo "query success";
    foreach ($result as $row)
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
