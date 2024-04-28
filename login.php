<?php
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost","root","root","vac_BCA");
    $sql = "SELECT * FROM register WHERE email='$email'  AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) >0){
        session_start();
        $_SESSION["username"]=$email;//
         echo "<script>alert('Login Success');window.location='displayData.php';</script>";
    }else{
        echo "<script>alert('Email or Password is incorrect! Please try again')</script>";
        }
    }

?>
<!doctype html>
<html>
	<head>
		<title> Modern Login Window : CSS lab Assignment</title>
		<link rel="stylesheet" href="css/style.css"> 
	</head>
	<body>
		<div class="login">
			<form action="" method="post">
				<table>
					<tr>
						<th><b id="b1">LOGIN WINDOW</b></th>
					</tr>
					<tr>
						<td><input type="email" placeholder="Your Email Address" name="email"/></td>
					</tr>
					<tr>
						<td><input type="password" placeholder="Your Password" name="password"/></td>
					</tr>
					<tr>
						<td>
							<input id="ch1" type="checkbox" placeholder="Your Password"/><label for="ch1">Agree With</label>
							<a href="#">Terms & Condition</a>
						</td>
					</tr>
					<tr>
						<td><input type="submit" value="Login" name="login"/>
					<p>lost your password</p>
					<p>Don't have an account? signup</p>
					</td>
					</tr>
				</table>
			</form>
		</div>
	</body>
</html>