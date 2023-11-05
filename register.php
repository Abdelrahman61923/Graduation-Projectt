<?php
    include 'config.php';
    
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpassword'];

        if ($pass === $cpass) {
            
            $select = mysqli_query($conn, "SELECT * FROM `student_login` WHERE email = '$email' AND password = '$pass'") or die('query failed');

            if(mysqli_num_rows($select) > 0){
                $userExist = true;
            }
            else{
                mysqli_query($conn, "INSERT INTO `student_login`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
                header('location: index.php');
            }
        } 
        else {
            $unCorrectPass = true;
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login platform</title>
    <!--main login css file-->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/all.min.css">
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
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div>
                <i class="fa-solid fa-envelope icon"></i>
                <input type="email" name="email" placeholder="University Email" required>
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="pass" placeholder="Password" required>
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="cpassword" placeholder="Repeat the password" required>
            </div>
            <button type="submit" name="submit">sign up </button>
        </form>
    </div>
    
    <!-- <script src="js/register.js"></script> -->
    <script src="js/all.min.js"></script>

    <?php

        if(isset($userExist)){
            echo "
                <script>
                    alert('Username Already Exist Please Change Email');
                </script>
            ";
        }

        if(isset($unCorrectPass)){
            echo "
                <script>
                    alert('Please Enter The Same Password');
                </script>
            ";
        }
    ?>
</body>
</html>