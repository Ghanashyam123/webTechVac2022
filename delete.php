<?php
if(isset($_POST['del'])){
    $imageUrl = $_POST['imageName'];
    unlink("images/".$imageUrl);  // delete the image from server  
    $id = $_POST['id'];
    $con =mysqli_connect("localhost","root","root","vac_BCA");
    $sql = "DELETE FROM register WHERE id='$id'"; 

     if (mysqli_query($con,$sql)) {
        echo "<script>alert('Deleted');window.location.href='displayData.php';</script>";

}
}


?>