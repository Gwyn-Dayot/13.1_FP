<?php
session_start();

// Redirect to login if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Dashboard - LoopedOut</title>
    <link rel="stylesheet" href="index_css.css" />
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
</head>

<body>

<header class="header navbar">
    <div class="logo">
        <h2>Dashboard</h2>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="logout.php" class="logout-btn">Logout</a></li>
        </ul>
    </nav>
</header>

<div class="container dashboard-content">
    <h1 class="dashboard-welcome">Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</h1>

    <div class="dashboard-section profile-info">
        <h2>Your Profile</h2>
        <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['first_name'] . ' ' . ($_SESSION['last_name'] ?? '')); ?></p>
        <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email'] ?? ''); ?></p>
        <!-- Add more profile info as needed -->
    </div>

    <div class="dashboard-section orders">
        <h2>Recent Orders</h2>
        <?php
        // For demonstration, a static array of orders. Replace with DB queries.
        $orders = [];

        if (!empty($orders)) {
            echo '<ul class="order-list">';
            foreach ($orders as $order) {
                echo '<li>';
                echo "Order #{$order['order_id']} - {$order['date']} - <strong>{$order['status']}</strong> - Total: {$order['total']}";
                echo '</li>';
            }
            echo '</ul>';
        } else {
            echo '<p>You have no recent orders.</p>';
        }
        ?>
    </div>

    <div class="dashboard-section favorites">
        <h2>Favorites</h2>
        <p>You don’t have any favorites yet.</p>
        <!-- You can add favorite products here -->
    </div>
</div>

<footer>
    <p>&copy; 2025 LoopedOut</p>
    <div class="socials">
      <a href="https://www.facebook.com" target="_blank" title="Facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com" target="_blank" title="Instagram"><i class="bi bi-instagram"></i></a>
    </div>
</footer>

</body>
</html>