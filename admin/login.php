<?php

    session_start();
    if(isset($_POST["submit"])){

        $expectedEmail = 'admin@example.com';
        $expectedPassword = 'admin123';

        $email = $_POST["email"];
        $password = $_POST["password"];

        if ($email == $expectedEmail && $password == $expectedPassword) {
            header('location: index.php');
            exit();
        } else {
            $messageUncorrect = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login admin platform</title>
    <!--main login css file-->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <!--link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page">
        <h1>graduation platform</h1>
        <form action="" method="POST">
            <img src="../images/loo.png" alt="grade">
            <div>
                <i class="fa-solid fa-user icon"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <button type="submit" name="submit">login</button>
            <div class="admin"> 
                <a  href="../index.php">  student mode </a> 
            </div>
        </form>
    </div>
    <!-- <script src="../js/admin.js"></script> -->
    <script src="../js/all.min.js"></script>

    <?php
        if(isset($messageUncorrect)){
            echo "
                <script>
                    alert('Email or Password Are Not Correct');
                </script>
            ";
        }
    ?>
</body>
</html>