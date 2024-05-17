<?php
session_start();

define('USERNAME', 'G221210577@sakarya.edu.tr');
define('PASSWORD', 'G221210577');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username === USERNAME && $password === PASSWORD){
        $_SESSION['loggedin'] = true;
        $_SESSION['password'] = $password;
        header("Location: welcome.php");
        exit;
    }
    else{
        echo "Invalid username or password.";
        header("refresh:3;login.html");
    }

}
?>
