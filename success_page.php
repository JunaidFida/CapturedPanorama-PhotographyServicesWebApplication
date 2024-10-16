<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="success-div">
    <h1>Booking Successful!</h1>
    <p>Thank you for booking. Your booking details are as follows:</p>
    <ul class='details'>
        <li>Name: <?php echo $_GET['name']; ?></li>
        <li>Email: <?php echo $_GET['email']; ?></li>
        <li>Phone: <?php echo $_GET['phone']; ?></li>
        <li>Date: <?php echo $_GET['date']; ?></li>
    </ul>
    <div>
    <button><a href="./index.html">GO to Home</a></button>
    </div>
    </div>
    
    
</body>
</html>
