<?php
$myfile = fopen("abc.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("abc.txt"));
fclose($myfile);
?>