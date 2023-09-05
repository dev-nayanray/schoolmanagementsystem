<?php
// Database connection setup (replace with your credentials)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'schoolmanagment';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Function to retrieve user information
function getUserInfo($userId, $conn) {
    $sql = "SELECT * FROM users WHERE user_id = $userId"; // Replace 'users' with your table name
    $result = mysqli_query($conn, $sql);

    if (!$result || mysqli_num_rows($result) == 0) {
        return false;
    }

    $userInfo = mysqli_fetch_assoc($result);
    return $userInfo;
}

// Get user ID (you'll replace this with actual user identification logic)
$userId = 1; // Example user ID

// Fetch user information
$userInfo = getUserInfo($userId, $conn);

if (!$userInfo) {
    echo 'User not found.';
} else {
    // Display user information
    // echo '<h1>' . $userInfo['name'] . '</h1>';
    // echo '<p>Email: ' . $userInfo['email'] . '</p>';
    // echo '<p>Contact: ' . $userInfo['contact'] . '</p>';
    // Display other user details as needed
}

// Close the database connection
mysqli_close($conn);
?>
