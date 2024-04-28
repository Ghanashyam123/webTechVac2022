<?php
if(isset($_POST['upload']) && isset( $_FILES["image"])) { 
       if($_FILES['image']['size']<1000000){
        $fileName = $_FILES['image']['name'];
        $file = $_FILES['image']['tmp_name'];
        move_uploaded_file($file,'photo/'.$fileName);
         echo "<script>alert('Upload Successful!')</script>";
       }else{
        echo "<script>alert('sorry choose another image')</script>";
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <form method="post" action="" enctype="multipart/form-data">
        <label>File </label>
        <input type="file" name="image" accept="image/*" />
        <br><br>
        <input type="submit"  value="Upload" name="upload"/>
    </form>
</body>
</html>