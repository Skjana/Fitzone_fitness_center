<?php
session_start();
include("config.php");

if(isset($_POST['submit'])){

    $fullname = $_POST['fullName'];
    $userRole = 'STAFF';
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $password_1 = $_POST['password_1'];
    $password = $_POST['password'];

    if(empty($fullname) || empty($email) || empty($phoneNumber) ||empty($phoneNumber) ||empty($password_1) ||empty($password)){
        $_SESSION['message'] = "all fields are required!";
        $_SESSION['message_type'] = "error";
        header("Location: index.php");
        exit();
    }
}

if($password !== $password_1) {
    $_SESSION['message'] = "Passwords do not match";
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

$verify_query = mysqli_query($conn, "SELECT email FROM staff WHERE email='$email'");
if(mysqli_num_rows($verify_query) != 0) {
    $_SESSION['message'] = "This email is already registered!";
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

$hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
$insert_query = "INSERT INTO staff (fullname, role, email, contactNum, password) 
         VALUES ('$fullname', '$userRole', '$email', '$contactNumber', '$hashed_password')";
 
 if(mysqli_query($conn, $insert_query)) {
    $_SESSION['message'] = "user registration successful!";
    $_SESSION['message_type'] = "success";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    $_SESSION['message'] = "Registration failed! Please try again.";
    $_SESSION['message_type'] = "error";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

?>