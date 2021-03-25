<?php
	$str = file_get_contents($argv[1]);
	$str = str_replace('\r', '', $str);
	file_put_contents("out.txt", json_encode($str));
?>
