<?php
session_start();
if($_SESSION['email']){
echo "Welcome to Admin Dashboard!!";
}else{
    echo "<script>alert('Please Login First');window.location='login.php';</script>";
}

?>