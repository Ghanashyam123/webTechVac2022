<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login Form</h2>
    <form action="" method="post">
        Username <input type="text" name="username" ><br><br>
        Password <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="login"> <br><br>
        <a href="#">Lost your password?</a> <br><br>
        Don't have an account? <a href="#">Signup here!</a>
    </form>
</body>
</html>
<?php 
  if(isset( $_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = mysqli_connect("localhost","root","","TU");
    $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
     if(mysqli_query($con,$sql)){
        session_start();
        $_SESSION['username'] = $username;
        echo "login successfully!!!!!";
     }else{
        echo "Sorry Try again!!!";
     }
    }
?>