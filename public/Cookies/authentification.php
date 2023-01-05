<?php
$log = $_COOKIE["login"]; 
$admin = "admin";
function redirection($url){
	if (headers_sent()){
	print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
	}
	else {
	header("Location: $url");
	}
}


if ($log == "admin") {
	redirection ('/Cookies/gufiughsdqkgujh.html');
}
else {
	redirection ('/Cookies/login_error.php');
}

?>