<?php
include('config.php');
if (isset($_POST['Add'])) {
    $NAME = $_POST['name'];
    $PRICE = $_POST['price'];
    $insert = "INSERT INTO addcard(name,price) VALUES ('$NAME','$PRICE')";
    mysqli_query($con, $insert);
    header('location:card.php');
}











?>