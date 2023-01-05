<?php 
$meta_valide = "draw";
$reponse = 0;

if ($meta_valide == $_POST['photo']) {
	$reponse = 1;
}
else {
	$reponse = 0;
}


function redirection($url){
	if (headers_sent()){
	print('<meta http-equiv="refresh" content="0;URL='.$url.'">');
	}
	else {
	header("Location: $url");
	}
}


if ($reponse == 1) {
	redirection ('klsdflop.html');
}
else {
	redirection ('login_error.php');
}

?>