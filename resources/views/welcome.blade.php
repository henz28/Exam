
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

  <section class="wrapper" style="background-color:#e3e3e3;">
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
        <img class="img-profile" src="{{ asset('landing/img-cta-3.jpg') }}" width="350" style="border-radius:10px;">
        <!-- <p><strong>Engaging audio content</strong> on a wide range on topics.</p> -->
      </li>
      <li>
        <img class="img-profile" src="{{ asset('landing/img-cta-2.jpg') }}" width="350" style="border-radius:10px;">
      </li>
      <li>
        <img class="img-profile" src="{{ asset('landing/img-cta-1.jpg') }}" width="350" style="border-radius:10px;">
      </li>
    </ul>
  </section>
  <div id="get-started" class="get-started">
    <p>
      <b>Kongsi OLE777</b> adalah program OLE777 Affiliate bola yang memberikan member dan non-member penghasilan dengan platform OLE777. Berdi sejak tahun 2014, OLE777 memberikan hiburan online dengan kenyamanan, kualitas produk, layanan pelanggan terbaik, dan keuntungan bagi untuk seluruh player, dam anggota Kongsi OLE777 Affiliate Bola.
    </p><br>
    <p>
      <b>Langkah-langkah mendapatkan komisi dengan menjadi Kongsi OLE777</b><br>
      <b style="color:white;background-color:#f9a024;padding:3px;border-radius:5px;">1</b> Daftar dengan klik tombol "Daftar Sekarang" atau melalui link yang diberikan oleh tim kami.d
    </p>
    <p>
      <b style="color:white;background-color:#f9a024;padding:3px;border-radius:5px;">2</b> Lakukan Pendaftaran
    </p>
    <p>
      <b style="color:white;background-color:#f9a024;padding:3px;border-radius:5px;">3</b> Sebarkan link khusus yang Anda dapat dari akun Anda.
    </p>
    <p>
      <b style="color:white;background-color:#f9a024;padding:3px;border-radius:5px;">4</b> Anda bisa menyebarkan link melalui akun-akun Sosial Media Anda, seperti Facebook, Twitter, Instagram, dan lain-lain.
    </p>
  </div>
  <!-- <div class="arrow-1"></div> -->
  <!-- <section class="get-feedback">
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
  </section> -->
  <section id="features" class="features">
    <h2 class="visuallyhidden">Features</h2>
    <ul class="features__list">
      <li>
        <img class="img-profile" src="{{ asset('landing/img-group.svg') }}" style="border-radius:10px;">
        <h3 style="color:#223165;font-size:24px;">Tim Pembayaran yang Professional</h3>
        <p style="color:#000;font-size:14px;">Metode pembayaran beragam dan terpercaya. Setiap dana pemain aman dan terjamin.</p>
      </li>
      <li>
        <img class="img-profile" src="{{ asset('landing/img-domino.svg') }}" style="border-radius:10px;">
        <h3 style="color:#223165;font-size:24px;">Brand yang <br>Terkenal</h3>
        <p style="color:#000;font-size:14px;">Anggaran pemasaran yang luar biasa. Biarkan Anda manikmati efek dari merek berkualitas.</p>
      </li>
      <li>
        <img class="img-profile" src="{{ asset('landing/img-document.svg') }}" style="border-radius:10px;">
        <h3 style="color:#223165;font-size:24px;">Sistem Laporan <br>Professional</h3>
        <p style="color:#000;font-size:14px;">Format pelaporan yang rapi & bersih. Lihat laporan harian & bulanan di satu titik</p>
      </li>
      <li>
        <img class="img-profile" src="{{ asset('landing/img-settings.svg') }}" style="border-radius:10px;">
        <h3 style="color:#223165;font-size:24px;">Personalisasikan Paket Pribadi</h3>
        <p style="color:#000;font-size:14px;">Kami dapat menyesuaikan promosi khusus untuk Anda. Membuat promosi Anda menjadi Mudah</p>
      </li>
    </ul>
  </section>
  <!-- <div class="arrow-2"></div> -->
  <section class="start-learning">
    <img class="img-profile" src="{{ asset('landing/Sticker WhatsApp Gratis - Kongsi OLE777.gif') }}" style="border-radius:10px;">
  </section>
</main>
<div class="wrapper1">
<div class="bottom_nav">
      <ul>
        <li><img src="{{ asset('landing/icon-skype.svg') }}"></li><p style="color:white;margin-left: -11%;">Pelayanan Pelanggan Skype: <a href="#">affiliasi.id@oleintl.com</a></p>
        <li><img src="{{ asset('landing/icon-email.svg') }}"></li><p style="color:white;margin-left: -11%;">Email: <a href="#">affiliasi.id@oleintl.com</a></p>
        <li><img src="{{ asset('landing/icon-whatsapp.svg') }}"></li><p style="color:white;margin-left: -11%;">Whatsapp: <a href="#">affiliasi.id@oleintl.com</a></p>
      </ul>
  </div>
</div>
<footer class="footer">
  <div class="footer-container">
    <nav class="footer-nav">
      <div>
        <img src="{{ asset('landing/logo-chelsea.svg') }}">
      </div>
      <div>
        <img src="{{ asset('landing/logo-pagcor.png') }}">
      </div>
      <div>
        <img src="{{ asset('landing/logo-iom.png') }}">
      </div>
      <div>
        <img src="{{ asset('landing/ole777-white.png') }}">
      </div>
    </nav>
    <p class="copyright">Exam made by
      <span class="heart">&hearts;</span>
      <a href="https://www.linkedin.com/in/henry-ang-9b5b0b1a0/" target="_blank">Henry Ybalez</a>
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