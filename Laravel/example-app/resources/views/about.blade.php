<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <script src="main.js"></script>
    <title>aboutpage</title>
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
          <li>
            <a href="https://instagram.com/" target="_blank">
              <i class="uil uil-instagram-alt"></i>
            </a>
          </li>
          <li>
            <a href="https://twitter.com/" target="_blank">
              <i class="uil uil-twitter"></i>
            </a>
          </li>
          <li>
            <a href="https://youtube.com/" target="_blank">
              <i class="uil uil-youtube"></i>
            </a>
          </li>
        </ul>
        <button class="nav__toggle-btn" id="nav__toggle-open">
          <i class="uil uil-bars"></i>
        </button>
        <button class="nav__toggle-btn" id="nav__toggle-close">
          <i class="uil uil-multiply"></i>
        </button>
      </div>
    </nav>

    <section id="about">
      
        <div class="about__head">
          <h2 class="about__title">About Us</h2>
          <div class="empty about__empty"></div>
        </div>
        <div class="container about__container">
        <div class="about__left">
          <div class="about__image">
            <div class="about__image-bg"></div>
            <div class="about__image-lg">
              <img src="images/about.jpg" />
            </div>
            <div class="about__image-sm">
              <img src="images/about.jpg" />
            </div>
          </div>
        </div>
        <div class="about__right">
          <p>          
            At Captured Panorama, we believe in the power of preserving memories. Our journey began with a simple passion for photography and a desire to encapsulate life's most precious moments. What started as a personal pursuit has blossomed into a professional endeavor dedicated to capturing the essence of every special occasion. With a skilled team and state-of-the-art equipment, we strive to deliver exceptional photography services tailored to your unique needs. From weddings to family portraits, we approach each project with creativity, care, and a commitment to excellence. Our goal is not just to take pictures but to create timeless mementos that you'll cherish for a lifetime. Join us as we embark on this journey of capturing memories and turning them into lasting treasures.
          </p>
          </div>
      </div>
    </section>
    <section id="contact">
      <div class="container contact__container">
        <h2>Contact Information</h2>
        <p>Email: info@capturedpanorama.com</p>
        <p>Phone: +123 456 7890</p>
      </div>
    </section>
  </body>
</html>
