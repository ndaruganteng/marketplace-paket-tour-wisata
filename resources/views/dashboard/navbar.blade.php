

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('dashboard.index') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
              </a>
              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('home.index') }}">Back</a></li>
                <li><a class="dropdown-item" href="#">Log out</a></li>
              </ul>
            </li>
    </ul>

    <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- navbar dropdown -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Username
              </a>
              <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ route('home.index') }}">Back</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->

      <!-- Navbar logout -->
          <!-- <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fa-solid fa-right-from-bracket"></i>          
            </a>
          </li> -->
    </ul>
  </nav>