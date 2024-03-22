<?php
 if(isset($_POST['register'])){
    $username = $_POST["username"]; 
    $password = $_POST['password'];
    $email = $_POST['email'];
    //connection to database
    $con =mysqli_connect("localhost","root","root","vac_BCA");
    $sql = "insert into register(username,password,email) values('$username','$password','$email')";
    if(mysqli_query( $con , $sql)) {
        echo "<script>alert('Register Successfully!');window.location='login.php';</script>";
    } else{
        die ("Error: ". mysqli_error($con));
    }

 }




?>