<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('logo.png') }}" alt="AdminLTE Logo" class="" style="opacity: .8">
      {{-- <span class="brand-text">GOLDEN SUZUKI</span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist/img/suzuki-logo.png') }}" class="elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('*dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> --}}
          
          
          <li class="nav-item" >
            <a href="{{ route('admin.profile') }}" class="nav-link {{ request()->is('*profile') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Administrator Profile
              </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="{{ route('admin.site') }}" class="nav-link {{ request()->is('*site') ? 'active' : '' }}">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Website Settings
              </p>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="{{ route('admin.categories') }}" class="nav-link {{ request()->is('*/categories') ? 'active' : '' }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Categories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.subcategories') }}" class="nav-link {{ request()->is('*subcategories') ? 'active' : '' }}">

              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Sub Categories
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('admin.motorcycles') }}" class="nav-link {{ request()->is('*motorcycles') ? 'active' : '' }}">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Motorcycles
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.accessories') }}" class="nav-link {{ request()->is('*accessories') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
                Accessories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.workshop') }}" class="nav-link {{ request()->is('*workshop') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Workshop
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.about') }}" class="nav-link {{ request()->is('*about') ? 'active' : '' }}">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.branches') }}" class="nav-link {{ request()->is('*branches') ? 'active' : '' }}">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Branches
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('admin.banners') }}" class="nav-link {{ request()->is('*banner') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banners
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.sliders') }}" class="nav-link {{ request()->is('*slider') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Sliders
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('admin.reviews') }}" class="nav-link {{ request()->is('*reviews') ? 'active' : '' }}">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>

          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Events
              </p>
            </a>
          </li> --}}

          <li class="nav-item">
            <a href="{{ route('admin.seo') }}" class="nav-link {{ request()->is('*seo') ? 'active' : '' }}">

              <i class="nav-icon fas fa-search"></i>
              <p>
                Search Engine SEO
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>