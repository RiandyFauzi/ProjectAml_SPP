<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">SIM Spp</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">SPP</a>
      </div>
      <ul class="sidebar-menu">

          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="fas fa-fire"></i>
              <span>Dashboard</span>
            </a>
          </li>

            <li class="menu-header">Data Master</li>
            @if (auth()->user()->level=="admin")
            <li class="nav-item dropdown {{ Request::is('user', 'create_user') ? 'sidebar-item active' : '' }}">
              <a href="{{ route('user') }}" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data User</span>
              </a>
              <a href="/kelas" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data Kelas</span>
              </a>
              <a href="/spp" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data SPP</span>
              </a>
            </li>
            @endif
        </ul>
    </aside>
  </div>
