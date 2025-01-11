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
    <title>FitZone fitness center programs page</title>
    <link rel="stylesheet" href="css/comstyle.css">
    <link rel="stylesheet" href="css/wholestyle.css">
    <style>

.class-session {
    max-width: 1300px;
    margin: auto;
    padding: 80px 16px;
    text-align: center;
}

 /* class shedules style */
.table_container {
    padding: 2rem;
    margin: auto;
}

table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 1rem;
}
thead {
    background: rgba(174, 238, 216, 0.23);
    color: white;
  }
  
  thead th {
    padding: 1rem;
    border: 1px solid #d2cdcd;
  }
  
  tbody tr {
    border-bottom: 1px solid #d2cdcd;
  }
  
  tbody td {
    padding: 1rem;
    text-align: center;
    color: white;
    border: 1px solid #d2cdcd;
  }
  tbody tr:nth-child(odd) {
    /* background:rgba(174, 238, 216, 0.23); */
  }
  
  .class-buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 1rem;
   
  }
  
  .class-btn {
    /* color: #f1f1f1; */
    background-color: #f1f1f1;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 8px 20px;
    margin: 0 0.5rem;
    /* background: rgba(255, 255, 255, 0.1); */
    border-radius: 20px;
  }
  .class-btn:hover{
    background-color: #d79447;
  }
  .class-btn.active {
    background-color: #d79447;
    color: white;
  }


  
  .table-row.hidden {
    display: none;
  }
</style>
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
             <h1><span class="header-span">OUR PROGRAMS</span></h1>
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

 <!-- class time shedule design -->
 <div class="class-shedule">
            <div class="class-session">
            <div class="section-header">
            <h3 class="section-subtitle">choose your flexible time</h3>
            <h2 class="section-title">Our Programs timetable</h2>
            </div>
                <div class="table_container">
                    <div class="class-buttons">
                      <button class="class-btn active" data-class="All Classes">All Classes</button>
                      <button class="class-btn" data-class="Cardio">Cardio</button>
                      <button class="class-btn" data-class="Crossfit">Crossfit</button>
                      <button class="class-btn" data-class="yoga">Yoga</button>
                      <button class="class-btn" data-class="Power-Lifting">Power Lifting</button>
                    </div>
                    <table>
                      <thead>
                        <tr>
                          <th>Time</th>
                          <th>Monday</th>
                          <th>Tuesday</th>
                          <th>Wednesday</th>
                          <th>Thursday</th>
                          <th>Friday</th>
                          <th>Saturday</th>
                          <th>Sunday</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>6:00am - 8:00am</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Power-Lifting">Power Lifting<br>eugin</td>
                          <td class="Cardio">Cardio<br>John Deo</td>
                          <td class="Power-Lifting">Power Lifting<br>eugin</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="yoga">Yoga<br>Bavishan</td>
                        </tr>
                        <tr>
                          <td>10:00am - 12:00am</td>
                          <td class="Power Lifting">Power Lifting<br>eugin</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Power Lifting">Power Lifting<br>eugin</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>5:00pm - 7:00pm</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Power Lifting">Power Lifting<br>eugin</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="yoga">Yoga<br>Bavishan</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                        </tr>
                        <tr>
                          <td>7:00pm - 9:00pm</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Power Lifting">Power Lifting<br>eugin</td>
                          <td class="Crossfit">Crossfit<br>peater</td>
                          <td class="Power Lifting">Power Lifting<br>eugin</td>
                          <td class="Cardio">Cardio<br>Bavishan</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
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
<script src="javascript/function.js"></script>
<script src="javascript/loader.js"></script>
<script src="javascript/table.js"></script>
</body>
</html>