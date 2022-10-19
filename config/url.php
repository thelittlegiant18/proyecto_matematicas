<?php
	$protocol = $_SERVER['PROTOCOL'] = isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS']) ? 'https://' : 'http://';
	$host = $_SERVER["HTTP_HOST"];
	$url = substr($_SERVER["REQUEST_URI"],0,22);
	$url_sup = $protocol.$host.$url;
	$SERVERURL = $url_sup;
	//print_r($SERVERURL);
?>