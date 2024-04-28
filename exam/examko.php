<form method="post" action="">
<?php 
$con = mysqli_connect("localhost","root","root","user_login");
$sql = "SELECT * FROM users WHERE id=1";
$result = mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($result)){
    ?>
    <fieldset>
        <legend>UpdateForm</legend>
        Choose ID: <select name="idSelect" id="idSelect">
            <option value="<?php echo $row['id'];?>"><?php echo $row['id'];?></option>
        </select> <br><br>
        <label>UserName:</label>
        <input type="text" name="username" value="<?php echo $rows['username']?>"/><br><br>
        <label>Password:</label>
        <input type="password" name="password" value="<?php echo $rows['password']?>" /><br><br>
        <label>confirm password:</label>
        <input type="password" name="cpass" value="<?php echo $rows['password']?>"/><br><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $rows['email']?>"/><br><br>
        <?php } ?>
        <input type="submit" value="Update" name="update">
    </fieldset>
    </form>
</body>
</html>
<?php
if(isset($_POST['update'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $uid = $_POST['idSelect'];
    $updateSql = "UPDATE  users SET username='$username', password='$password',email='$email' WHERE id='$uid'";
      if(mysqli_query($con,$updateSql)){
        echo "Record updated!!!!!!!!!";
      }else{
        echo "sorry";
      }
  }
?>