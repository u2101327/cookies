<?php
session_start();

// Hardcoded login credentials (visible in page source)
$username = "student";
$password = "p@ssw0rd";

if (isset($_POST['login'])) {
    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        setcookie("role", base64_encode("student"), time() + 3600, "/");
        $_SESSION['loggedin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid credentials!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="login" value="Login">
    </form>
    <!-- Hint: Username = student, Password = p@ssw0rd -->
</body>
</html>
