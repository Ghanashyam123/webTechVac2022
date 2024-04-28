<?php
session_start();
if($_SESSION['username']){
    session_destroy();
    echo "<script>alert('logout Successful!');window.location='login.php';</script>";

}
?>