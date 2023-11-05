<?php

    include('config.php');
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $select = mysqli_query($conn, "SELECT * FROM `student_login` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);
            $_SESSION['user_id'] = $row['id'];
            header('location: students/index.php');
        }
        $message = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login platform</title>
    <!--main login css file-->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <!--link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="page">
        <h1>graduation platform</h1>
        <form action="" method="POST">
            <img src="images/loo.png" alt="grade">
            <div>
                <i class="fa-solid fa-user icon"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div class="admin"> 
                <a href="admin/login.php">  admin mode  </a> 
                <a href="forgetpass.php">  forgot password?</a> 
            </div>
            <button type="submit" name="submit">login</button>
            <div class="link">
                <p>Don't have an account?</p>
                <a href="register.php">register</a> 
            </div>
        </form>
    </div>
    
    <!-- <script src="js/main(sign in).js"></script>  -->
    <script src="js/all.min.js"></script>

    <?php
        if(isset($message)){
            echo "
                <script>
                    alert('Email or Password Are Not Correct');
                </script>
            ";
        }
    ?>
</body>
</html>