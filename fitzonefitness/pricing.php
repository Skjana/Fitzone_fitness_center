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
    <title>FitZone fitness center pricing page</title>
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
             <h1><span class="header-span">OUR PRICING</span></h1>
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

<!-- pricing session design -->
<section class="plans-section">
    <div class="container">
    <div class="section-header">
            <h3 class="section-subtitle">exclusive memebership plans </h3>
            <h2 class="section-title">choose your perfect plan</h2>
            <p>Join our fitness community and transform your life with our comprehensive membership packages. 
                Each plan is designed to meet your specific fitness goals.</p>
            </div>
            <div class="plans-grid">
                <!-- Original Membership Cards -->
                <div class="plan-card">
                    <div class="card-header">
                        <h3 class="plan-name">Starter</h3>
                        <span class="plan-duration">3 Months</span>
                        <div class="price-tag">
                            Rs.2500<span>/month</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>Access to main gym area</li>
                            <li>Basic fitness assessment</li>
                            <li>2 Group classes per week</li>
                            <li>Locker room access</li>
                            <li>Free parking</li>
                            <li>Gym app access</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Get Started</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="popular-tag">Popular</div>
                    <div class="card-header">
                        <h3 class="plan-name">Pro Fitness</h3>
                        <span class="plan-duration">6 Months</span>
                        <div class="price-tag">
                            Rs.5000<span>/month</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>All Starter features</li>
                            <li>Unlimited group classes</li>
                            <li>Personal trainer (2x/month)</li>
                            <li>Nutrition consultation</li>
                            <li>Access to all locations</li>
                            <li>Premium locker room</li>
                            <li>Towel service</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Get Started</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="card-header">
                        <h3 class="plan-name">Elite</h3>
                        <span class="plan-duration">12 Months</span>
                        <div class="price-tag">
                            Rs.8000<span>/month</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>All Pro Fitness features</li>
                            <li>Weekly personal training</li>
                            <li>Customized meal plans</li>
                            <li>Spa & massage access</li>
                            <li>Recovery room access</li>
                            <li>Priority class booking</li>
                            <li>Guest passes (2/month)</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Get Started</button>
                    </div>
                </div>

                <!-- Additional Service Cards -->
                <div class="plan-card">
                    <div class="card-header">
                        <h3 class="plan-name">Personal Training</h3>
                        <span class="plan-duration">Flexible Sessions</span>
                        <div class="price-tag">
                            Rs.1500<span>/session</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>1-on-1 dedicated trainer</li>
                            <li>Customized workout plans</li>
                            <li>Progress tracking</li>
                            <li>Nutrition guidance</li>
                            <li>Flexible scheduling</li>
                            <li>Form correction</li>
                            <li>Monthly assessments</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Book Session</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="card-header">
                        <h3 class="plan-name">Group Training</h3>
                        <span class="plan-duration">Group Sessions</span>
                        <div class="price-tag">
                            Rs.800<span>/session</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>High-energy workouts</li>
                            <li>Expert instruction</li>
                            <li>Various class types</li>
                            <li>Team motivation</li>
                            <li>Multiple time slots</li>
                            <li>Equipment provided</li>
                            <li>Beginner friendly</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Join Class</button>
                    </div>
                </div>

                <div class="plan-card">
                    <div class="card-header">
                        <h3 class="plan-name">Nutrition Counseling</h3>
                        <span class="plan-duration">Consultation</span>
                        <div class="price-tag">
                            Rs.1200<span>/session</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="feature-list">
                            <li>Personalized meal plans</li>
                            <li>Dietary assessment</li>
                            <li>Progress monitoring</li>
                            <li>Supplement guidance</li>
                            <li>Lifestyle coaching</li>
                            <li>Recipe suggestions</li>
                            <li>Follow-up support</li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <button class="action-button">Book Consultation</button>
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