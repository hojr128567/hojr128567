<?php
function zip($patch_dir_w1,$patch_zip_w1){
  // Include and initialize ZipArchive class
require_once 'https://raw.githubusercontent.com/hojr128567/hojr128567/main/ZipArchiver.class.php';
$zipper = new ZipArchiver;

// Path of the directory to be zipped
$dirPath = $patch_dir_w1;

// Path of output zip file
$zipPath = $patch_zip_w1;

// Create zip archive
$zip = $zipper->zipDir($dirPath, $zipPath);

if($zip){
    return true;
}else{
    return false;
}
}
?>
