 <!-- Sidebar -->
 <div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{route('admin.home')}}" class="logo">
          <img
            src="page/assets/img/logo/logo.svg"
            alt="navbar brand"
            class="navbar-brand"
            height="20"
          />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar" style="color: #f90000 !important;">
            <i class="gg-menu-right"></i>
          </button>
          <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
          </button>
        </div>
        <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
        </button>
      </div>
      <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
      <div class="sidebar-content">
        <ul class="nav nav-secondary">
          <li class="nav-item {{ request()->routeIs('admin.home') ? 'active' : '' }}">
              <a href="{{ route('admin.home') }}">
                  <i class="fas fa-home"></i>
                  <p>Trang quản trị</p>
              </a>
          </li>
          <li class="nav-item {{ request()->routeIs('admin.categories') ? 'active' : '' }}">
              <a href="{{ route('admin.categories') }}">
                  <i class="fa fa-certificate" aria-hidden="true"></i>
                  <p>Loại gói cước</p>
                  <span class="badge badge-success">{{ $totalCategory ?? 0 }}</span>
              </a>
          </li>
          <li class="nav-item {{ request()->routeIs('admin.tags') ? 'active' : '' }}">
              <a href="{{ route('admin.tags') }}">
                  <i class="fa fa-certificate" aria-hidden="true"></i>
                  <p>Chi tiết gói cước</p>
                  <span class="badge badge-success">{{ $totalTag ?? 0 }}</span>
              </a>
          </li>
          <li class="nav-item {{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
              <a href="{{ route('admin.products.index') }}">
                  <i class="fa fa-certificate" aria-hidden="true"></i>
                  <p>Gói cước</p>
                  <span class="badge badge-success">{{ $totalProduct ?? 0 }}</span>
              </a>
          </li>
          <li class="nav-item {{ request()->routeIs('admin.comments') ? 'active' : '' }}">
              <a href="{{ route('admin.comments') }}">
                  <i class="fas fa-comment"></i>
                  <p>Bình luận</p>
                  <span class="badge badge-secondary">{{ $totalComments ?? 0 }}</span>
              </a>
          </li>
      </ul>
      
      </div>
    </div>
  </div>
  <!-- End Sidebar -->
  