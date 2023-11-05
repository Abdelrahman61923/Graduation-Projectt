<?php
    include 'config.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM `student_login` WHERE `password` = ? AND email = ?");
    $stmt->execute(array($email, $password));
    $count = $stmt->affected_rows;
    if ($count > 0) {
        echo json_encode(array("status"=> "success"));
    } else {
        echo json_encode(array("status"=> "error"));
    }
?>