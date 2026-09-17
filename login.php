<?php
require_once "header.php";
require_once "connection.php";

if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['success'] = "Login successful";
        $_SESSION['auth'] = $user;
        header("Location: index.php");
    }
     else {
        $_SESSION['error'] = "Invalid email or password";
        header("Location: login.php");
        exit();
    }
}
?>

<h1 class="login-title">Welcome Back</h1>

<div class="login-container">
    <div class="login-card">

        <h2>Login</h2>
        <p class="login-subtitle">Login your account</p>

        <form action="" method="post">

            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="login-btn">Login</button>

            <p class="register-text">
                Don't have an account?
                <a href="register.php">Register</a>
            </p>

        </form>

    </div>
</div>

<?php
require_once "footer.php";
?>