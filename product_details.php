
<?php
require_once "header.php";
require_once "connection.php";

$slug = $_GET['slug'];

$sql = "SELECT * FROM products WHERE slug='$slug'";

$result = mysqli_query($conn, $sql);

$product = mysqli_fetch_assoc($result);
?>

<h1><?php echo $product['title']; ?></h1>

<img src="images/<?php echo $product['image']; ?>"
     width="300"
     height="300">

<h2>Rs. <?php echo $product['price']; ?></h2>

<p><?php echo $product['description']; ?></p>

<button>Add to Cart</button>

<?php
require_once "footer.php";
?>
