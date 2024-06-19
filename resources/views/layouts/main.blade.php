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
    <script src="https://kit.fontawesome.com/74ee38b4ad.js" crossorigin="anonymous"></script>

    <!-- BOOTSTRAPS PROFILE -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- BOOTSTRAPS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
  
  <body>
    <div class="sidebar">
      <div class="logo-details">
      <a href="/Dashboard">
      <img class="logo-RB" src="{{ asset('img/LogoRuangBaca.png') }}" /></a>
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
        @if(auth()->check())
        <form action="/logout" method="POST" class="logout-form">
                        @csrf
                        <button type="submit" class="logout-button {{ ($title === 'Logout') ? 'active' : '' }}">
                            <i class="bx bx-log-out"></i>
                            <span class="links_name">Log out</span>
                        </button>
                    </form>
        @else
        <a href="/login">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="links_name">Login</span>
          </a>
        @endif
        </li>
      </ul>

      @can('admin')
      <h6 class="links-name text-center text-white pt-20">Administrator</h6>
        <ul class="nav-links">
        <li>
            <a href="/AdminBooks" class="{{ ($title === 'Books') ? 'active' : '' }}">
            <i class="fa-solid fa-book-bookmark"></i>
              <span class="links_name">Books</span>
            </a>
          </li>
        </ul>
        @endcan
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
        
        @auth
          <div class="profile-details dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                @if(auth()->user()->profile_picture)
                    <img class="ellipse" src="{{ asset('storage/profile_pictures/' . auth()->user()->profile_picture) }}" alt="Profile Picture"/>
                @else
                    <img class="ellipse" src="{{ asset('img/Profile3.jpeg') }}" alt="Profile Picture"/>
                @endif
              <span class="admin_name">{{ auth()->user()->username }}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/Profile"><i class="bi bi-person-lines-fill"></i> Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                </form>
            </li>
            </ul>
          </div>
          
        @else
          <a class="nav-link" href="/login"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
        @endauth

        

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
