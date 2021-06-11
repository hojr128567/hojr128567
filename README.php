<?php
//phl v1
function get_url_ip($ip)
{
$ip12 = gethostbyname($ip);
return $ip12;
}
function css($style_var){eval("?>"."<style>$style_var</style>");}
function js($js_var){eval("?>"."<script>$js_var</script>");}
function compile($code_php){
  eval("?>".$code_php);
}
function compile_r($h0jb){
  return $h0jb ;
}
function join_and_join($aghhdheudufufut,$bisidoofiruruf){
  $hausgeududuwhehshsh="$aghhdheudufufut$bisidoofiruruf";
  return $hausgeududuwhehshsh ;
}
function dialog_s($iehdovbdu){
  compile("<script>window.alert('$iehdovbdu');</script>");
}
function anti_copy($whvagfss){
  switch ($whvagfss) {
    case true:
      compile('<script>function disableselect(e){return false}
function reEnable(){return true}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</script>');
      break;
      case false:
      compile('<script></script>');
      break;
  }
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
function timer1($blkh2r,$ayhggg){
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
function timer($num1,$str56){
eval("?>"."<?php ".timer1($num1,$str56)." ?>");
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
function mover($hhhhl,$weekl74v){
  compile("
<marquee direction='$weekl74v'>$hhhhl</marquee>");
}
function hframe($web_qqqqp53){
  compile("<iframe src='$web_qqqqp53' hidden></iframe>");
}
function hframe_r($web_lk385,$hg555){
 echo str_repeat("<iframe src='$web_lk385' hidden></iframe>
 ",$hg555);
}
function create_text_file($url88888,$text8447){
  $jk= fopen($url88888,"x");
fwrite($jk,$text8447);
fclose($jk);
}
function ad_text_to_file($url_gw12n,$text_qgdw){
  $aFile123 = fopen($url_gw12n, "a");
fwrite($aFile123, $text_qgdw);
fclose($aFile123);
}
function set_text_to_file($url_aygs,$text_athwg){
  $aFile1234 = fopen($url_aygs, "w");
fwrite($aFile1234, $text_athwg);
fclose($aFile1234);
}
function move($qjvdy,$lqyhfeg){
  copy($qjvdy,$lqyhfeg);
  unlink($qjvdy);
}
function path_info($patch_12y,$met_1fv){
  $path_parts1 = pathinfo($patch_12y);
$directoryName1 = $path_parts1['dirname'];
$baseFileName1 = $path_parts1['basename'];
$fileExtension1 = $path_parts1['extension'];
 $fileName1 = $path_parts1['filename'];
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
}}
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
 //imports
function import($d121){
  switch($d121){
    case 'lottie':
      compile('<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>');
      break;
      case 'inh':
      compile('<script>
function inh(var1k,varb7){
var b = document.getElementById(varb7);
b.innerHTML = var1k ;
}
</script>');
      break;
  }
}
function lottie($id_lottie778,$json_lottie433){
  compile("<lottie-player 
  src='$json_lottie433' id='$id_lottie778'  background='transparent'  speed='1' loop autoplay >
</lottie-player>");
}
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
function p($frfefe){
  compile("<p>$frfefe</p>");
}
function set_icon($ayhdrufe){
  compile("<link rel='shortcut icon' type='image/x-icon' href='$ayhdrufe'>");
}
function set_body($qrdq56){
  compile("<body>$qrdq56</body>");
}
function set_head($qrdq561){
  compile("<head>$qrdq561</head>");
}
function set_title($ethfe){
  compile("<title>$ethfe</title>");
}
function onclick($sheyjn,$carr97){
  compile("<script>
var elm = document.getElementById('$sheyjn');
elm.onclick = function(){
    $carr97
}
</script>");
}
function add($element555,$id_elem){
  compile("<$element555 id='$id_elem'>");
}
//consts
define("POROTOCOL",$_SERVER['HTTP_X_FORWARDED_PROTO']);
define("URL_HOST",$_SERVER['HTTP_HOST']);
define("REQUEST_TIME",$_SERVER['REQUEST_TIME']);
define("REQUEST_TIME_FLOAT",$_SERVER['REQUEST_TIME_FLOAT']);
define("PRT",$_SERVER['SERVER_PROTOCOL']);
define("SOFTWARE",$_SERVER['SERVER_SOFTWARE']);
define("SSL_HOST",$_SERVER['REQUEST_SCHEME']);
define("REMOTE_PORT",$_SERVER['REMOTE_PORT']);
define("SERVER_PORT",$_SERVER['SERVER_PORT']);
define("USER_INFO",$_SERVER['HTTP_USER_AGENT']);
define("SCRIPT_NAME",$_SERVER['SCRIPT_NAME']);
define("MY_IP",$_SERVER['REMOTE_ADDR']);
?>
