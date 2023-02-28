  <!-- Main Sidebar  -->
  <aside class="main-sidebar sidebar-dark-success elevation-4">

    <!-- Brand Logo -->
      <a href="{{ route('dashboard.index') }}" class="brand-link">
        <img src="images/icon/iconbg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light fw-bold">THELEMA</span>
      </a>


    <!-- Akhir Brand Logo -->

    <!-- Sidebar Menu -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fa-solid fa-house"></i>
                  <p>Home</p>
                </a>
          </li>
          <!-- menu user -->
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa-solid fa-user"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('viewdatatour.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-shop"></i>
                  <p>
                    Tour
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('profile.index') }}" class="nav-link">          
                <i class="nav-icon fa-regular fa-user"></i>
                  <p>
                    Profile
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir menu user -->

          <!-- menu admin -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class=" nav-icon fa-solid fa-user-shield"></i>
              <p>
                SuperAdmin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Manajemen User
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Tour
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Order
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Kategori Tour
                  </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    Pesan
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <!-- akhir menu admin -->

        </ul>

        
      </nav>
    </div>
    <!-- Akhir sidebar menu -->
 
  </aside>

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="images/icon/iconbg.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text fw-bold font-weight-light">THELEMA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="images/icon/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-header">Navigasi</li> -->
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('manajementour.index') }}" class="nav-link">          
                <i class="nav-icon fa-solid fa-shop"></i>
                  <p>
                    Manajemen Tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa-solid fa-users-gear"></i>
              <p>
              Manajemen User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('manajemenusermember.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>member</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manajemenuserbiro.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Biro wisata</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="{{ route('kategoritour.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-list"></i>
                  <p>
                    Kategori Tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('pesan.index') }}" class="nav-link">          
                  <i class="nav-icon far fa-envelope"></i>
                  <p>
                    Pesan Kontak
                  </p>
                </a>
          </li>
          
          <li class="nav-header"> BIRO WISATA</li>
          <li class="nav-item">
                <a href="{{ route('dashboard.index') }}" class="nav-link ">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('viewdatatour.index') }}" class="nav-link">          
                  <i class="nav-icon  fa-solid fa-book-open-reader"></i>
                  <p>
                    Tour
                  </p>
                </a>
          </li>
          <li class="nav-item">
                <a href="{{ route('manajemenorder.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-cart-plus"></i>
                  <p>
                    Order
                  </p>
                </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Akhir main sidebar  -->