<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>RuangBaca | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/mainStyle.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/profileStyle.css') }}" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- BOOTSTRAPS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- IKON -->
    <script src="https://kit.fontawesome.com/74ee38b4ad.js" crossorigin="anonymous"></script>

    <!-- BOOTSTRAPS PROFILE -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
      <img class="logo-RB" src="{{ asset('img/LogoRuangBaca.png') }}" />
      </div>
      <ul class="nav-links">
        <li>
          <a href="/Dashboard" class="{{ ($title === 'Dashboard') ? 'active' : '' }}">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="/WaitingList" class="{{ ($title === 'Waiting List') ? 'active' : '' }}">
            <i class="bx bx-box"></i>
            <span class="links_name">Waiting List</span>
          </a>
        </li>
        <li>
          <a href="/BorrowedBooks" class="{{ ($title === 'Borrowed Books') ? 'active' : '' }}">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Borrowed Books</span>
          </a>
        </li>
        <li>
          <a href="/History" class="{{ ($title === 'Borrowing History') ? 'active' : '' }}">
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
        <form action="/BooksData" class="search">
          <div class="search-box">
            <input type="text" placeholder="Cari Judul Buku, Penulis" name="search" value="{{ request('search') }}"/>
            <i class="bx bx-search"></i>
          </div>
        </form>
        <div class="notification-bell">
                <i class="fa-regular fa-bell fa-2xl"></i>
        </div>
        <div class="profile-details dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img class="ellipse" src="{{ asset('img/profile.jpeg') }}" alt="" />
            <span class="admin_name">{{ auth()->user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/Profile">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/">Logout</a></li>
          </ul>
        </div>

      </nav>
      <div class="main-content">
        @yield('content') 
    </div>
    
    </section>
  </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
