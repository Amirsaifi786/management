
    <!-- Brand Logo -->
    <a href="{{route('furniture')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">amir@gmail.com</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Amir saifi</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('furniture')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              
             
            </ul>
          </li>
    
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('blogdata')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product list</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('addblog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>

              
            </ul>
          </li>
       <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="{{route('furnitutelist')}}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p class="badge badge-info right">
                Furniture Table List
                {{-- <span class="badge badge-info right">2</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('employlist')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Employee Table List
              </p>
            </a>
          </li>        
          <li class="nav-item">
            <a href="{{route('testimoniallist')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Testimonial Table List
              </p>
            </a>
          </li>    
          <li class="nav-item">
            <a href="{{route('whychooseuslist')}}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Whychooseus Table List
              </p>
            </a>
          </li>    
             </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
