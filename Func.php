<?php
function p($frfefe){
  compile("<p>$frfefe</p>");
  
}
function set_icon($ayhdrufe){
  compile("<link rel='shortcut icon' type='image/x-icon' href=$ayhdrufe>");
  
  
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
?>
