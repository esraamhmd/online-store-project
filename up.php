<?php
include('config.php');
if(isset($_POST['update'])){
    $ID= $_POST['id'];
    $NAME =$_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    $IMAGE_LOCATION=$_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="iamge_upload/".$image_name;
    $update="UPDATE prod SET name='$NAME',price='$PRICE',image='$image_up' WHERE id=$ID ";
    mysqli_query($con,$update);
    if(move_uploaded_file($IMAGE_LOCATION,'iamge_upload/'.$image_name))
    { 
        echo "<script>alert('The product has been Updated successfully')</script>";
    }
    else{
        echo "<script>alert('A problem occurred, the product was not uploaded')</script>";
    }
    header('location: index.php');

}

?>




