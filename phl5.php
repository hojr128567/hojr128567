<?php
define("POROTOCOL",$_SERVER['HTTP_X_FORWARDED_PROTO']);
define("URL_HOST",$_SERVER['HTTP_HOST']);
define("REQUEST_TIME",$_SERVER['REQUEST_TIME']);
define("REQUEST_TIME_FLOAT",$_SERVER['REQUEST_TIME_FLOAT']);
define("__ROOT__",$_SERVER['CONTEXT_DOCUMENT_ROOT']);
define("PRT",$_SERVER['SERVER_PROTOCOL']);
define("SOFTWARE",$_SERVER['SERVER_SOFTWARE']);
define("REQUEST_SCHEME",$_SERVER['REQUEST_SCHEME']);
define("REMOTE_PORT",$_SERVER['REMOTE_PORT']);
define("SERVER_PORT",$_SERVER['SERVER_PORT']);
define("HTTP_USER_AGENT",$_SERVER['HTTP_USER_AGENT']);
define("SCRIPT_NAME",$_SERVER['SCRIPT_NAME']);
define("__IP__",$_SERVER['HTTP_X_REAL_IP']);
define("MY_IP",$_SERVER['REMOTE_ADDR']);
?>
