<?php
// Database connection (from your connection.php file)
include 'connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data
    $username = htmlspecialchars($_POST['username']);
    $password = md5($_POST['password']);
//die;
    // Query database for user
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // User found, verify password
        $user = $result->fetch_assoc();
        
        if ($password===$user['password']) {
            // Password correct, start session
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            $_SESSION['fullname'] = $user['fullname'];
            header("Location: admin/dashboard.php"); // Redirect to dashboard
            exit;
        } else {
            // Incorrect password
            echo "Invalid username or password. 1";
        }
    } else {
        // User not found
        echo "Invalid username or password. 2";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
