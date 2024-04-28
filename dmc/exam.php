<html>
    <head>
        <title>Update form</title>
    </head>
    <style>
        body {
            margin-left: 300px;
            margin-right: 300px;
        }
        form{
            width: 350px;
        }
        </style>
    <body>
   <form method="post" action="">
    <fieldset>
        <legend>Update Form:</legend>
        Counrty : <select>
            <option value="India">India </option>
            <option>Nepal</option>
        </select>
        Choose ID: <select name="user_id" id="user_id" onchange="showData()">
            <?php
            $con = mysqli_connect("localhost","root","root","user_login");
            $sql = "SELECT id FROM users";
            $result = mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($result)){
                ?>   
            <option value="<?php echo $row['id']?>" <?php if($_GET['id']==$row['id']){ echo "selected";}?>><?php echo $row['id']?></option>
            <?php } ?>
        </select> <br><br>
     <?php
        if(isset($_GET['id'])){
            $id=$_GET['id']; // 2, 3
            $sql = "SELECT * FROM users WHERE id='$id'";
            $res = mysqli_query($con,$sql);
            while($rows=mysqli_fetch_assoc($res)){
      ?>
        UserName:<input type="text" name="username" value="<?php echo $rows['username']?>"><br><br>
        password:<input type="password" name="password" value="<?php echo $rows['password']?>"><br><br>
        confirm password:<input type="password" name="cpass" value="<?php echo $rows['password']?>"><br><br>
        Email:<input type="email" name="email" value="<?php echo $rows['email']?>"><br><br>
<?php } } ?>
    <input type="submit" name="update" value="Update">
    </fieldset>
   </form>
    </body>
    <script>
        function showData(){
            var id = document.getElementById('user_id').value;
            window.location="exam.php?id="+id;
        }
        </script>
</html>
<?php 
  if(isset($_POST['update'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $uid = $_GET['id'];
    $updateSql = "UPDATE  users SET username='$username', password='$password',email='$email' WHERE id='$uid'";
      if(mysqli_query($con,$updateSql)){
        echo "Record updated!!!!!!!!!";
      }else{
        echo "sorry";
      }

  }

?>