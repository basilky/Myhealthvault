<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["sample"], false);

$myJSON = json_encode($obj);

echo $myJSON;
?>