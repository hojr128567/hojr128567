<?php
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


function p($frfefe){
  compile("<p>$frfefe</p>");
  
}
function set_icon($ayhdrufe){
  compile("<link rel='shortcut icon' type='image/x-icon' href='$ayhdrufe'>");
  
  
}
function set_title($ethfe){
  compile("<title>$ethfe</title>");
  
  
  
}
function html($hkjgy){
  compile("<html>$hkjgy</html>");
  
}
function redirect($url001)
{
    if (!headers_sent()){
        header("Location: $url001");
    }else{
        echo "<script type='text/javascript'>window.location.href='$url'</script>";
        echo "<noscript><meta http-equiv='refresh' content='0;url=$url'/></noscript>";
    }
    exit;
}
function anti_right_click($w12hvagfss){ switch ($w12hvagfss) { case true: compile('<script>var message="";
function clickIE()

{if (document.all)
{(message);return false;}}
 
function clickNS(e) {
if
(document.layers||(document.getElementById&&!document.all))
{
if (e.which==2||e.which==3) {(message);return false;}}}
if (document.layers)
{document.captureEvents(Event.MOUSEDOWN);document.  onmousedown=clickNS;}
else
{document.onmouseup=clickNS;document.oncontextmenu  =clickIE;}

document.oncontextmenu=new Function("return false")</script>'); break; case false: compile('<script></script>'); break; } }
function preform_click($qewqwqkpg){
  compile("<script>document.getElementById('$qewqwqkpg').click();</script>");
  
  
  
}
function timer($blkh2r,$ayhggg){
  compile("<script>
 
function timer_s128(){
 compile('$ayhggg');
}
 
setTimeout(timer_s128,$blkh2r);
</script>");
  
  
}


?>
