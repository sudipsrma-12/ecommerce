
<?php
require_once "header.php";
require_once "connection.php";

if (isset($_GET['category'])) {

    $category = $_GET['category'];

    $sql = "SELECT * FROM products WHERE category='$category'";

} else {

    $sql = "SELECT * FROM products";

}

$result = mysqli_query($conn, $sql);
?>

<h1>Products</h1>

<?php while ($product = mysqli_fetch_assoc($result)) { ?>

    <div>

        <img src="images/<?php echo $product['image']; ?>"
             width="150"
             height="150">

        <h2><?php echo $product['title']; ?></h2>

        <p><?php echo $product['description']; ?></p>

        <p>Rs. <?php echo $product['price']; ?></p>

        <a href="product_details.php?slug=<?php echo $product['slug']; ?>">
            View Product
        </a>

    </div>

    <hr>

<?php } ?>

<?php
require_once "footer.php";
?>

