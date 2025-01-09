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
    <title>FitZone fitness center blog page</title>
    <link rel="stylesheet" href="css/comstyle.css">
    <link rel="stylesheet" href="css/blogstyle.css">
</head>
<body>
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
             <h1><span class="header-span">OUR BLOG</span></h1>
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
    <div class="blog-header">
        <h2>Fitness Blog</h2>
        <p>Discover the latest fitness tips, workout routines, and healthy living advice from our expert trainers.</p>
    </div>

    <!-- Category Pills -->
    <div class="category-pills">
        <div class="category-pill active">All</div>
        <div class="category-pill"><a href="workout.php">Workouts</a></div>
        <div class="category-pill"><a href="nutrition.php">Nutrition</a></div>
        <div class="category-pill"><a href="lifestyle.php">Lifestyle</a></div>
        <div class="category-pill"><a href="mindset.php">Mental Health</a></div>
    </div>

   <!-- Featured Post -->
    <section class="featured-blog-post">
        <div class="featured-card">
            <div class="featured-image">
                <img src="pictures/workout.jpg" alt="Featured Post">
            </div>
            <div class="featured-content">
                <span class="post-category">Featured</span>
                <h3>10 Essential Tips for Building Muscle and Staying Lean</h3>
                <div class="post-meta">
                    <span>By Bavishan</span>
                    <span>5 min read</span>
                </div>
                <p>Discover the secrets to building lean muscle mass while maintaining a healthy body fat percentage. Our comprehensive guide covers everything from nutrition to workout programming...</p>
                <a href="workout.php" class="read-more">Read More →</a>
            </div>
        </div>
    </section>
<!-- Blog Grid -->
<section class="blog-grid">
        <!-- Blog Card 1 -->
        <div class="blog-card">
            <div class="blog-image">
                <img src="pictures/train.jpg" alt="Blog Post">
            </div>
            <div class="blog-content">
                <span class="post-category">Nutrition</span>
                <h3>The Ultimate Guide to Pre-Workout Nutrition</h3>
                <div class="post-meta">
                    <span>By Sarah Smith</span>
                    <span>3 min read</span>
                </div>
                <p>Learn what to eat before your workout to maximize your performance and results...</p>
                <a href="nutrition.php" class="read-more">Read More →</a>
            </div>
        </div>

        <!-- Blog Card 2 -->
        <div class="blog-card">
            <div class="blog-image">
                <img src="pictures/hit.jpg" alt="Blog Post">
            </div>
            <div class="blog-content">
                <span class="post-category">Workouts</span>
                <h3>5 HIIT Workouts for Maximum Fat Burn</h3>
                <div class="post-meta">
                    <span>By Bavishan</span>
                    <span>4 min read</span>
                </div>
                <p>High-intensity interval training workouts that will help you burn fat and build endurance...</p>
                <a href="workout.php" class="read-more">Read More →</a>
            </div>
        </div>

        <!-- Blog Card 3 -->
        <div class="blog-card">
            <div class="blog-image">
                <img src="pictures/balance.jpg" alt="Blog Post">
            </div>
            <div class="blog-content">
                <span class="post-category">Lifestyle</span>
                <h3>Finding Balance: Fitness and Social Life</h3>
                <div class="post-meta">
                    <span>By Anoja</span>
                    <span>6 min read</span>
                </div>
                <p>Tips for maintaining an active lifestyle while enjoying your social life...</p>
                <a href="lifestyle.php" class="read-more">Read More →</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter">
        <h3>Subscribe to Our Newsletter</h3>
        <p>Get the latest fitness tips, workout routines, and healthy living advice delivered to your inbox.</p>
        <form class="newsletter-form">
            <input type="email" class="newsletter-input" placeholder="Enter your email address">
            <button type="submit" class="newsletter-btn">Subscribe</button>
        </form>
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
</body>
</html>