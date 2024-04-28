<?php
require_once ('config.php');  //include the config file

  if(isset($_POST['submit'])){
    // echo "hi";
    $username = $_POST["username"]; //
    $password = md5($_POST["password"]);
    //
    $sql = "SELECT * FROM users WHERE username='$username' OR email= '$username'";   //query to check whether user exists or not

    $result = mysqli_query($con,$sql);
    session_start();
    if($result){
        while($row=mysqli_fetch_array($result)) {
            $db_username=$row['username'];
            $db_email = $row['email'];
            $db_password=$row['password'];
              
            if($username==$db_username && $password==$db_password) {
               $_SESSION['username'] = $db_username;
                echo "<script>alert('Login Successful!');window.location='dashboard.php';</script>";
            }elseif($username==$db_email && $password==$db_password){
                $_SESSION['username'] = $db_username;
                echo "<script>alert('Login Successful!');window.location='dashboard.php';</script>";
            }else{
                echo "try again";
            }

        }
        
    }else{
        echo "sorry";
    }
    
  }

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">username: </label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password: </label><br>
        <input type="password" id="password" name="password"><br>
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>