<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Homepage</title>
    <link rel="stylesheet" href="css/homeStyle.css" />
    <!-- IKON -->
    <script
      src="https://kit.fontawesome.com/74ee38b4ad.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="UI-design-homepage">
      <!-- Logo Filkom  -->
        <img class="logo-filkom" src="img/LogoFilkom.png" />
      <!-- Login -->
      <div class="login">
          <a href="/login" class="button-login">LOGIN</a>
      </div>
          

      <!-- Logo Ruang Baca-->
        <img class="logoruangbaca" src="img/LogoRuangBaca.png" />

      <!-- Search bar -->
        <div class="search-container">
          <form onsubmit="searchFunction(event)">
              <input
                class="search-input"
                type="text"
                id="searchInput"
                placeholder="Cari Judul Buku, Penulis"
                />
              <button type="submit" class="search-button">
              <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
              </button>
          </form>
        </div>

      <!-- SLIDE -->
      <!-- <div class="slide-nya">
            <img class="slide1" src="img/SoloLeveling.jpeg" />
            <img class="slide2" src="img/LaskasPelangi.jpeg" />
            <img class="slide3" src="img/JavaProgramming.jpeg" />
            <img class="slide4" src="img/PythonProgramming.jpeg" />
            <img class="slide5" src="img/OmniscientReadersViewpoint.jpeg"/>
            <div class="text-wrapper-3">&lt;</div>
            <div class="text-wrapper-4">&lt;</div>
      </div> -->

      <!-- SLIDE -->
      <div class="slide">
        <div class="slider-container">
          <div class="slider-content">
            @foreach($books as $book)
            <div class="slide-item">
              <img src="{{ asset($book->image_path) }}" alt="{{ $book->title }}">
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <button class="slide-btn prev-btn">&#10094;</button>
      <button class="slide-btn next-btn">&#10095;</button>


      <!-- Read More -->
      <div class="overlap-group">
        <button class="button-read-more">Read More</button>
      </div>
    </div>
    <script>
      const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');
const slider = document.querySelector('.slider-content');

let slidePosition = 0;
const slides = document.querySelectorAll('.slide-item');
const totalSlides = slides.length;

prevBtn.addEventListener('click', () => {
  moveToPrevSlide();
});

nextBtn.addEventListener('click', () => {
  moveToNextSlide();
});

function updateSlidePosition() {
  for (const slide of slides) {
    slide.style.transform = `translateX(-${slidePosition}px)`;
  }
}

function moveToPrevSlide() {
  if (slidePosition === 0) return;
  slidePosition -= slides[0].clientWidth;
  updateSlidePosition();
}

function moveToNextSlide() {
  if (slidePosition === (totalSlides - 1) * slides[0].clientWidth) {
    // Jika slide sudah di gambar terakhir, kembali ke gambar pertama
    slidePosition = 0;
  } else {
    slidePosition += slides[0].clientWidth;
  }
  updateSlidePosition();
}


    </script>
  </body>
</html>