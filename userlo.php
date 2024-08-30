<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <center>
        <h2>user Login</h2>
        <form action="shop.php" method="post"> <!-- Changed action to index.php -->
            <input type="text" name="username" placeholder="Username" required><br><br>
            <input type="password" name="password" placeholder="Password" required><br><br>
            <button type="submit" name="login">Login</button>
        </form>
        <br>
        <p>Don't have an account? <a href="usersi.php">Sign Up</a></p>
    </center>
</body>
</html>
