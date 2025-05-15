<?php
include 'db.php';

session_start();

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        die('Please fill all the fields.');
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('Invalid email format.');
    }

    $stmt = $conn->prepare("SELECT id, first_name, last_name, email, password_hash FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($user_id, $first_name, $last_name, $email_from_db, $password_hash);

    if ($stmt->fetch()) {
    if (password_verify($password, $password_hash)) {
        $_SESSION['user_id'] = $user_id;
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email_from_db;
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid password.";
    }
}
 else {
        echo "Email not registered.";
    }
    $stmt->close();

$conn->close();
}
?>