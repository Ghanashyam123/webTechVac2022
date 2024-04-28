<?php
// anonymous

// if(!isset($_SERVER['PHP_AUTH_USER'])){
//     echo "User  not logged in";
//     exit;
// }else{
//     $username=$_SERVER['PHP_AUTH_USER'];
//     echo  "Welcome ".$_SERVER['PHP_AUTH_USER'].$username;
// }
define('USE_AUTHENTICATION',1);
define('USERNAME','admin');
define('PASSWORD','admin');
if(USE_AUTHENTICATION==1){
    if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) ||
     $_SERVER['PHP_AUTH_USER'] != USERNAME || $_SERVER['PHP_AUTH_PW'] != PASSWORD){
        header('WWW-Authenticate: Basic realm="My Realm"');
        header('HTTP/1.0  401 Unauthorized');
        die("Not authorised");
    }else{
        echo  'You are authenticated as '.htmlentities($_SERVER['PHP_AUTH_USER']);
    }

}


?>

