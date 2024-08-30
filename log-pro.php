<?php
include('config.php');

// Assuming your form submits username and password
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials match the predefined username and password
    if($username === 'esraa' && $password === '123') {
        // Credentials are correct, proceed with product upload
        if(isset($_POST['upload'])){
            $NAME = $_POST['name'];
            $PRICE = $_POST['price'];
            $IMAGE = $_FILES['image'];
            $IMAGE_LOCATION = $_FILES['image']['tmp_name'];
            $image_name = $_FILES['image']['name'];
            $image_up = "image_upload/".$image_name;
            $insert = "INSERT INTO prod(name, price, image) VALUES ('$NAME', '$PRICE', '$image_up')";
            mysqli_query($con, $insert);
            
            // Assuming your folder name is 'image_upload'
            if(move_uploaded_file($IMAGE_LOCATION, 'image_upload/'.$image_name)) {
                echo "<script>alert('The product has been Uploaded successfully')</script>";
            } else {
                echo "<script>alert('A problem occurred, the product was not uploaded')</script>";
            }
            header('location: index.php');
        }
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>
