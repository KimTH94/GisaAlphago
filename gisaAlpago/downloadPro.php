<?php
$filename = $_GET['filename'];
$reail_filename = urldecode($filename);
$file_dir = "C:\php\upload2\\".$filename;
$file_dir = preg_replace("/\s+/", "", $file_dir);
header('Content-Type: application/x-octetstream');
header('Content-Length: '.filesize($file_dir));
header('Content-Disposition: attachment; filename='.$reail_filename);
header('Content-Transfer-Encoding: binary');

$fp = fopen($file_dir, "r");
fpassthru($fp);
fclose($fp);
?>
