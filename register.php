<?php
require_once "header.php";
require_once "connection.php";

if (!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users (name, email, password, gender)
            VALUES ('$name', '$email', '$password', '$gender')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $_SESSION['success'] = "Account created successfully";
        header("Location: register.php");
    } else {
        $_SESSION['error'] = "Account not created";
        header("Location: login.php");
    }
}

?>

<h1 class="login-title">Create Account</h1>

<div class="login-container">
    <div class="login-card">

        <h2>Register</h2>
        <p class="login-subtitle">Create your new account</p>

        <form action="" method="post">

            <div class="input-group">
                <label>Name</label>
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <div class="input-group">
                <label>Gender</label>
                <select name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <button type="submit" class="login-btn">
                Register
            </button>

            <p class="register-text">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

        </form>

    </div>
</div>

<?php 
require_once "footer.php";

?>