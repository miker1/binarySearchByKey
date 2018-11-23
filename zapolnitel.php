<?php
define('ROOT', dirname(__FILE__));
$file = ROOT.'\keynumeric.txt';

 for ($i=0; $i < 300 ; $i++) {
 	$current = file_get_contents($file);
 	$current .= "ключ$i\\tзначение$i\\x0A";
 	file_put_contents($file, $current);
 }
