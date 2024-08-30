<?php
include('config.php');

// Assuming your form submits username, password, and confirm password
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if password and confirm password match
    if($password !== $confirm_password) {
        echo "<script>alert('Passwords do not match')</script>";
    } else {
        // Check if the username already exists in the database
        $check_query = "SELECT * FROM usersignup WHERE username='$username'";
        $check_result = mysqli_query($con, $check_query);
         
        if(mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('Username already exists')</script>";
        } else {
            // Insert the new user into the database
            $insert_query = "INSERT INTO usersignup (username, passw) VALUES ('$username', '$password')";
            $insert_result = mysqli_query($con, $insert_query);

            if($insert_result) {
                echo "<script>alert('Registration successful')</script>";
                // Redirect to login page or wherever you want after successful registration
                header('location: userlo.php');
            } else {
                echo "<script>alert('Registration failed')</script>";
            }
        }
    }
}
?>
