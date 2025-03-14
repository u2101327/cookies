<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: index.php");
    exit();
}

$role = isset($_COOKIE['role']) ? base64_decode($_COOKIE['role']) : "unknown";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the CTF Challenge</h2>
    <p>Your current role is: <?php echo htmlspecialchars($role); ?></p>
    
    <?php if ($role === "lecturer"): ?>
        <p>Congratulations! Here is your flag:</p>
        <code><?php echo file_get_contents("flag.txt"); ?></code>
    <?php else: ?>
        <p>Access denied! Only lecturers can view the flag.</p>
    <?php endif; ?>
</body>
</html>
