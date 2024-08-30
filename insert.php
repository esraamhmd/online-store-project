<?php
include('config.php');
if(isset($_POST['upload'])){
    $NAME = $_POST['name'];
    $PRICE=$_POST['price'];
    $IMAGE=$_FILES['image'];
    $IMAGE_LOCATION=$_FILES['image']['tmp_name'];
    $image_name =$_FILES['image']['name'];
    $image_up ="iamge_upload/".$image_name;
    $insert="INSERT INTO prod(name,price,image) VALUES ('$NAME','$PRICE','$image_up')";
    mysqli_query($con,$insert);
    //if(move_uploaded_file($IMAGE_LOCATION,'iamge_upload/'.$image_name))

    //{ // Corrected folder name to 'image_upload'
       // echo "<script>alert('The product has been Uploaded successfully')</script>";
    //}
    //else{
       // echo "<script>alert('A problem occurred, the product was not uploaded')</script>";
    //}
    header('location: index.php');

    


}

?>