<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>RuangBaca</title>
    <link rel="stylesheet" href="css/mainStyle.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- IKON -->
    <script src="https://kit.fontawesome.com/74ee38b4ad.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
      <img class="logo-RB" src="img/LogoRuangBaca.png" />
      </div>
      <ul class="nav-links">
        <li>
          <a href="/Dashboard" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/WaitingList">
            <i class="bx bx-box"></i>
            <span class="links_name">Waiting List</span>
          </a>
        </li>
        <li>
          <a href="/BorrowedBooks">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Borrowed Books</span>
          </a>
        </li>
        <li>
          <a href="/History">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Borrowing History</span>
          </a>
        </li>
        <li class="log_out">
          <a href="/">
            <i class="bx bx-log-out"></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          @yield('sidebar-button')
        </div>
        <div class="search-box">
          <input type="text" placeholder="Cari Judul Buku, Penulis" />
          <i class="bx bx-search"></i>
        </div>
        <div class="notification-bell">
                <i class="fa-regular fa-bell fa-2xl"></i>
        </div>
        <div class="profile-details">
          <img class="ellipse" src="img/profile.jpeg" alt="" />
          <span class="admin_name">Kim Dokja</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>
        </div>
      </div>
    </section>
    <div class="main-content">
        @yield('content') 
    </div>

    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>
