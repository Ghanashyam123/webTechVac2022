<?php
  if(isset($_POST['register'])){
   //  validate data
   $username = $_POST['username']; // unique
   $password = $_POST['password']; // encrypt
   $email = $_POST['email'];   // unique 
   $cpassword = $_POST['cpassword'];
   // password and confirm password check
   if($password != $cpassword){
    echo "<script>alert('Password does not match')</script>";
    exit();
   }
   //password encrpt
   $password = md5($password);

   $con = mysqli_connect("localhost","root","root","user_login");
   if(!$con){
     echo "Connection Failed!";
   }else{
   	// check username and email is already
    // exist or not in the database.
    $checkSqlUsername = "SELECT * FROM users WHERE username='".$username."'";
    $resultUserCheck = mysqli_query($con,$checkSqlUsername);
    $checkEmail = "SELECT * FROM users WHERE email='".$email."'";
    $resEmail = mysqli_query($con, $checkEmail);
    if (mysqli_num_rows($resultUserCheck) > 0) {
        echo "<h2 style=color:red>Username is already registered!!!</h2>";
        die;
    }elseif(mysqli_num_rows($resEmail)>0){
            echo  "<h2>This Email Is Already Registered !</h2>";
            die;
    }else{
        $sqlInsert = "INSERT INTO users(username,password,email) VALUES('$username','$password','$email')";
        if(mysqli_query($con,$sqlInsert)){
            echo "Register data successfully!!!!";
        }else{
          echo "Failed to register data!!!";
        }
    }
    

   }
   

   



  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration form</h2>
    <form method="post" action="">
        <input type="text" name="username"  placeholder="Enter username"/>
        <br/> <br/>
        <input type="email" name="email"  placeholder="Enter email"/>
        <br/> <br/>
        <input type="password" name="password"  placeholder="Enter Password"/>
        <br/> <br/>
        <input type="password" name="cpassword"  placeholder="Enter Confirm Password"/>
        <br/> <br/>
        <input type="submit" value="Register" name="register">
    </form>
</body>
</html>