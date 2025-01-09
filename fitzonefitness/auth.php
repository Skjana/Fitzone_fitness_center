<?php
session_start();
include 'config.php';

if(isset($_POST['register'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $password_1 = $_POST['password_1'];
    
    if(empty($fullname) || empty($email) || empty($contact) || empty($address) || empty($password) || empty($password_1)) {
        $_SESSION['message'] = "Please fill in all fields";
        $_SESSION['message_type'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
    if($password !== $password_1) {
        $_SESSION['message'] = "Passwords do not match";
        $_SESSION['message_type'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

    $verify_query = mysqli_query($conn, "SELECT email FROM users WHERE email='$email'");
    if(mysqli_num_rows($verify_query) != 0) {
        $_SESSION['message'] = "This email is already registered!";
        $_SESSION['message_type'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
   }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $insert_query = "INSERT INTO users (full_name, email, contact, address, password) 
                        VALUES ('$fullname', '$email', '$contact', '$address', '$hashed_password')";

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
}


// login code
if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(empty($email) || empty($password)) {
        $_SESSION['message'] = "Please fill in all fields";
        $_SESSION['message_type'] = "error";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        if(password_verify($password, $user['password'])) {
           
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $_SESSION['user_email'] = $user['email'];
            
            $_SESSION['message'] = "Login successful!";
            $_SESSION['message_type'] = "success";
            header("Location: index.php");
            exit();
        } else {
            $_SESSION['message'] = "Invalid password";
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