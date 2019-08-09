<header>
  <!-- Header desktop -->
  <div class="container-menu-desktop">

    <!-- Topbar -->
    <div class="top-bar">
      <div class="content-topbar flex-sb-m h-full container">
        <div class="right-top-bar flex-w h-full">
            @if(@auth()->user())
                <a href="#" class="flex-c-m trans-04 p-lr-25 btnLogout">Logout</a>
                <form action="{{ url('logout') }}" method="post" id="formLogout" class="d-none">
                    @csrf
                </form>
            @else
                <a href="{{ url('login') }}" class="flex-c-m trans-04 p-lr-25">
                    Login
                </a>
            @endif
        </div>
      </div>
    </div>

    <div class="wrap-menu-desktop">
      <nav class="limiter-menu-desktop container">

        <!-- Logo desktop -->
        <a href="{{ url('/') }}" class="logo">
          <img src="{{ asset('asset/images/icons/logo-01.png') }}" alt="IMG-LOGO">
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
          <ul class="main-menu">
            <li class="{{ request()->is('produk*') ? 'active-menu' : '' }}">
              <a href="{{ url('produk') }}">Products</a>

            </li>

            <li class="{{ request()->is('order*') ? 'active-menu' : '' }}">
              <a href="{{ url('order') }}">My Orders</a>
            </li>
          </ul>
        </div>

        <!-- Icon header -->
        <div class="wrap-icon-header flex-w flex-r-m">
          <div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
            <i class="zmdi zmdi-search"></i>
          </div>

          <a href="{{ url('cart') }}" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="
                    @if(@auth()->user() && (auth()->user()->cart->count() > 0))
                        {{ auth()->user()->cart->count() }}
                    @else
                        0
                    @endif">
            <i class="zmdi zmdi-shopping-cart"></i>
          </a>

        </div>
      </nav>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="{{ url('/') }}"><img src="{{ asset('asset/images') }}/icons/logo-01.png" alt="IMG-LOGO"></a>
    </div>

    <!-- Icon header -->
    <div class="wrap-icon-header flex-w flex-r-m m-r-15">
      <div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
        <i class="zmdi zmdi-search"></i>
      </div>

      <a href="{{ url('cart') }}" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
        <i class="zmdi zmdi-shopping-cart"></i>
      </a>
    </div>

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">
    <ul class="topbar-mobile">
      <li>
        <div class="right-top-bar flex-w h-full">
          <a href="{{ url('login') }}" class="flex-c-m p-lr-10 trans-04">
            Login
          </a>
        </div>
      </li>
    </ul>

    <ul class="main-menu-m">
      <li>
        <a href="{{ url('produk') }}">Products</a>
      </li>
      <li>
        <a href="{{ url('order') }}">My Orders</a>
      </li>
    </ul>
  </div>

  <!-- Modal Search -->
  <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
    <div class="container-search-header">
      <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
        <img src="{{ asset('asset/images') }}/icons/icon-close2.png" alt="CLOSE">
      </button>

      <form class="wrap-search-header flex-w p-l-15" action="{{ url('/produk') }}" method="get">
        <button type="submit" class="flex-c-m trans-04">
          <i class="zmdi zmdi-search"></i>
        </button>
        <input class="plh3" type="text" name="search" placeholder="Search...">
      </form>
    </div>
  </div>
</header>
