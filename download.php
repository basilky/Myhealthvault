<?php
if((!empty($_GET['email']))&&(!empty($_GET['file'])))
{
    $email=$_GET['email'];
    $file=$_GET['file'];
    /*
$quoted = sprintf('"%s"', addcslashes(basename($file), '"\\'));
$size   = filesize($file);

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename=' . $quoted); 
header('Content-Transfer-Encoding: binary');
header('Connection: Keep-Alive');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . $size);
*/
    $location="http://myhealthvault.dx.am/documents/".$email."/".$file;

    print "<META http-equiv='refresh' content='1;URL=$location'>";
    //   header( "Location: https://myhealthvault.dx.am" );

   // echo "<a href='$location'>download</a> ";
}
?>