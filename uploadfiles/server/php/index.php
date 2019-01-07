<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */
session_start();

  $dir='../../../documents/'.$_SESSION['username'].'/';
 // echo $dir;
//exit;
error_reporting(E_ALL | E_STRICT);
require('UploadHandler.php');
$options = array('upload_dir'=>$dir, 'upload_url'=>$dir);
$upload_handler = new UploadHandler($options);
?>