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
    <title>My card</title>
    <link rel="stylesheet" href="card.css">
</head>
<body>
    <center>
        <h3>Your reserved products.</h3>
    </center>
    
    <center> <!-- Center tag to center the table -->
        <main>
            <table id="productTable" class="table">
                <thead>
                    <tr>
                        <th scope="col">Product name</th>
                        <th scope="col">Product price</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('config.php');
                    $result = mysqli_query($con, "SELECT * FROM addcard");
                    while($row = mysqli_fetch_array($result)) {
                        echo "
                        <tr>
                            <td>$row[name]</td>
                            <td>$row[price]</td>
                            <td><a href='del_card.php?id=$row[id]' class='btn btn-danger'>Delete</a></td>
                        </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </main>
    </center>
    
    <center>
        <h4>Total Price: <span id="totalPrice">0</span></h4>
        <a href="shop.php">Back to product page</a>
        <br><br><br>
        <a href="payment.php" class="btn btn-primary">Proceed to Payment</a>
    </center>
    
    <script src="card.js"></script>
       
</body>
</html>
