<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    header("login.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>
    <h2>Hoş Geldiniz, <?php echo htmlspecialchars($_SESSION['password']); ?>!</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>