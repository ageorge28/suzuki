<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo e(asset('logo.png')); ?>" alt="AdminLTE Logo" class="" style="opacity: .8">
      
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo e(asset('backend/dist/img/suzuki-logo.png')); ?>" class="elevation-2" alt="User Image">
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
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(request()->is('*dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            
          
          
          <li class="nav-item" >
            <a href="<?php echo e(route('admin.profile')); ?>" class="nav-link <?php echo e(request()->is('*profile') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Administrator Profile
              </p>
            </a>
          </li>

          <li class="nav-item" >
            <a href="<?php echo e(route('admin.site')); ?>" class="nav-link <?php echo e(request()->is('*site') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Website Settings
              </p>
            </a>
          </li>


          
          <li class="nav-item">
            <a href="<?php echo e(route('admin.categories')); ?>" class="nav-link <?php echo e(request()->is('*/categories') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Categories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.subcategories')); ?>" class="nav-link <?php echo e(request()->is('*subcategories') ? 'active' : ''); ?>">

              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Sub Categories
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo e(route('admin.motorcycles')); ?>" class="nav-link <?php echo e(request()->is('*motorcycles') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-motorcycle"></i>
              <p>
                Motorcycles
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.accessories')); ?>" class="nav-link <?php echo e(request()->is('*accessories') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
                Accessories
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.workshop')); ?>" class="nav-link <?php echo e(request()->is('*workshop') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Workshop
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.about')); ?>" class="nav-link <?php echo e(request()->is('*about') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                About
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.branches')); ?>" class="nav-link <?php echo e(request()->is('*branches') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Branches
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="<?php echo e(route('admin.banners')); ?>" class="nav-link <?php echo e(request()->is('*banner') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Banners
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.sliders')); ?>" class="nav-link <?php echo e(request()->is('*slider') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Sliders
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('admin.reviews')); ?>" class="nav-link <?php echo e(request()->is('*reviews') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Reviews
              </p>
            </a>
          </li>

          

          <li class="nav-item">
            <a href="<?php echo e(route('admin.seo')); ?>" class="nav-link <?php echo e(request()->is('*seo') ? 'active' : ''); ?>">

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
  </aside><?php /**PATH /home/u147280632/domains/suzukipathanamthitta.com/public_html/resources/views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>