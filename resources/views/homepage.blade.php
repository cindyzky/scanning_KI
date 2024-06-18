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
          <form action="/BooksData" method="GET" class="search">
              <input
                class="search-input"
                type="text"
                id="searchInput"
                placeholder="Cari Judul Buku, Penulis"
                value="{{ request('search') }}"
                />
              <button type="submit" class="search-button">
              <i class="fa-solid fa-magnifying-glass fa-2xl"></i>
              </button>
          </form>
        </div>

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
        <a href="/login" class="button-read-more">Read More</a>
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