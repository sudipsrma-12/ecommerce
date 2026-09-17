<?php
require_once 'header.php';
require_once 'connection.php';
if(!isset($_SESSION['auth'])){
    $_SESSION['error']="Login to access this page";
    header("Location:login.php");
    exit;
}
if(!empty($_POST)){
    $name=$_POST['name'];
    $sql="INSERT INTO category(name)VALUES('$name')";
    if(mysqli_query($conn,$sql)){
        $_SESSION['success']="Category added successfully";
        header("Location:index.php");
    }else{
        $_SESSION['error']="Error adding category";
        header("Location:add-category.php");
    }
}

$query="SELECT * FROM category";
$data = mysqli_query($conn,$query);


?>
<form action="" method="post">
    Category Name: <input type="text" name="name" required> <br><br>
    <button>Add Category</button>
</form>

<ul>
    <?php foreach($data as $category){ ?>
        <li><?php echo $category['name']; ?></li>
    <?php } ?>
</ul>


<?php
require_once 'footer.php';
?>
