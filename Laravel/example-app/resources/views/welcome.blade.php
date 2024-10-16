<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="main.js"></script>
    <title>Photography Sevices Portfolio</title>
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
                <li><a href="{{ route('login') }}">Login </a></li>
                <li><a href="{{ route('signup') }}">Signup </a></li>
                
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

    <!--------------------------------------------------->
    
    <header>
        <div class="container header__container">
            <div class="header__left">
                <div class="header__image-bg"></div>
                <div class="header__image-lg">
                    <img src="images/header.jpg" alt="">
                </div>
                <div class="header__image-sm">
                    <img src="images/header.jpg" alt="">
                </div>
            </div>
            <div class="header__right">
                <div class="header__head">
                    <a class="header__tag">#Best Photography Services</a>
                </div>
                <h1>YOUR MOMENTS, OUR PASSION</h1>
                <p>
                    Our mission is creating Lasting Memories.We will capture your special moments with care and professionalism. Whether it's a wedding, birthday, or any other celebration, we use the best equipment and a skilled team to capture every detail. Our goal to provide top-quality photography services that preserve your memories beautifully, so you can cherish them for a lifetime
                    
                </p>
                
            </div>
        </div>
    </header>
    <section id="contact">
        <div class="container contact__container">
          <h2>Contact Information</h2>
          <p>Email: info@capturedpanorama.com</p>
          <p>Phone: +123 456 7890</p>
        </div>
      </section>
    
    

   
</body>
</html>