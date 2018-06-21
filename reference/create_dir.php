<?php
echo getcwd();
echo $_SERVER['DOCUMENT_ROOT'];
if(!empty($_GET['dir']))
{
	$code=$_GET['dir'];
	echo $code;
	$code .= "/World"; 
	mkdir($code,0777,true);
}
echo $_SERVER['HTTP_HOST'];
/*	mkdir("sdcsdc");
	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
*/
?>
