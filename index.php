<?php
require_once "header.php";
require_once "connection.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<section class="container">
    <h1>PRODUCT LIST</h1>
    <div class="product-list">
        <?php foreach ($result as $product){ ?>
           <div class="product-box">
                <div class="product-image">
                    <img src="images/<?php echo $product['image']; ?>"
                    alt="<?php echo $product['title']; ?>" >
                </div>
                <div class="product-title">
                    <h2><?php echo $product['title']; ?></h2>
                </div>
                <div class="product-description">
                    <p><?php echo $product['description']; ?></p>
                </div>
                <div class="product-order">
                    <a class="btn btn-primary" href="product_details.php?slug=<?php echo $product['slug']; ?>">
                        product details
                    </a>
                </div>
            </div>
            <?php } ?>
    </div>
</section>

<?php require_once "footer.php"; ?>