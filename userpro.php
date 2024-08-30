<?php
include('config.php');

// Assuming your form submits username and password
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the provided credentials match the predefined username and password
    if($username === 'esraa' && $password === '123') {
        // Credentials are correct
        echo "<script>alert('Correct information')</script>";
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>
