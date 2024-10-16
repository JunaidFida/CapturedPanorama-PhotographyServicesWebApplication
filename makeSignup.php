<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookingsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if user already exists
$sql = "SELECT * FROM users WHERE username = '$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // User already exists
    echo "<script>alert('Username already exists. Please choose a different username.'); window.location.href = 'signup.html';</script>";
} else {
    // Insert new user into database
    
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        // Signup successful
        echo "<script>alert('Signup successful. You can now login.'); window.location.href = 'login.html';</script>";
    } else {
        // Error in signup
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
