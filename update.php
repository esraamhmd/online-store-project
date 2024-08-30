<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Lora&family=Merriweather+Sans:wght@300&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:ital,wght@0,500;1,100;1,300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Products</title>
    <link rel="stylesheet" href="update.css">
</head>
<body class="back">
    <?php
    include('config.php');

    // Check if ID is set and is numeric
    if(isset($_GET['id']) && is_numeric($_GET['id'])) {
        $ID = $_GET['id'];

        // Fetch data for the product with the given ID
        $up = mysqli_prepare($con, "SELECT * FROM prod WHERE id=?");
        mysqli_stmt_bind_param($up, "i", $ID);
        mysqli_stmt_execute($up);
        $result = mysqli_stmt_get_result($up);
        $data = mysqli_fetch_array($result);
    } else {
        echo "Invalid product ID";
        exit;
    }

    // Update product if the form is submitted
    if(isset($_POST['update'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image']['name'];
        $target = "images/".basename($image);

        $update = mysqli_prepare($con, "UPDATE prod SET name=?, price=?, image=? WHERE id=?");
        mysqli_stmt_bind_param($update, "sdsi", $name, $price, $image, $ID);
        mysqli_stmt_execute($update);

        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }
    ?>

    <center>
        <div class="main">
            <form id="updateForm" action="up.php?id=<?php echo $ID; ?>" method="post" enctype="multipart/form-data">
                <h2>Update Products</h2>
                <input type="hidden" name="id" value="<?php echo $ID; ?>">
                <input type="text" name="name" class="nameproduct" value="<?php echo $data['name']; ?>">
                <br>
                <input type="text" name="price" value="<?php echo $data['price']; ?>">
                <br>
                <input type="file" id="file" name="image" style="display:none;">
                <label for="file">Update Photo</label>
                <button name="update" type="submit" id="updateBtn">Update Product</button>
                <br><br>
                <a href="products.php">All Products</a>
            </form>
        </div>
    </center>

    <script src="update.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var updateBtn = document.getElementById('updateBtn');
            updateBtn.addEventListener('click', function () {
                alert('Product updated successfully!');
            });
        });
    </script>
</body>
</html>
