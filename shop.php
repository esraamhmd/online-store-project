<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lora&family=Merriweather+Sans:wght@300&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,500;1,100;1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lora&family=Merriweather+Sans:wght@300&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Protest+Riot&family=Roboto:ital,wght@0,500;1,100;1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="shop.css">
</head>
<body class="product">
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="card.php">My Card</a>
    </nav>
    <center>
        <h3>All Available Products</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM prod");
    while ($row = mysqli_fetch_array($result)) {
        echo "
        <center>
        <main >
            <div class='card' style='width: 21rem; '>
                <img src=' $row[image] ' class='card-img-top' >
                <div class='card-body'>
                    <h5 class='card-title'>  $row[name]  </h5>
                    <p class='card-text'> $row[price]  </p>
                    <a href='val.php?id=$row[id]' class='btn btn-success addToCartBtn'>Add product to cart</a>
                </div>
            </div>
        </main>
        <center>
        ";
    }
    ?>
    <script>
        // JavaScript code to handle the click event on the "Add product to cart" button
        document.addEventListener('DOMContentLoaded', function () {
            var addToCartButtons = document.querySelectorAll('.addToCartBtn');
            addToCartButtons.forEach(function (button) {
                button.addEventListener('click', function (event) {
                    event.preventDefault(); // Prevent the default behavior of the link

                    // Display a confirmation dialog
                    if (confirm("Are you sure you want to add this product to your cart?")) {
                        // If user clicks OK, redirect to the link's URL (val.php)
                        window.location.href = event.target.getAttribute('href');
                    }
                });
            });
        });
    </script>
    <script src="shop.js"></script>
</body>
</html>
