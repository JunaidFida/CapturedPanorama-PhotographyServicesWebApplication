<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="main.js"></script>
    <title>Gallerypage</title>
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
<!----------------------------------------------------------------->
    <section id="gallery">
        <div class="gallery__head">
            <h2 class="gallery__title">My Gallery</h2>
            <div class="empty gallery__empty"></div>
        </div>
        <div class="container gallery__container swiper mySwiper">
            
            <p>
              Explore our captivating gallery, where every image tells a story of beauty and emotion.Step into a world of visual splendor with our carefully curated collection of stunning photographs.
            </p>
            <div class="swiper-wrapper">
                <article class="swiper-slide">
                    <img src="images/gallery1.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery2.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery3.jpg">
                </article>
                
                <article class="swiper-slide">
                    <img src="images/gallery4.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery6.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery7.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery8.jpg">
                </article>
                
                <article class="swiper-slide">
                    <img src="images/gallery10.jpg">
                </article>
                <article class="swiper-slide">
                    <img src="images/gallery11.jpg">
                </article>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

</body>
</html>