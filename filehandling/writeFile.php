<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Ghanashyam Adhikari\n";
fwrite($myfile, $txt);
fclose($myfile);

ghanashyam adhikari 
?>