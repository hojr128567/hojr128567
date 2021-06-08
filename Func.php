<?php
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
  compile("<hojr id='$ayhggg,$blkh2r'></hojr><script>
 
function timer_s128(){



function compile_t(var12467,fff0){
      
      
      document.getElementById(fff0).innerHTML = var12467;
      
      
      
    }
    compile_t('$ayhggg','$ayhggg,$blkh2r');
    
    
}
 
setTimeout(timer_s128,$blkh2r);
</script>");
  
  
}
function post_text($server_g128,$text_g128,$post_name_g128){
  compile("<form enctype='multipart/form-data' method='post' action='$server_g128' hidden>
  <input type='text' value='$text_g128' name='$post_name_g128'>
  <input type='submit' id='submit128567'>
</form>
<script>document.getElementById('submit128567').click();</script>");
}
function set_text($qrgeppo,$agbbr87){
  js("document.getElementById('$qrgeppo').innerHTML = '$agbbr87';");
}
?>
