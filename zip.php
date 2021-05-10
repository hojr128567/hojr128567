<?php
// Include and initialize ZipArchive class
require_once 'ZipArchiver.class.php';
$zipper = new ZipArchiver;

// Path of the directory to be zipped
$dirPath = '/path/to/sourceDir';

// Path of output zip file
$zipPath = '/path/to/archive-'.time().'.zip';

// Create zip archive
$zip = $zipper->zipDir($dirPath, $zipPath);
?>
