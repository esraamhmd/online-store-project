<?php
// Assuming you have a database connection setup in config.php
include('config.php');

// Check if form is submitted
if(isset($_POST['submit_payment'])) {
    // Retrieve form data
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // SQL query to insert payment information into the payment table
    $insert_query = "INSERT INTO payment (CardNumber, ExpiryDate, CVV) VALUES ('$card_number', '$expiry_date', '$cvv')";

    // Execute the query
    if(mysqli_query($con, $insert_query)) {
        echo "<h2>Payment Information Inserted Successfully</h2>";
        // Optionally, you can redirect the user to a thank you page or display a success message
    } else {
        echo "<h2>Error: Unable to Insert Payment Information</h2>";
        // Optionally, you can display an error message or redirect the user to a different page
    }
}
?>
