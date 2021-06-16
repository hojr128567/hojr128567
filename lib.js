function inh(var1k,varb7){
var b = document.getElementById(varb7);
b.innerHTML = var1k ;
}
function compile_j(t128){
  eval(document.write(t128));
}
function anti_copy(){
  function disableselect(e){return false}
function reEnable(){return true}
//if IE4+
document.onselectstart=new Function ("return false")
//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
}
function redirect(url){
  window.location.href=url;
}
function anti_right_click(){
  var message="";
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
document.oncontextmenu=new Function("return false");
}
function preform_click(id7){
  document.getElementById(id7).click();
}
function set_text(id75,text75){
  document.getElementById(id75).innerHTML = text75;
}
function copy_text(vv){
  let myVar=vv;
navigator.clipboard.writeText(myVar);
}
