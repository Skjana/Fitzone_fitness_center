<?php
session_start();
include 'config.php';

// view inquery
if(isset($_GET['view_id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['view_id']);
    $query = "SELECT * FROM inquery_message WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $inquiry = mysqli_fetch_assoc($result);
}

// Delete inquiry
if(isset($_POST['delete_inquiry'])) {
    $id = $_POST['inquiry_id'];
    mysqli_query($conn, "DELETE FROM inquery_message WHERE id = $id");
    header("Location: inquery.php");
    exit();
}

// Get all inquiries
$query = "SELECT * FROM inquery_message ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizone Fitness Center - Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <style>
   .modal-content {
    position: relative;
    background: white;
    width: 80%;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.close-modal {
    position: absolute;
    right: 20px;
    top: 20px;
    font-size: 24px;
    cursor: pointer;
}

.inquiry-details p {
    margin: 15px 0;
    padding: 10px;
    background:rgba(2, 195, 185, 0.14);
    border-radius: 5px;
}

.inquiry-details strong {
    display: inline-block;
    width: 80px;
}
    </style>
</head>
<body>
<div class="sidebar">
        <div class="sidebar-logo">
            <img src="pictures/logo.png" alt="Flogo">
        </div>
        <ul class="sidebar-menu">
            <h3>Admin Panel</h3>
            <li><img src="pictures/dashboard.png" alt="dashboard-icon"> Dashboard</li>
            <li><img src="pictures/inquery.png" alt="inquery-icon"> Inquery</li>
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

<!-- inquery table design -->
    <div class="tabel-content">
        <div class="inquiries-table">
            <h2>Contact Form Inquiries</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['name']); ?></td>
                        <td><?php echo htmlspecialchars($row['email']); ?></td>
                        <td><?php echo htmlspecialchars($row['phone']); ?></td>
                        <td><?php echo htmlspecialchars($row['message']); ?></td>
                        <td><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                        <td>
                        <button class="action-btn view-btn" onclick="window.location.href='inquery.php?view_id=<?php echo $row['id']; ?>'">View</button>
                            <button class="action-btn edit-btn" onclick="editInquiry(<?php echo $row['id']; ?>)">Edit</button>
                            <form method="POST" style="display: inline;">
                                <input type="hidden" name="inquiry_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_inquiry" class="action-btn delete-btn" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div id="viewModal" class="modal" <?php echo isset($_GET['view_id']) ? 'style="display:block;"' : ''; ?>>
    <div class="modal-content">
        <a href="inquery.php" class="close-modal">&times;</a>
        <h2>Inquiry Details</h2>
        <?php if(isset($inquiry)): ?>
        <div class="inquiry-details">
            <p><strong>Name:</strong> <?php echo ($inquiry['name']); ?></p>
            <p><strong>Email:</strong> <?php echo ($inquiry['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo ($inquiry['phone']); ?></p>
            <p><strong>Message:</strong> <?php echo ($inquiry['message']); ?></p>
            <p><strong>Date:</strong> <?php echo date('M d, Y', strtotime($inquiry['created_at'])); ?></p>
        </div>
        <?php endif; ?>
    </div>
</div>

<script src="javascript/script.js"></script>   
</body>
</body>
</html>