<?php 
session_start();
if(isset($_SESSION['message'])): ?>
    <div class="message <?php echo $_SESSION['message_type']; ?>">
        <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        unset($_SESSION['message_type']);
        ?>
    </div>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone Management System</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<!-- login register form design-->
    <div class="main-content">
        <div class="logo">
            <img src="pictures/logo.png" alt="FitZone Logo">
        </div>
        <div class="session-title">
            <h3>Admin / Management Staff Login</h3>
        </div>
        <div class="form-container">
            <!-- login form design -->
            <div id="loginForm">
                <h2>Sign in</h2>
                <form action="login.php" method="post">
                    <input type="text" id="loginEmail" name ="email" placeholder="Email">
                    <input type="password" id="loginPassword" name ="password" placeholder="Password">
                    <button type="submit" name ="submit">Sign in</button>
                </form>
                <div class="forgot-password">
                    <a href="#" onclick="showForgotPassword()">Forgot password?</a>
                </div>
                <div class="toggle-form">
                    <a href="#" onclick="showRegister()">New to FitZone Management? Join now</a>
                </div>
            </div>

            <!-- register form design -->
            <div id="registerForm">
                <h2>Register as Management Staff</h2>
                <form  action="register.php" method="post">
                    <input type="text" id="registerName"  name ="fullName" placeholder="Full Name" >
                    <input type="email" id="registerEmail" name ="email" placeholder="Email" >
                    <input type="text" id="phoneNum" name ="phoneNumber" placeholder="Contact Number" >
                    <input type="password" id="registerPassword" name ="password_1" placeholder="Password (6+ characters)" >
                    <input type="password" class="login-input" name ="password" placeholder="Confirm Password" >
                    <button type="submit" name ="submit" >Agree & Join</button>
                </form>
                <div class="toggle-form">
                    <a href="#" onclick="showLogin()">Already on FitZone? Sign in</a>
                </div>
            </div>

            <div id="forgotPasswordForm">
                <h2>Reset Password</h2>
                <form onsubmit="return handleForgotPassword(event)">
                    <input type="text" id="forgotEmail" placeholder="Email or Phone" required>
                    <button type="submit">Send Reset Link</button>
                </form>
                <div class="toggle-form">
                    <a href="#" onclick="showLogin()">Back to Sign in</a>
                </div>
            </div>
        </div>
    </div>
<script src="javascript/script.js"></script>
</body>
</html>