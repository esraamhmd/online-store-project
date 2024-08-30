<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lora&family=Merriweather+Sans:wght@300&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,500;1,100;1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <script>
        function validateForm() {
            var name = document.getElementById("name").value;
            var price = document.getElementById("price").value;
            var file = document.getElementById("file").value;

            // Name validation: must be a string
            if (!/^[A-Za-z\s]+$/.test(name)) {
                alert("Name must contain only letters.");
                return false;
            }

            // Price validation: must be a number
            if (isNaN(parseFloat(price))) {
                alert("Price must be a valid number.");
                return false;
            }

            // File validation: not empty
            if (name === "" || file === "") {
                alert("Please fill out all fields and select an image.");
                return false;
            }

            // If all validations pass, show success message
            alert("Product uploaded successfully!");
            return true;
        }
    </script>
</head>
<body class="back">
    <center>
        <div class="overlay">
            <div class="main">
                <form id="productForm" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
                    <h2>Women's fashion store online</h2>
                    <img src="image store/store1.jpg" alt="logo" width="450px" height="250px">
                    <input type="text" name="name" id="name" class="nameproduct" placeholder="Product Name">
                    <br>
                    <input type="text" name="price" id="price" placeholder="Price">
                    <br>
                    <input type="file" id="file" name="image" style="display:none;">
                    <label for="file">Product Selection</label>
                    <button type="submit" name="upload">Upload the product ✅</button>
                    <br><br>
                    <a href="products.php">All Products</a>
                </form>
            </div>
        </div>
    </center>
</body>
</html>
