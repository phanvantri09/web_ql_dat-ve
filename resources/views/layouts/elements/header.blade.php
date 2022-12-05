<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#" style="margin-right: 60px;">
        <img src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp" height="70" alt="MDB Logo" loading="lazy" />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 topnav">
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link" href="#" style="font-size: 20px;"> Trang Chủ</a></a>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link" href="{{route('listhome')}}" style="font-size: 20px;"> List</a></a>
        </li>
        <li class="nav-item" style="margin-right: 20px;">
          <a class="nav-link" href="#" style="font-size: 20px;"> List</a></a>
          
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center" style="margin-right:70px ;">
      @guest
      @if (Route::has('login'))
      <a class="text-reset me-3" href="{{route('login')}}" style="font-size: 20px;">
        Login
      </a>
      @endif
      @else
      @if (Auth::user()->is_admin == 0)
      {{-- usser --}}
      <!-- Avatar -->
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false" style="margin-right: 80px;">
        <i class="fas fa-heart"></i> {{Auth::user()->name }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="#" style="font-size: 20px;">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="#" style="font-size: 20px;">Settings</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
              <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                </path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
              </svg>
              <span>
                {{ __('Logout') }}
              </span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </div>
      @elseif(Auth::user()->is_admin == 2)
      {{-- nhaf xe --}}
      <!-- Avatar -->
      <div class="dropdown">
        <a class="dropdown-toggle d-flex align-items-center hidden-arrow" id="navbarDropdownMenuAvatar" role="button" data-mdb-toggle="dropdown" aria-expanded="false" style="margin-right: 80px;">
         Chào: {{Auth::user()->name }}
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
          <li>
            <a class="dropdown-item" href="#" style="font-size: 20px;">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{route('add')}}" style="font-size: 20px;">Đăng Bài</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{route('list')}}" style="font-size: 20px;"> Quản Lý</a>
          </li>
          <li>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
              <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                </path>
                <polyline points="16 17 21 12 16 7"></polyline>
                <line x1="21" y1="12" x2="9" y2="12"></line>
              </svg>
              <span>
                {{ __('Logout') }}
              </span>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </a>
          </li>
        </ul>
      </div>
      @endif
      @endguest
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
