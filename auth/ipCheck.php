<?php


//Authentication by IP address and domain
//print_r($_SERVER['REMOTE_ADDR']);
// $ip = $_SERVER['REMOTE_ADDR'];
// echo $ip;
// $details = json_decode(file_get_contents("https://ipinfo.io/{49.244.107.205}"));
// echo $details->country; // -> "US"
// if($details->country=='NP'){
// }

// die;  // http://2.16.170.51/
$acceptIP = array("2","16","170","51"); 
$remoteIP =  $_SERVER["REMOTE_ADDR"]; //Getting visitor's IP Address //192.168.1.1
$remote = explode( ".", $remoteIP );
$match=null;
for($i=0;$i<sizeof( $acceptIP);$i++) {
	if ($remote[$i] != $acceptIP[$i]) {  //remote[0] != acceptip[0] // 192 != 127 0 != 0
        $match = 0;  //
    }
}
if($match){
    echo "<h2>Access Granted!</h2>";
}else{
    echo "<h2>Sorry</h2>";
    echo "Your IP address is not authorized to view this page.";
    exit();
}
?>