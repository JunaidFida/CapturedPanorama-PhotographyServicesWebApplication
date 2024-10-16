<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookingsdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date = $_POST['date'];
// Add time slot handling here

// SQL to insert data into database
$sql = "INSERT INTO booking (name, email, phone, date) VALUES ('$name', '$email', '$phone', '$date')";

if ($conn->query($sql) === TRUE) {
    // Redirect to success page with form data as query parameters
    header("Location: success_page.php?name=$name&email=$email&phone=$phone&date=$date");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
