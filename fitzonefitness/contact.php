<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitZone fitness center contact page</title>
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
<!-- error message session design -->
<?php
    if(isset($_SESSION['message'])): ?>
        <div class="message <?php echo $_SESSION['message_type']; ?>">
             <?php 
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['message_type']);
            ?>
        </div>
    <?php endif; ?>

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
             <h1><span class="header-span">CONATCT US</span></h1>
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

<!-- contact session design -->
<section class="contact-section">
    <div class="section-header">
        <h3 class="section-subtitle">Fitness Insight</h3>
        <h2 class="section-title">Get In Touch</h2>
        <p>Explore expert-driven fitness techniques, nutrition insights, and personalized workout 
         approaches designed to elevate your physical performance and wellness journey.</p>  
    </div> 
    <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-item">
                    <div class="info-img">
                    <img src="pictures/map.png">
                    </div>
                    <div class="info-content">
                        <h3>Our Location</h3>
                        <p>No:13 Main street, Kurunegala Srilanka</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-img">
                    <img src="pictures/telephone.png">
                    </div>  
                    <div class="info-content">
                        <h3>Phone Number</h3>
                        <p>+94 111 123-4567</p>
                        <p>+94 071 123-4567</p>
                    </div>
                </div>

                <div class="info-item">
                <div class="info-img">
                    <img src="pictures/mail.png">
                    </div>  
                    <div class="info-content">
                        <h3>Email Address</h3>
                        <p>info@fitnessgym.com</p>
                        <p>support@fitnessgym.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <form method="POST" action="contact_action.php">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email"  placeholder="Enter your email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                    </div>
                    <button type="submit" name="submit_contact" class="submit-btn">Send Message</button>
                </form>
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
<script src="javascript/loader.js"></script>
<script src="javascript/function.js"></script>
</body>
</html>