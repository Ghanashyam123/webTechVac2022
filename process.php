<?php
 if(isset($_POST['register'])){
    $username = htmlspecialchars($_POST["username"]); 
    $password = htmlspecialchars($_POST['password']);
    $email = htmlspecialchars($_POST['email']);
    $imageUrl = null;
     if($_FILES['image']){
        // print_r($_FILES);
        // die;
        $fileType = $_FILES['image']['type'];
        echo $fileType;
        die;
        $filename = date("Y-m-d").$_FILES['image']['name'];
        $tempName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tempName, "images/".$filename);
        $imageUrl = $filename;    
     }
    //connection to database
    $con =mysqli_connect("localhost","root","root","vac_BCA");
    
    $sql = "insert into register(username,password,email,image) values('$username','$password','$email','$imageUrl')";
    if(mysqli_query( $con , $sql)) {
        echo "<script>alert('Register Successfully!');window.location='login.php';</script>";
    } else{
        die ("Error: ". mysqli_error($con));
    }

 }




?>