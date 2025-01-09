
<!-- login or register overlay  design-->
    <div class="login-overlay" id="login-overlay">
        <div class="login-container">
            <img src="pictures/cancel.png" alt="Close" class="login-close" id="login-close">

            <!-- Login Form design-->
            <div class="login-form">
                <h2>Login</h2>
                <form id="login-form-content" method="POST" action="auth.php">
            <input type="email" name="email" placeholder="Enter your email" class="login-input" required>
            <input type="password" name="password" placeholder="Enter your password" class="login-input" required>
            <button type="submit" name="login" class="login-btn">Login Now</button>
            </form>
                <div class="login-switch">
                    Don't have an account? <a id="switch-to-signup">Sign Up</a>
                </div>
            </div>

            <!-- Signup Form design-->
            <div class="signup-form">
                <h2>Create Account</h2>
                <form id="signup-form-content" method="POST" action="auth.php">
                    <input type="text"  name="fullname" placeholder="Full Name" class="login-input">
                    <input type="email" name="email" placeholder="Email Address" class="login-input">
                    <input type="tel" name="contact" placeholder="Contact Number" class="login-input">
                    <input type="text" name="address" placeholder="Address" class="login-input">
                    <input type="password" name="password" placeholder="Create password" class="login-input">
                    <input type="password" name="password_1" placeholder="Confirm password" class="login-input">
                    <button type="submit" class="login-btn" name="register">Register Now</button>
                </form>
                <div class="login-switch">
                    Already have an account? <a id="switch-to-login">Login</a>
                </div>
            </div>
        </div>
    </div>

<script src="javascript/function.js"></script>