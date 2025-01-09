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
    <title>FitZone fitness center home page</title>
    <link rel="stylesheet" href="css/comstyle.css">
    <link rel="stylesheet" href="css/wholestyle.css">
    <link rel="stylesheet" href="css/media.css">

    <style>
        /* offer session design */
.offer {
    padding: 80px 20px;
    position: relative;
    overflow: hidden;
}

.offer-container {
    max-width: 1300px;
    margin: 0 auto;
    background: var(--card-bg);
    border-radius: 20px;
    padding: 60px 40px;
    position: relative;
    border: 1px solid rgba(249, 172, 84, 0.1);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

.row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    align-items: center;
}

.col-2 {
    position: relative;
    z-index: 2;
}

.offer-img {
    width: 100%;
    max-height: 350px;
    max-width: 400px;
    border-radius: 15px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease;
}

.offer-content {
    text-align: left;
    padding: 20px;
}

.offer-subtitle {
    color: var(--primary-color);
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 15px;
}

.offer-title {
    font-size: 2.5rem;
    margin: 0 0 20px 0;
    line-height: 1.2;
    text-transform: uppercase;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #ffffff 0%, #f9ac54 100%);
    /* -webkit-background-clip: text; */
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.offer-text {
    color: #e5e5e5;
    line-height: 1.8;
    margin-bottom: 30px;
    font-size: 1.1rem;
}

.banner-btn {
    display: flex;
    gap: 20px;
}

.banner-btn a {
    display: inline-block;
    padding: 15px 30px;
    background: linear-gradient(135deg, #f9ac54 0%, #f8982a 100%);
    color: #1a202c;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: all 0.3s ease;
    border: none;
    position: relative;
    overflow: hidden;
}

.banner-btn a:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(249, 172, 84, 0.3);
}

.banner-btn a::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: rgba(255, 255, 255, 0.1);
    transform: rotate(45deg);
    transition: transform 0.6s ease;
}

.banner-btn a:hover::before {
    transform: rotate(45deg) translate(50%, 50%);
}

.offer-container::after {
    content: "";
    position: absolute;
    top: -75px;
    right: -75px;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(252, 136, 3, 0.1) 0%, rgba(249, 134, 3, 0.351) 70%);
    border-radius: 50%;
    z-index: 1;
    animation: pulse 2s infinite;
}

    </style>
</head>
<body>

    <!-- header session design -->
    <section class="header-session">
    <!-- navigation bar design -->
     <div class="top-nav">
        <div class="nav-logo">
            <img src="pictures/logo.png" alt="logo">
        </div>
    <!-- toggle button design-->
    <button class="menu-btn">
    <span></span>
    <span></span>
    <span></span>
    </button>

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
            <h1><span class="header-span">CHANGE</span> <br><span id="dynamic-text"></span></h1>
            <p>Unlock your true potential and start an exhilarating journey to a stronger, 
               fitter, and more confident you! Join 'Make Your Body Shape' today and experience a remarkable 
               transformation that will leave you feeling empowered and revitalized. 
               Don’t wait your best self is just a step away! </p>
    <?php if(!isset($_SESSION['user_id'])): ?>
    <button class="btn" id="join-now-btn">JOIN NOW &#8594;</button>
    <?php endif; ?>
            <!-- <button class="btn" id="join-now-btn">JOIN NOW &#8594;</button> -->
        </div>
        <div class="header-image">
            <img src="pictures/header.png">
        </div>        
    </div>
    </header>
    </section>

    <?php
    include 'signup.php';
    ?>

<!-- why choose us session design -->
<section class="why-choose-us">
    <div class="container">
        <div class="section-header">
            <h3 class="section-subtitle">Why Choose Us</h3>
            <h2 class="section-title">Your Success Is Our Priority</h2>
        </div>
    <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <img src="pictures/fitness.png" alt="Expert Trainers">
                </div>
                <h3 class="feature-title">Expert Trainers</h3>
                <p class="feature-description">
                    Our certified trainers bring years of experience to help you achieve your fitness goals.
                </p>
                <a href="#" class="read-more">Read More &#8594;</a>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <img src="pictures/weight.png" alt="Modern Equipment">
                </div>
                <h3 class="feature-title">Modern Equipment</h3>
                <p class="feature-description">
                    Access state-of-the-art fitness equipment designed to maximize your results.
                </p>
                <a href="#" class="read-more">Read More &#8594;</a>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <img src="pictures/working-hours.png" alt="Flexible Programs">
                </div>
                <h3 class="feature-title">Flexible Programs</h3>
                <p class="feature-description">
                    Choose from various programs tailored to your schedule and fitness goals.
                </p>
                <a href="#" class="read-more">Read More &#8594;</a>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <img src="pictures/protein.png" alt="Nutrition Support">
                </div>
                <h3 class="feature-title">Nutrition Support</h3>
                <p class="feature-description">
                    Get personalized nutrition guidance to complement your workout routine.
                </p>
                <a href="#" class="read-more">Read More &#8594;</a>
            </div>
        </div>
    </div>
</section>

<!-- training  programms-->
<section class="training-section">
    <div class="training-container">
        <div class="section-header">
            <h3 class="section-subtitle">what we offers</h3>
            <h2 class="section-title">Our Training Programs</h2>
        </div>
        <div class="training-grid">
            <div class="training-card">
                <img src="pictures/yoga.jpeg" alt="Yoga" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">Yoga & Meditation</h3>
                    <p class="card-description">Find inner peace and strengthen your body with our expert-led yoga sessions combining traditional and modern techniques.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>

            <div class="training-card">
                <img src="pictures/cardio.jpg" alt="Cardio" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">Cardio & HIIT</h3>
                    <p class="card-description">High-energy cardio workouts designed to boost endurance and accelerate fat burning through interval training.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>

            <div class="training-card">
                <img src="pictures/nutrition.jpg" alt="Nutrition" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">Nutrition Coaching</h3>
                    <p class="card-description">Personalized nutrition plans and guidance to support your fitness goals and maintain a healthy lifestyle.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>

            <div class="training-card">
                <img src="pictures/strength.jpg" alt="Strength" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">Strength Training</h3>
                    <p class="card-description">Build muscle and increase strength with our comprehensive weight training and resistance programs.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>

            <div class="training-card">
                <img src="pictures/crossfit.jpeg" alt="CrossFit" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">CrossFit</h3>
                    <p class="card-description">Dynamic workouts combining strength training, gymnastics, and cardio for total body conditioning.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>

            <div class="training-card">
                <img src="pictures/recovery.webp" alt="Recovery" class="card-bg">
                <div class="card-content">
                    <h3 class="card-title">Recovery & Flexibility</h3>
                    <p class="card-description">Essential stretching and recovery techniques to improve flexibility and prevent injuries.</p>
                    <a href="#" class="join-button">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

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

<!-- trainers session design -->
<div class="trainers-session">
    <div class="session">
        <div class="section-header">
            <h3 class="section-subtitle">Our Professional Trainers</h3>
            <h2 class="section-title">Meet the Experts Behind Your Fitness Journey</h2>
        </div>
        <div class="trainers-grid">
            <div class="trainer-card">
                <div class="card-container">
                    <img src="pictures/trainer-1.jpg"  class="trainer-image">
                    <div class="trainer-details">
                        <h3>Cardio & Yoga Specialist</h3>
                        <div class="trainer-classes">
                            <span>Yoga Flow</span>
                            <span>Power Cardio</span>
                            <span>Flexibility</span>
                        </div>
                        <p>With over 8 years of experience, John specializes in cardiovascular training and yoga, helping clients improve endurance and flexibility.</p>
                        <div class="trainer-socials">
                            <a href="#" class="social-icon"><img src="pictures/facebook.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/insta.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/youtube.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/whatsapp.png"></a>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="trainer-detail"><h3>Bavishan</h3></div>
                        <span>8+ Years</span>
                    </div>
                </div>
            </div>

            <div class="trainer-card">
                <div class="card-container">
                    <img src="pictures/trainer-2.jpg"  class="trainer-image">
                    <div class="trainer-details">
                        <h3>Crossfit & Strength Training Expert</h3>
                        <div class="trainer-classes">
                            <span>Crossfit</span>
                            <span>HIIT</span>
                            <span>Strength</span>
                        </div>
                        <p>kaipillai is a certified Crossfit trainer with a passion for high-intensity interval training and functional fitness.</p>
                        <div class="trainer-socials">
                            <a href="#" class="social-icon"><img src="pictures/facebook.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/insta.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/youtube.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/whatsapp.png"></a>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="trainer-detail"><h3>eugin</h3></div>
                        <span>6+ Years</span>
                    </div>
                </div>
            </div>

            <div class="trainer-card">
                <div class="card-container">
                    <img src="pictures/trainer-3.jpg"  class="trainer-image">
                    <div class="trainer-details">
                        <h3>Power Lifting & Strength Coach</h3>
                        <div class="trainer-classes">
                            <span>Power Lifting</span>
                            <span>Muscle Building</span>
                            <span>Strength Training</span>
                        </div>
                        <p>kabali is a professional power lifting coach with extensive knowledge in strength training and muscle development.</p>
                        <div class="trainer-socials">
                            <a href="#" class="social-icon"><img src="pictures/facebook.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/insta.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/youtube.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/whatsapp.png"></a>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="trainer-detail"><h3>Anoja</h3></div>
                        <span>5+ Years</span>
                    </div>
                </div>
            </div>

            <div class="trainer-card">
                <div class="card-container">
                    <img src="pictures/trainer-4.jpg" class="trainer-image">
                    <div class="trainer-details">
                        <h3>Nutrition & Wellness Coach</h3>
                        <div class="trainer-classes">
                            <span>Nutrition Workshop</span>
                            <span>Wellness Coaching</span>
                            <span>Lifestyle Transformation</span>
                        </div>
                        <p>Sarah combines her expertise in nutrition and holistic wellness to create comprehensive fitness and lifestyle transformation programs.</p>
                        <div class="trainer-socials">
                            <a href="#" class="social-icon"><img src="pictures/facebook.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/insta.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/youtube.png"></a>
                            <a href="#" class="social-icon"><img src="pictures/whatsapp.png"></a>
                        </div>
                    </div>
                    <div class="detail">
                        <div class="trainer-detail"><h3>Sarah</h3></div>
                        <span>7+ Years</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- offer session design -->
<section class="offer">
    <div class="offer-container">
        <div class="row">
            <div class="col-2">
                <img src="pictures/offerimg.png" alt="Special Offer" class="offer-img">
            </div>
            <div class="col-2">
                <div class="offer-content">
                    <h3 class="offer-subtitle">Limited Time Offer</h3>
                    <h1 class="offer-title">Special New Year Deal</h1>
                    <p class="offer-text">
                        Transform your fitness journey with our exclusive membership offer. Sign up for any group or personal training classes now and enjoy a special 20% discount. Limited time only – don't miss out on achieving your fitness goals at the best value!
                    </p>
                    <div class="banner-btn">
                        <a href="#">Join Now</a>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
        </div>   
    </div>
</section>

<!-- success stories design -->
<div class="success-stories">
    <div class="session">
        <div class="section-header">
            <h3 class="section-subtitle">Success stories</h3>
            <h2 class="section-title">What Our Members Say</h2>
        </div>
        <div class="session-continer">
            <div class="testimonial-card">
                <p class="quote">&#10077;</p> 
                <p>I absolutely love the new collection! The quality is top-notch and the designs are so stylish. 
                    I've received so many compliments!</p>
                <p class="quote">&#10078;</p>
                <div class="rating">
                    <p>&#9733;</p>
                    <p>&#9733;</p>
                    <p>&#9733;</p>
                    <p>&#9733;</p>
                    <p>&#9734;</p> 
                </div>
                <img src="pictures/user-1.png" class="user-img">
                <h3>saranja</h3>
            </div>
            <div class="testimonial-card">
                    <p class="quote">&#10077;</p> 
                    <p>I absolutely love the new collection! The quality is top-notch and the designs are so stylish. 
                        I've received so many compliments!</p>
                    <p class="quote">&#10078;</p>
                    <div class="rating">
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9734;</p> 
                    </div>
                    <img src="pictures/user-2.png" class="user-img">
                    <h3>rajinthan</h3>
            </div>
            <div class="testimonial-card">
                    <p class="quote">&#10077;</p> 
                    <p>I absolutely love the new collection! The quality is top-notch and the designs are so stylish. 
                        I've received so many compliments!</p>
                    <p class="quote">&#10078;</p>
                    <div class="rating">
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9734;</p> 
                    </div>
                    <img src="pictures/user-3.png" class="user-img">
                    <h3>shanu</h3>
             </div>
             <div class="testimonial-card">
                    <p class="quote">&#10077;</p> 
                    <p>I absolutely love the new collection! The quality is top-notch and the designs are so stylish. 
                        I've received so many compliments!</p>
                    <p class="quote">&#10078;</p>
                    <div class="rating">
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9733;</p>
                        <p>&#9734;</p> 
                    </div>
                    <img src="pictures/user-4.png" class="user-img">
                    <h3>janujan</h3>
             </div>
        </div>
    </div>
</div>

<!-- blog session design  -->
<div class="blog">
    <div class="session">
    <div class="section-header">
            <h3 class="section-subtitle">Fitness Insight</h3>
            <h2 class="section-title">Transformative Fitness Strategies</h2>
            <p>Explore expert-driven fitness techniques, nutrition insights, and personalized workout 
            approaches designed to elevate your physical performance and wellness journey.</p>
        </div>
        <div class="blog-content">
            <div class="blog-cart">
                <div class="image-container">
                    <img src="pictures/workout.png" alt="Muscle Building Techniques">
                    <div class="category">
                        <div class="subject"><h3>Strength Training</h3></div>
                        <span>15/12/2024</span>
                    </div>
                </div>
                <h2 class="article-title">Optimize Muscle Growth: Advanced Hypertrophy Techniques</h2>
                <p class="article-desc">Discover scientifically-backed strategies to maximize muscle development,
                including progressive overload, compound movements, and targeted nutrition for optimal muscle protein synthesis.</p>
                <a href="blog.php" class="read-more">Read More →</a>
            </div>

            <div class="blog-cart">
                <div class="image-container">
                    <img src="pictures/train.jpg" alt="Nutrition Guide">
                    <div class="category">
                        <div class="subject"><h3>Nutrition</h3></div>
                        <span>10/12/2024</span>
                    </div>
                </div>
                <h2 class="article-title">Performance Nutrition: Fuel Your Fitness Goals</h2>
                <p class="article-desc">Learn how strategic macronutrient intake, meal timing, 
                    and supplement selection can dramatically enhance your athletic performance and recovery.</p>
                <a href="blog.php" class="read-more">Read More →</a>
            </div>

            <div class="blog-cart">
                <div class="image-container">
                    <img src="pictures/yoga.jpeg" alt="Mental Fitness">
                    <div class="category">
                        <div class="subject"><h3>Mindset</h3></div>
                        <span>05/12/2024</span>
                    </div>
                </div>
                <h2 class="article-title">Mental Resilience in Fitness: Beyond Physical Limits</h2>
                <p class="article-desc">Explore psychological techniques to overcome mental barriers, 
                    develop consistent motivation, and cultivate a championship mindset in your fitness journey.</p>
                <a href="blog.php" class="read-more">Read More →</a>
            </div>
        </div>
    </div>
</div>

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
<script>
    const menuBtn = document.querySelector('.menu-btn');
const navLinks = document.querySelector('.nav-links');

menuBtn.addEventListener('click', () => {
    menuBtn.classList.toggle('active');
    navLinks.classList.toggle('active');
});
</script>
<script src="javascript/function.js"></script>
</body>
</html>