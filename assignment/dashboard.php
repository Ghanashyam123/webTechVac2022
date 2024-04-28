<?php
session_start();
if($_SESSION['username']){
    echo "welcome to admin panel ".$_SESSION['username'];
    echo "<a href='logout.php'>LogOut</a>"; 
}else{
    echo "<script>alert('Please Goto login page');window.location='login.php';</script>";

    

}



?>