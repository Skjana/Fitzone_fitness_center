<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizone Fitness Center - Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
        a{
    text-decoration: none;
    color: #ffffff;
}
    </style>
</head>
<body>
<div class="sidebar">
        <div class="sidebar-logo">
            <img src="pictures/logo.png" alt="Fizone-Logo">
        </div>
        <ul class="sidebar-menu">
            <h3>Administration</h3>
            <li><img src="pictures/dashboard.png" alt="dashboard-icon"> Dashboard</li>
            <li><a href="inquery.php"><img src="pictures/inquery.png" alt="inquery-icon">Inquery</a></li>
            <li><img src="pictures/trainer.png" alt="Trainers Icon"> Trainers</li>
            <li><img src="pictures/class.png" alt="Classes Icon"> Classes</li>
            <li><img src="pictures/payment.png" alt="Payments Icon"> Payments</li>
            <li><img src="pictures/setting.png" alt="Settings Icon"> Settings</li>
        </ul>
    </div>
    <div class="main-content">
        <div class="dashboard-header">
            <div class="search-container">
                <img src="pictures/search.png" alt="Search Icon">
                <input type="text" placeholder="Search members, classes...">
            </div>
            <div class="user-profile" id="profileDropdownTrigger">
                <img src="pictures/profile.png" alt="Admin Profile">
                <span>Admin Name</span>
                <div class="profile-dropdown" id="profileDropdown">
                    <div class="profile-dropdown-item">
                    <a href="logout.php"><img src="pictures/logout.png" alt="Logout Icon"> Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Rest of the previous HTML content remains the same -->
        <div class="dashboard-cards">
            <div class="card">
                <img src="pictures/member.png" alt="Total Members" class="card-icon">
                <div class="card-value">452</div>
                <div class="card-label">Total Members</div>
            </div>
            <div class="card">
                <img src="pictures/active.png" alt="Active Members" class="card-icon">
                <div class="card-value">378</div>
                <div class="card-label">Active Members</div>
            </div>
            <div class="card">
                <img src="pictures/trainer.png" alt="Trainers" class="card-icon">
                <div class="card-value">12</div>
                <div class="card-label">Trainers</div>
            </div>
            <div class="card">
                <img src="pictures/payment.png" alt="Monthly Revenue" class="card-icon">
                <div class="card-value">$45,200</div>
                <div class="card-label">Monthly Revenue</div>
            </div>
        </div>
        <div class="recent-section">
            <div class="recent-members">
                <h2>Recent Members</h2>
                <div class="member-list">
                    <div class="member-item">
                        <img src="pictures/boy.png" alt="Member">
                        <div>
                            <strong>John Doe</strong>
                            <div>Joined: Dec 10, 2024</div>
                        </div>
                    </div>
                    <div class="member-item">
                        <img src="pictures/boy.png" alt="Member">
                        <div>
                            <strong>Jane Smith</strong>
                            <div>Joined: Dec 12, 2024</div>
                        </div>
                    </div>
                    <div class="member-item">
                        <img src="pictures/woman.png" alt="Member">
                        <div>
                            <strong>Mike Johnson</strong>
                            <div>Joined: Dec 15, 2024</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inquiries">
                <h2>Member Inquiries</h2>
                <div class="inquiry-list">
                    <div class="inquiry-item">
                        <img src="pictures/woman.png" alt="Inquiry">
                        <div>
                            <strong>Sarah Williams</strong>
                            <div>Membership Details</div>
                        </div>
                        <span class="inquiry-status status-new">New</span>
                    </div>
                    <div class="inquiry-item">
                        <img src="pictures/boy.png" alt="Inquiry">
                        <div>
                            <strong>Alex Rodriguez</strong>
                            <div>Class Schedule</div>
                        </div>
                        <span class="inquiry-status status-pending">Pending</span>
                    </div>
                    <div class="inquiry-item">
                        <img src="pictures/woman.png" alt="Inquiry">
                        <div>
                            <strong>Emma Brown</strong>
                            <div>Personal Training</div>
                        </div>
                        <span class="inquiry-status status-new">New</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="javascript/function.js"></script>   
</body>
</body>
</html>