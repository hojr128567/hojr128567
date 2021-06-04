<?php
function copy_text($qlfybx){
  js("let myVar='$qlfybx';
navigator.clipboard.writeText(myVar)");
}
function html_version($qeweewweee){
  switch ($qeweewweee) {
  case 'html1':
    compile('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">');
    break;
    case 'html2':
    compile('<html></html>');
    break;
    case 'html3':
    compile("<html></html>");
    break;
    case 'html4':
    compile('<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">');
    break;
    case 'html5':
      compile('<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="" content="">
    </html>');
    break;
}
}
?>
