<?php
    include('config.php');
    if(isset($_POST["submit"])){
        $email = $_POST['email'];
        $newPassword = $_POST['new_password'];

        $select = mysqli_query($conn, "SELECT * FROM `student_login` WHERE email = '$email'") or die('query failed');

        if(mysqli_num_rows($select) > 0){
            $row = mysqli_fetch_assoc($select);

            $update = mysqli_query($conn, "UPDATE `student_login` SET password = '$newPassword' WHERE id = " . $row['id']);

            if($update){
                $truemessage = true;
                header('location: index.php');
                exit();
            }
        } 
        // لو الايميل مش موجود يعنى دخل الايميل غلط هيطبع الرساله دى
        else {
            $message = true;
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
            <img src="images/loo.png" alt="logo">
            <div>
                <i class="fa-solid fa-user icon"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div>
                <i class="fa-solid fa-lock icon"></i>
                <input type="password" name="new_password" placeholder="enter your last password" required>
            </div>
            <button type="submit" name="submit">next</button>
        </form>
    </div>

    <script src="js/all.min.js"></script>

    <?php
        if(isset($truemessage)){
            echo "
                <script>
                    alert('The password has been changed successfully');
                </script>
            ";
        }
        if(isset($message)){
            echo "
                <script>
                    alert('Email Is Not Correct');
                </script>
            ";
        }
    ?>
</body>
</html>
