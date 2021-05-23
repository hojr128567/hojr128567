<?php
function move($qjvdy,$lqyhfeg){
  copy($qjvdy,$lqyhfeg);
  unlink($qjvdy);
  //move
}
function delete_file($aghf){
  unlink($aghf);
}
function patch_info($patch_12y,$met_1fv){
  $path_parts1 = pathinfo($patch_12y);
 
// دایرکتری فایل
$directoryName1 = $path_parts1['dirname'];
 
// نام اصلی فایل
$baseFileName1 = $path_parts1['basename'];
 
// پسوند فایل
$fileExtension1 = $path_parts1['extension'];
 
// نام فایل
$fileName1 = $path_parts1['filename'];
//switch
switch ($met_1fv) {
  case 'size':
    return filesize($patch_12y);
    break;
    case 'name':
      return $fileName1;
      break;
      case 'type':
        return $fileExtension1;
        break;
        case 'basename':
         return $baseFileName1;
          break;
          case 'dir':
            return $directoryName1;
            break;
}
}

function download_in_patch($url90, $save_path90) {
     set_time_limit (0);
     $f90 = fopen($save_path90, 'w+');
     $handle90 = fopen($url90, "rb");
     while (!feof($handle90)) {
         $contents90 = fread($handle90, 8192);
         fwrite($f90, $contents90);
     }
     fclose($handle90);
     fclose($f90);
 }



?>
