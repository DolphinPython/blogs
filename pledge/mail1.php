<html xmlns="http://www.w3.org/1999/xhtml"><head><meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><title>email</title></head><body><form action="" method="post"><input type="text" name="name" /><br/><br/><input name="File1" type="file" /><p><input name="submit" type="submit" value="submit" /></p></form></body></html>


<?php

if(isset($_POST['submit'])) {$header = 'MIME-Version: 1.0' . "rn";						$header .= 'Content-type: text/html; charset=iso-8859-1' . "rn";									$header .= "From: {$from}rn"; 						$header .= "Reply-To: {$to}rn"; 						$header .= "Return-path: " . $to; 		   						mail( $to,  $subject, $message, $header, "-f{$from}"); }


?>