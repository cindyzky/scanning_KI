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
      <div class="div">
        <img class="rectangle" src="img/SoloLeveling.jpeg" />
        <div class="overlap">
          <div class="rectangle-2"></div>
          <img class="DOWNLOAD-FILM" src="img/LaskasPelangi.jpeg" />
        </div>
        <div class="overlap-group">
          <button class="button-read-more">Read More</button>
        </div>
        <div class="div-wrapper">
          <button class="button-login">LOGIN</button>
        </div>
        <div class="text-wrapper-3">&lt;</div>
        <div class="text-wrapper-4">&lt;</div>

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

        <div class="overlap-2">
          <div class="rectangle-3"></div>
          <img class="java-programming" src="img/JavaProgramming.jpeg" />
        </div>
        <div class="overlap-3">
          <div class="rectangle-2"></div>
          <img class="python-programming" src="img/PythonProgramming.jpeg" />
        </div>
        <div class="overlap-4">
          <div class="rectangle-2"></div>
          <img
            class="omniscient-reader-s"
            src="img/OmniscientReadersViewpoint.jpeg"
          />
        </div>
        <img class="logo-filkom" src="img/LogoFilkom.png" />
        <div class="logoruangbaca-wrapper">
          <img class="logoruangbaca" src="img/LogoRuangBaca.png" />
        </div>
      </div>
    </div>
  </body>
</html>