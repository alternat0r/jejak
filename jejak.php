<?php

	/*
		A little code to trace client side information.
	*/
	error_reporting(0);
	ini_set('display_errors', 0);
	date_default_timezone_set('Asia/Kuala_Lumpur');

	
	$ip = @$_SERVER['REMOTE_ADDR'];
	$compname = @gethostbyaddr($ip);
	$useragent = @$_SERVER['HTTP_USER_AGENT'];
	$referer = @$_SERVER['HTTP_REFERER'];
	$today = date("m.d.y-H.i.s-"); 
	
	$msg = "IP: ".$ip."\nCOMPNAME: ".$compname."\nUSERAGENT: ".$useragent."\nREFERER: ".$referer."\n";

	$myFile = "log_".$today.".txt";
	$fh = @fopen($myFile, 'a');
	$string = "IP: ".$ip."\r\nCOMPNAME: ".$compname."\r\nUSERAGENT: ".$useragent."\r\nREFERER: ".$referer."\r\n----\r\n";
	fwrite($fh, $string);
	fclose($fh);
?>
