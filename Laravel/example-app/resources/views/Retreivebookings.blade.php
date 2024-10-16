<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="main.js"></script>
    <title>Bookings</title>
</head>
<body>
    
    <nav>
        <div class="container nav__container">
        <a href="{{route('welcome')}}" class="nav__logo"><img src="images/logo.png" alt="Nav Logo"></a>
            <ul class="nav__links">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('gallery')}}">Gallery</a></li>
                <li><a href="{{route('booknow')}}">BookNow</a></li>
            </ul>
            <ul class="nav__socials">
                <li><a href="https://instagram.com/" target="_blank">
                    <i class="uil uil-instagram-alt"></i>
                </a></li>
                <li><a href="https://twitter.com/" target="_blank">
                    <i class="uil uil-twitter"></i>
                </a></li>
                <li><a href="https://youtube.com/" target="_blank">
                    <i class="uil uil-youtube"></i>
                </a></li>
            </ul>
            <button class="nav__toggle-btn" id="nav__toggle-open">
                <i class="uil uil-bars"></i>
            </button>
            <button class="nav__toggle-btn" id="nav__toggle-close">
                <i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>

    <h1 id="booking">Bookings</h1>
</body>
</html>
