<?php
session_start();
include 'config.php';

if(isset($_POST['submit_contact'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if(empty($name) || empty($email) || empty($message)) {
        $_SESSION['message'] = "Name, email,Phone Number and message are required!";
        $_SESSION['message_type'] = "error";
        header("Location: contact.php");
        exit();
    }

    $sql = "INSERT INTO inquery_message (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";

    if(mysqli_query($conn, $sql)) {
        $_SESSION['message'] = "Message sent successfully!";
        $_SESSION['message_type'] = "success";
    } else {
        $_SESSION['message'] = "Failed to send message.";
        $_SESSION['message_type'] = "error";
    }
    
    header("Location: contact.php");
    exit();
}
?>