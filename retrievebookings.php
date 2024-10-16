
<?php
include 'retreiveBookings.html';
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bookingsdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

if (!$result) {
    die('Could not get data: ' . mysqli_connect_error());
}

$bookings = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $bookings[] = $row;
    }
}

echo "<div class='data-table'><table>";
echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Date</th></tr>";
foreach ($bookings as $booking) {
    echo "<tr>";
    echo "<td>" . $booking['name'] . "</td>";
    echo "<td>" . $booking['email'] . "</td>";
    echo "<td>" . $booking['phone'] . "</td>";
    echo "<td>" . $booking['date'] . "</td>";
    echo "</tr>";
}
echo "</table></div>";

$conn->close();
?>
