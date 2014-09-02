<?php

	/*
		A little code to trace client side information.
	*/
	
	$ip = @$_SERVER['REMOTE_ADDR'];
	$compname = @gethostbyaddr($ip);
	$useragent = @$_SERVER['HTTP_USER_AGENT'];
	$referer = @$_SERVER['HTTP_REFERER'];
	
	$msg = "IP: ".$ip."\nCOMPNAME: ".$compname."\nUSERAGENT: ".$useragent."\nREFERER: ".$referer."\n";

	$myFile = "log.txt";
	$fh = @fopen($myFile, 'a');
	$string = "IP: ".$ip."\r\nCOMPNAME: ".$compname."\r\nUSERAGENT: ".$useragent."\r\nREFERER: ".$referer."\r\n----\r\n";
	fwrite($fh, $string);
	fclose($fh);
?>