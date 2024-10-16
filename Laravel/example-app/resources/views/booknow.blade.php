<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="main.js"></script>
    <title>Booknow</title>
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

    <section id="booknow">
        <div class="booknow__head"><h2 class="booknow__title">Book Now</h2>
            <div class="empty booknow__empty"></div></div>
        <div class="container booknow__container">
          
            <div class="form__head">
                <form id="bookingForm" action="booknow.php" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Phone:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="date">Preferred Date:</label>
                    <input type="date" id="date" name="date" required>

                    <label for="time">Preferred Time Slot:</label>
                    <select id="time" name="time" required>
                        <option value="" disabled selected>Select a time slot</option>
                        <option value="09:00">09:00 AM</option>
                        <option value="11:00">11:00 AM</option>
                        <option value="13:00">01:00 PM</option>
                        <option value="15:00">03:00 PM</option>
                        <option value="17:00">05:00 PM</option>
                    </select>

                    <button type="submit">Check Availability</button>
                </form>
            </div>
            <div class="booknow__gallery">
                <article><img src="images/ev.jpg"></article>
                <article><img src="images/e1.jpg"></article>
                <article><img src="images/e2.jpg"></article>
                <article><img src="images/eh.jpg"></article>
                <article><img src="images/e3.jpg"></article>
                <article><img src="images/e4.jpg"></article>
                <article><img src="images/e5.jpg"></article>
            </div>
        </div>
    </section>

</body>
</html>
