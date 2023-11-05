<?php
    include 'config.php';
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO `student_login`(`name`, `email`, `password`) VALUES (? , ? , ?)");
    $stmt->execute(array($name, $email, $password));
    $count = $stmt->affected_rows;
    if ($count > 0) {
        echo json_encode(array("status"=> "success"));
    } else {
        echo json_encode(array("status"=> "error"));
    }
?>