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
      <div class="div-wrapper">
        <button class="button-login">LOGIN</button>
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
              <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
      </div>

      <!-- SLIDE -->
      <div class="slide-nya">
            <img class="slide1" src="img/SoloLeveling.jpeg" />
            <img class="slide2" src="img/LaskasPelangi.jpeg" />
            <img class="slide3" src="img/JavaProgramming.jpeg" />
            <img class="slide4" src="img/PythonProgramming.jpeg" />
            <img class="slide5" src="img/OmniscientReadersViewpoint.jpeg"/>
            <div class="text-wrapper-3">&lt;</div>
            <div class="text-wrapper-4">&lt;</div>
      </div>

      <!-- Read More -->
      <div class="overlap-group">
        <button class="button-read-more">Read More</button>
      </div>
    </div>
  </body>
</html>