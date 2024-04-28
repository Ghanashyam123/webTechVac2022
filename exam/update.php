<?php
if(isset($_GET['id'])){   
}else{
    $_GET['id']=null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <style>
        form{
            width: 350px;
        }
        body{
            margin-left: 100px;
            margin-right: 100px;
        }
    </style>
</head>
<body>
    
<form method="post" action="">
    <fieldset>
        <legend>UpdateForm</legend>
        Choose ID: <select name="idSelect" id="idSelect" onchange="showData()">
<?php 

$con = mysqli_connect("localhost","root","root","user_login");
$sql = "SELECT id FROM users ORDER BY  id";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    ?>
            <option value="<?php echo $row['id'];?>" <?php if($_GET['id']==$row['id']){echo "selected";}?>><?php echo $row['id'];?></option>
            <?php } ?>

        </select> <br><br>
        <?php
        if(isset($_GET['id'])){
            $uid = $_GET['id'];
            $sqlU = "SELECT * FROM users WHERE id='$uid'";
            $res = mysqli_query($con,$sqlU);
            while($rows=mysqli_fetch_assoc($res)){
        ?>
        <label>UserName:</label>
        <input type="text" name="username" value="<?php echo $rows['username']?>"/><br><br>
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $rows['password']?>" /><br><br>
        <label>confirm password:</label>
        <input type="password" name="cpass" value="<?php echo $rows['password']?>"/><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $rows['email']?>"/><br><br>
        <?php } }else{
            $sqlFirst = "SELECT * FROM users WHERE id=1";
            $firstRecord = mysqli_query($con,$sqlFirst);
            while($data=mysqli_fetch_assoc($firstRecord)){
                
            ?>
            <label>UserName:</label>
        <input type="text" name="username" value="<?php echo $data['username']?>"/><br><br>
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $data['password']?>" /><br><br>
        <label>confirm password:</label>
        <input type="password" name="cpass" value="<?php echo $data['password']?>"/><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $data['email']?>"/><br><br>
        <?php } } ?>
        <input type="submit" value="Update" name="update">
    </fieldset>
    </form>
</body>
</html>
<script>
    function  showData(){
        var selectID = document.getElementById('idSelect').value
        window.location='update.php?id='+selectID;
    }
</script>
<?php 
   if(isset($_POST['update'])){
    $eid = $_GET['id'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $sql = "UPDATE users SET username='$username', password='$pass', email='$email' 
    WHERE id='$eid'";
    if(mysqli_query($con,$sql)){
        echo  "<script>
        alert('Record Updated Successfully');
        location.href='update.php';
        // console.log(eid);
        // window.location.replace='http://localhost:8888/vac_php/exam/update.php';
        // console.log(
        // window.location.reload(true);
        </script>";
       
    //   header("Location:update.php?id=". $eid ."");
    //   exit();

    }
   }

?>

