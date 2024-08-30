<?php
include('config.php');
$ID=$_GET['id'];
$up=mysqli_query($con,"SELECT * FROM prod WHERE id=$ID");
$data=mysqli_fetch_array($up);


?>
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
    <link rel="stylesheet" href="val.css">
    <title>confirm purphase</title>
    
</head>
<body>
    
    <center>
        <div class="main">
           <form action="insert_card.php" method="post">
               <h2>Do you  really want to buy product?</h2>
               <input type="text" name="id" value='<?php echo $data['id']?>'>
               <input type="text" name="name" value='<?php echo $data['name']?>'>
               <input type="text" name="price" value='<?php echo $data['price']?>'>
               <button name="Add"type="submit" class="btn btn-warning"> confirm add product to card</button>
               <br>
               <a href="shop.php" style="color:red">back to product page</a>
               </form>
        </div>
    </center>
    
    <script> src="val.js"</script>
</body>
</html>






