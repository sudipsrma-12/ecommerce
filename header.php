```php
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY E-COMMERCE</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>

    <h2>SUDIPEY STORE</h2>

    <nav>

        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="category.php">Categories</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="contact.php">Contact</a></li>

        <?php if (isset($_SESSION['auth'])) { ?>

            <li><a href="cart.php">Cart</a></li>
            <li><a href="logout.php">Logout</a></li>

        <?php } else { ?>

            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>

        <?php } ?>

    </nav>

</header>
```
