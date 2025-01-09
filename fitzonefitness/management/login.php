<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * FROM staff WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    
    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['fullname'] = $row['fullname'];

            $_SESSION['message'] = "Login successful!";
            $_SESSION['message_type'] = "success";
            header("Location: admin.php");
            exit();
        }
        else {
            $_SESSION['message'] = "Invalid user name or password";
            $_SESSION['message_type'] = "error";
            header("Location: " . $_SERVER['HTTP_REFERER']);
            exit();
        }
    } else {
        $_SESSION['message'] = "User not found";
        $_SESSION['message_type'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
}
?>