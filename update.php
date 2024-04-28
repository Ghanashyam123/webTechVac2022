<?php
 $con =mysqli_connect("localhost","root","root","vac_BCA");

if(isset($_GET['id'])){
    $id=$_GET['id'];
 $sql = "SELECT * FROM register WHERE id='$id'";
 $result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up form</title>
</head>
<body>
    <h1><center>Register Form</center></h1>
    <fieldset>
        <legend>Personal Information: </legend> 
        <form action="" method="POST">
            <?php
             while($row=mysqli_fetch_array( $result )) { ?>
            
            <label>username </label>
            <input type="text" name="username" value="<?php echo $row['username']?>"><br><br>
            <label>Password : </label>
            <input type="password" name="password" value="<?php echo $row['password']?>"><br><br>
            <label>email </label>
            <input type="email" name="email" value="<?php echo $row['email']?>"><br><br>
            <input type="submit" name="update" value="update">
            <input type="reset">
            <?php } ?>
        </form>
    </fieldset>
</body>
</html>

<?php } ?>

<?php 
 // update data
 if(isset($_POST['update'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql1 = "UPDATE register SET username='$username',password='$password',email='$email' WHERE id='$id'";
    if(mysqli_query($con,$sql1)){
        echo  "<script>alert('Update Successfully!');window.location.href='displayData.php';</script>";

    }
 }


?>

