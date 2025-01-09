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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone fitness center about page</title>
    <link rel="stylesheet" href="css/comstyle.css">
    <link rel="stylesheet" href="css/wholestyle.css">
</head>
<body>

<!-- preloader effect  -->
<div class="preloader">
        <div class="creative-loader">
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="loader-circle"></div>
            <div class="loader-text">FITZONE</div>
        </div>
</div>

<!-- header session design -->
 <section class="header-session">
    <!-- navigation bar design -->
     <div class="top-nav">
        <div class="nav-logo">
            <img src="pictures/logo.png" alt="logo">
        </div>
        <ul class="nav-links">
        <li><a href="index.php">home</a></li>
        <li><a href="about.php">about</a></li>
        <li><a href="class.php">program</a></li>
        <li><a href="pricing.php">pricing</a></li>
        <li><a href="gallery.php">gallery</a></li>
        <li><a href="blog.php">blog</a></li>
        <li><a href="contact.php">contact</a></li>
        </ul>
        <?php if(!isset($_SESSION['user_id'])): ?>
                <button class="btn" id="join-now-btn">JOIN NOW</button>
            <?php else: ?>

                <div class="user-menu">
                    <div class="notification-icon">
                        <img src="pictures/notification.png" alt="notifications">
                        <span class="notification-badge">0</span>
                    </div>
                    <div class="profile-dropdown">
                        <img src="pictures/profile.png" alt="profile" class="profile-icon">
                        <div class="dropdown-content">
                        <p class="user-name"><?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
                            <a href="#">My Profile</a>
                            <a href="#">Settings</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>  
        </div>    
    <!-- header session design -->
    <header>
    <div class="header-container">
        <div class="header-content">
            <h4>BEST FITNESS IN THE TOWN</h4>
             <h1><span class="header-span">ABOUT US</span></h1>
            </div>
            <div class="hero-image">
            <!-- <img src="pictures/header.png"> -->
            </div>
        </div>
    </header>
</section>

<?php
include 'signup.php';
?>

<!-- about us seesion design -->
<section class="about-section">
    <div class="container">
        <div class="section-header">
        <h3 class="section-subtitle">About our Gym</h3>
    </div>
        <div class="about-wrapper">
            <div class="about-image">
                <img src="pictures/aboutus.webp" alt="Gym Interior">
                <div class="experience-box">
                    <div class="experience-number">15+</div>
                    <div class="experience-text">Years Experience</div>
                </div>
            </div>
            <div class="about-content">
                <h2 class="section-title">Transform Your Body With Our Expert Trainers</h2>
                <p class="about-text">
                    Welcome to a state-of-the-art fitness facility where we combine cutting-edge equipment with expert guidance to help you achieve your fitness goals. Our experienced trainers are dedicated to providing personalized attention and support throughout your fitness journey.
                </p>
                <p class="about-text">
                    We believe in creating a motivating and inclusive environment where everyone, regardless of their fitness level, can work towards their personal best. Our comprehensive approach combines training, nutrition, and recovery to ensure sustainable results.
                </p>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">3000+</div>
                        <div class="stat-label">Happy Members</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">10+</div>
                        <div class="stat-label">Expert Trainers</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">50+</div>
                        <div class="stat-label">Fitness Classes</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- footer session design -->
<footer>
    <div class="footer-session">
        <div class="footer-container">
            <div class="footer-contant">
                <h4>Get In Touch</h4>
                <p>Kurunegala</p>
                <p>+94 111 123-4567</p>
                <p>info@fitnessgym.com</p>
                <div class="footer-icons">
                    <a href="#" class="icon"><img src="pictures/facebook.png"></a>
                    <a href="#" class="icon"><img src="pictures/insta.png"></a>
                    <a href="#" class="icon"><img src="pictures/youtube.png"></a>
                    <a href="#" class="icon"><img src="pictures/whatsapp.png"></a>
                </div>
            </div>
            <div class="footer-contant">
                <h4>Opening Hours</h4>
                <p>Monday - Friday<p>
                <p>8.00 AM - 8.00 PM<p>
                <p>Saturday - Sunday<p>
                <p>2.00 PM - 8.00 PM</p>
            </div>
            <div class="footer-contant">
                <h4>Quick Links</h4>
                <div class="footer-links">
                    <a href="index.php">Home</a>
                    <a href="about.php">About Us</a>
                    <a href="class.php">Classes</a>
                    <a href="pricing.php">Pricing</a>
                    <a href="contact.php">Contact Us</a>
                </div>
            </div>
            <div class="footer-contant">
                <h4>About Us</h4>
                <p>Our Purpose Is To Sustainably Make the Pleasure and 
                   Benefits of Sports Accessible to the Many.</p>
                <div class="app-logo">
                    <img src="pictures/logo.png" alt="logo">
                </div>
            </div>
        </div>
        <hr>
        <p class="copy-right">Copyright © 2024 FitZone Fitness Center. All Rights Reserved.</p>
    </div>
</footer>
<script src="javascript/function.js"></script>
<script src="javascript/loader.js"></script>
</body>
</html>