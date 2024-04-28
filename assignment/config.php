<?php
$con = mysqli_connect("localhost","root","root","user_login");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

write a server side script for implementing login. your program should take username and password  as input and redirect to home page if validated otherwise print an error "try again"
