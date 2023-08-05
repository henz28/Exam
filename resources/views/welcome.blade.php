
<header id="header" class="header">

<style>
        /* Add your CSS styles for the slider here */
        .slider-container {
            max-width: 800px;
            margin: 0 auto;
        }
        .slider {
            display: flex;
            overflow: hidden;
        }
        .slide {
            flex: 0 0 100%;
            transition: transform 1s ease;
        }
    </style>


<link href="{{ asset('css/style.css') }}" rel="stylesheet">
<script src="{{ asset('js/style.js') }}"></script>


<h3 style="position:relative!important;margin-left:20%;color:white;"><strong>KONGSI</strong>
<img class="img-profile" src="{{ asset('landing/ole777-white.png') }}" width="150"></h3>
  <nav id="nav-bar" class="nav">
    <ul class="nav-list">
      <!-- <li class="nav-item">
        <a class="nav-link" href="#features">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#how-it-works">How It Works</a>
      </li> -->
      <li class="nav-item" style="margin-left:-480%;">
        <a class="nav-link" href="{{ route('login') }}">Login</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link nav-link-cta" href="#subscribe">Subscribe</a>
      </li> -->
    </ul>
  </nav>

  <button class="nav-toggle" aria-label="Toggle navigation" aria-expanded="false">
    <span class="visuallyhidden">Menu</span>
    <span class="hamburger"></span>
  </button>
</header>

<main>
<div class="wrapper">
<div class="bottom_nav">
      <ul>
        <li><a href="#">Tentang OLE777</a></li>
        <li><a href="#">Komisi</a></li>
        <li><a href="#">Peraturan</a></li>
        <li><a href="#">Pertanyaan & Jawaban</a></li>
        <li style="background:#f47d20;border-radius:20px;padding: 5px;"><a href="#">OLE777 Official</a></li>
      </ul>
  </div>
</div>

  <section class="intro">
    <!-- Slider Banner -->
    <div class="slider-container">
        <div class="slider">
            @foreach ($slides as $slide)
            <div class="slide">
                <img src="{{ $slide['img'] }}" alt="{{ $slide['name'] }}">
            </div>
            @endforeach
        </div>
    </div>
  </section>
  <section id="features" class="features">
    <h2 class="visuallyhidden">Features</h2>
    <ul class="features__list">
      <li>
        <svg width="116" height="116" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <use xlink:href="#headphones-icon"></use>
        </svg>
        <p><strong>Engaging audio content</strong> on a wide range on topics.</p>
      </li>
      <li>
        <svg width="116" height="116" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <use xlink:href="#video-icon"></use>
        </svg>
        <p><strong>400+ video lessons</strong> from professional teachers.</p>
      </li>
      <li>
        <svg width="116" height="116" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <use xlink:href="#email-icon"></use>
        </svg>
        <p><strong>Weekly tips and advice</strong> to help you improve your English level.</p>
      </li>
    </ul>
  </section>
  <section id="how-it-works" class="grow">
    <h2 class="section__title grow__title">Grow Together</h2>
    <p>
      Start a meaningful conversation in our community platform, ask questions when you’re stuck and get help from a
      real person. Get answers fast, no matter your question.
    </p>
    <svg width="174" height="341" viewBox="0 0 174 341" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
      <use xlink:href="#grow-illustration"></use>
    </svg>
    <svg width="898" height="500" viewBox="0 0 898 500" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="blob">
      <use xlink:href="#grow-blob"></use>
    </svg>
  </section>
  <div class="arrow-1"></div>
  <section class="get-feedback">
    <h2 class="section__title get-feedback__title">
      Get quality feedback
    </h2>
    <p>
      We are here for you. Participate in the weekly live events, get the tools and resources you need, and find
      friendships with people that have the same goal as you.
    </p>
    <svg width="519" height="366" viewBox="0 0 519 366" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
      <use xlink:href="#feedback"></use>
    </svg>
  </section>
  <div class="arrow-2"></div>
  <section class="learning">
    <h2 class="section__title learning__title">
      Start learning immediately
    </h2>
    <p>
      It takes no time to start learning with us, This means, once you sign up for an account, you can start
      learning immediately and get access to our community.
    </p>
    <svg width="598" height="323" viewBox="0 0 598 323" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
      <use xlink:href="#learning"></use>
    </svg>
  </section>
  <div id="get-started" class="get-started">
    <ul>
      <li>
        <svg width="80" height="56" viewBox="0 0 80 56" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <use xlink:href="#user"></use>
        </svg>
        <p><strong class="counter community-members">1.2</strong><strong>K+</strong></p>
        <p>Community Members</p>
      </li>
      <li>
        <svg width="56" height="65" viewBox="0 0 56 65" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <use xlink:href="#article"></use>
        </svg>
        <p><strong class="counter number-of-pages">1.9</strong><strong>K+</strong></p>
        <p>Pages with content for you to learn</p>
      </li>
    </ul>
  </div>
  <section class="start-learning">
    <h2 class="section__title">
      Ready To Start Learning English?
    </h2>
    <a href="#" class="button">Get Started</a>
    <div class="video-learning">
      <video muted id="video" class="video" poster="https://res.cloudinary.com/alexandracaulea/image/upload/v1583497256/video-poster_lkwsdg.jpg">
        <source src="https://res.cloudinary.com/alexandracaulea/video/upload/v1583497287/video-learning_vpohou.mp4" type="video/mp4" />
      </video>
      <div class="video-controls">
        <div class="progress">
          <div class="progress-fill"></div>
        </div>
        <button class="video-button toggle" title="Play">►</button>
        <button data-skip="-5" class="video-button" aria-label="Skip backward 5 seconds">« 5s</button>
        <button data-skip="5" class="video-button" aria-label="Skip forward 5 seconds">5s »</button>
      </div>
    </div>
    <svg width="1440" height="892" viewBox="0 0 1440 892" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="blob-learning" style="overflow: visible;">
      <use xlink:href="#blob-learning"></use>
    </svg>
  </section>
</main>
<footer class="footer">
  <div class="footer-container">
    <nav class="footer-nav">
      <div>
        <h3 class="footer-title">Resources</h3>
        <ul>
          <li><a class="footer-link" href="#">Blog</a></li>

          <li><a class="footer-link" href="#">Community</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer-title">Company</h3>
        <ul>
          <li><a class="footer-link" href="#">About</a></li>
          <li><a class="footer-link" href="#">Our Mission</a></li>
          <li><a class="footer-link" href="#">Our Team</a></li>
          <li><a class="footer-link" href="#">Careers</a></li>
        </ul>
      </div>
      <div>
        <h3 class="footer-title">Contact Us</h3>
        <ul>
          <li><a class="footer-link" href="#">Sales</a></li>
          <li><a class="footer-link" href="#">Support</a></li>
        </ul>
      </div>
    </nav>
    <div class="footer-newsletter" id="subscribe">
      <a href="#"><svg width="169" height="33" viewBox="0 0 169 33" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Learn English">
          <use xlink:href="#footer__logo"></use>
        </svg></a>
      <p>
        Stay up to date with all Learn English news by subscribing to our newsletter.
      </p>
      <form action="https://www.freecodecamp.com/email-submit" method="GET" id="form" class="footer-form">
        <label for="email" class="visuallyhidden">Email address</label>
        <input type="email" name="email" class="footer-email" placeholder="Email Address" id="email" spellcheck="false" aria-required="true" aria-invalid="false" />
        <input type="submit" id="submit" class="button button-email" value="Subscribe" />
      </form>
    </div>
    <ul class="footer-social">
      <li>
        <a href="mailto:alexandra.caulea@gmail.com?Subject=Hi%20Alexandra" rel="noopener noreferrer"><svg width="23" height="18" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <use xlink:href="#contact-email-icon"></use>
          </svg><span class="visuallyhidden">email</span>
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/alexandra__caulea/" target="_blank" rel="noopener noreferrer">
          <svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.538 4.66203C16.538 5.32484 16.0006 5.86203 15.338 5.86203C14.6753 5.86203 14.138 5.32484 14.138 4.66203C14.138 3.99922 14.6753 3.46203 15.338 3.46203C16.0008 3.46203 16.538 3.99922 16.538 4.66203ZM10 13.3333C8.15906 13.3333 6.66672 11.8409 6.66672 10C6.66672 8.15906 8.15906 6.66672 10 6.66672C11.8409 6.66672 13.3333 8.15906 13.3333 10C13.3333 11.8409 11.8409 13.3333 10 13.3333ZM10 4.86484C7.16391 4.86484 4.86484 7.16391 4.86484 10C4.86484 12.8361 7.16391 15.1352 10 15.1352C12.8361 15.1352 15.1352 12.8361 15.1352 10C15.1352 7.16391 12.8361 4.86484 10 4.86484ZM10 1.80187C12.6702 1.80187 12.9864 1.81203 14.0408 1.86016C15.0158 1.90469 15.5453 2.0675 15.8977 2.20453C16.3644 2.38594 16.6975 2.60266 17.0475 2.95266C17.3975 3.3025 17.6142 3.63563 17.7956 4.1025C17.9325 4.45484 18.0955 4.98437 18.14 5.95937C18.1881 7.01391 18.1983 7.33016 18.1983 10.0003C18.1983 12.6705 18.1881 12.9867 18.14 14.0411C18.0955 15.0161 17.9327 15.5456 17.7956 15.898C17.6142 16.3647 17.3975 16.6978 17.0475 17.0478C16.6977 17.3978 16.3645 17.6145 15.8977 17.7959C15.5453 17.9328 15.0158 18.0958 14.0408 18.1403C12.9864 18.1884 12.6702 18.1986 10 18.1986C7.32969 18.1986 7.01344 18.1884 5.95906 18.1403C4.98406 18.0958 4.45453 17.933 4.10219 17.7959C3.63547 17.6145 3.30234 17.3978 2.95234 17.0478C2.6025 16.698 2.38563 16.3648 2.20422 15.898C2.06734 15.5456 1.90437 15.0161 1.85984 14.0411C1.81172 12.9866 1.80156 12.6703 1.80156 10.0003C1.80156 7.33016 1.81172 7.01391 1.85984 5.95937C1.90437 4.98437 2.06719 4.45484 2.20422 4.1025C2.38563 3.63578 2.60234 3.30266 2.95234 2.95266C3.30219 2.60266 3.63531 2.38594 4.10219 2.20453C4.45453 2.06766 4.98406 1.90469 5.95906 1.86016C7.01359 1.81203 7.32984 1.80187 10 1.80187ZM10 0C7.28422 0 6.94359 0.0115625 5.87703 0.0601562C4.81266 0.10875 4.08562 0.277812 3.44969 0.525C2.79203 0.780469 2.23437 1.1225 1.67844 1.67844C1.1225 2.23437 0.780469 2.79203 0.525 3.44969C0.277812 4.08578 0.10875 4.81266 0.0601562 5.87703C0.0115625 6.94359 0 7.28422 0 10C0 12.7158 0.0115625 13.0564 0.0601562 14.123C0.10875 15.1873 0.277812 15.9142 0.525 16.5503C0.780469 17.208 1.1225 17.7656 1.67844 18.3216C2.23437 18.8775 2.79203 19.2194 3.44969 19.475C4.08578 19.7222 4.81266 19.8912 5.87703 19.9398C6.94359 19.9884 7.28422 20 10 20C12.7158 20 13.0564 19.9884 14.123 19.9398C15.1873 19.8912 15.9142 19.7222 16.5503 19.475C17.208 19.2194 17.7656 18.8775 18.3216 18.3216C18.8775 17.7656 19.2194 17.208 19.475 16.5503C19.7222 15.9142 19.8912 15.1873 19.9398 14.123C19.9884 13.0564 20 12.7158 20 10C20 7.28422 19.9884 6.94359 19.9398 5.87703C19.8912 4.81266 19.7222 4.08578 19.475 3.44969C19.2194 2.79203 18.8775 2.23437 18.3216 1.67844C17.7656 1.1225 17.208 0.780625 16.5503 0.525C15.9142 0.277812 15.1873 0.10875 14.123 0.0601562C13.0564 0.0115625 12.7158 0 10 0Z" fill="url(#paint0_radial)" />
            <defs>
              <radialGradient id="paint0_radial" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(2.98611 20.0694) scale(25.555)">
                <stop offset="0" stop-color="#FFB140" />
                <stop offset="0.2559" stop-color="#FF5445" />
                <stop offset="0.599" stop-color="#FC2B82" />
                <stop offset="1" stop-color="#8E40B7" />
              </radialGradient>
            </defs>
          </svg>
          <span class="visuallyhidden">Instagram</span>
        </a>
      </li>
      <li>
        <a href="https://twitter.com/alexandracaulea" target="_blank" rel="noopener noreferrer"><svg width="20" height="16" viewBox="0 0 20 16" aria-hidden="true" xmlns="http://www.w3.org/2000/svg">
            <use xlink:href="#twitter-icon"></use>
          </svg>
          <span class="visuallyhidden">Twitter</span></a>
      </li>
    </ul>
    <p class="copyright">Project made by <a class="dotted-link" href="https://www.alexandracaulea.com/" target="_blank" rel="noopener noreferrer">Alexandra Caulea</a>. View source on <a class="dotted-link" href="https://github.com/alexandracaulea/freecodecamp-projects/tree/master/Responsive-Web-Design-Projects/Build%20a%20Product%20Landing%20Page" target="_blank" rel="noopener noreferrer">GitHub</a>
    </p>

  </div>

  

</footer>
    <!-- Scripts -->
    <script>
        // JavaScript code for the slider movement
        document.addEventListener("DOMContentLoaded", function() {
            // Get the slider and slides elements
            const slider = document.getElementById("slider");
            const slides = slider.getElementsByClassName("slide");
            
            let slideIndex = 0;
            const slideInterval = 3000; // Time in milliseconds between slides
            
            function showSlide(index) {
                slider.style.transform = `translateX(-${index * 100}%)`;
            }
            
            function nextSlide() {
                slideIndex = (slideIndex + 1) % slides.length;
                showSlide(slideIndex);
            }
            
            // Start the slider
            setInterval(nextSlide, slideInterval);
        });
    </script>