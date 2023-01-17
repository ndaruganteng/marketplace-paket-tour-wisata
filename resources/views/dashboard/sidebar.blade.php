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
                <a href="{{ route('updateblog.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-newspaper"></i>
                  <p>
                    Blog
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">          
                  <i class="nav-icon fa-solid fa-users-gear"></i>
                  <p>
                    User
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
  <!-- Akhir main sidebar  -->