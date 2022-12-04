<div class="sidebar-wrapper sidebar-theme">
  <nav id="sidebar">
    <ul class="navbar-nav theme-brand flex-row  text-center">
      <li class="nav-item theme-logo">
        <a href="{{ url('/admin') }}">
          <img class="navbar-logo" alt="logo" src="{{ asset('/img/logo.png') }}">
        </a>
      </li>
      <li class="nav-item theme-text">
        <a href="{{ url('/admin') }}" class="nav-link"> News </a>
      </li>
      <li class="nav-item toggle-sidebar">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="feather feather-arrow-left sidebarCollapse">
          <line x1="19" y1="12" x2="5" y2="12"></line>
          <polyline points="12 19 5 12 12 5"></polyline>
        </svg>
      </li>
    </ul>
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
      <li class="menu {{ request()->route()->uri == 'admin' ? 'active': null }}">
        <a href="{{ url('admin/') }}" aria-expanded="{{ request()->route()->uri == 'admin' ? 'true': 'false' }}"
          aria-expanded="{{ strpos(url()->current(), 'news') == true ? 'true': 'false' }}" class="dropdown-toggle">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-bell">
              <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
              <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
            </svg>
            <span class="badge badge-success"></span>
            <span>ニュース</span>
          </div>
        </a>
      </li>
      <li class="menu {{ strpos(url()->current(), 'user') == true ? 'active': null }}">
        <a href="{{ url('admin/user/') }}"
          aria-expanded="{{ strpos(url()->current(), 'user') == true ? 'true': 'false' }}" class="dropdown-toggle">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-users">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
              <circle cx="9" cy="7" r="4"></circle>
              <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
              <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
            </svg>
            <span>ユーザー</span>
          </div>
        </a>
      </li>
      <li class="menu mt-5">
        <a href="{{ url('/') }}" aria-expanded="false" class="dropdown-toggle">
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="feather feather-log-out">
              <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
              <polyline points="16 17 21 12 16 7"></polyline>
              <line x1="21" y1="12" x2="9" y2="12"></line>
            </svg>
            <span class="badge badge-success"></span>
            <span>ユーザー画面</span>
          </div>
        </a>
      </li>
    </ul>
  </nav>
</div>