<?php
// Database connection
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookingsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL to check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User exists, login successful
    $_SESSION['username'] = $username;
    
    echo "<script>";
    echo "var loggedInUser = '" . $_SESSION['username'] . "';";
    echo "</script>";
    echo "<script>alert('Login successful');window.location.href = 'index.html';</script>";
} else {
    // User doesn't exist or incorrect credentials
    echo "<script>alert('Invalid username or password');window.location.href = 'login.html';</script>";
}


mysqli_close($conn);
?>
