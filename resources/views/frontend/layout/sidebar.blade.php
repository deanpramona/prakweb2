<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#page-top">Start Bootstrap</a></li>
        <li class="sidebar-nav-item"><a href="{{ url('frontend/dashboard') }}">Home</a></li>
        <li class="sidebar-nav-item"><a href="{{ url('frontend/about') }}">About</a></li>
        <li class="sidebar-nav-item"><a href="{{ url('frontend/dashboard') }}">Portfolio</a></li>
        <li class="sidebar-nav-item">
            @if (Auth::user()->role != 'pelanggan')
            <a href="{{ url('frontend/dashboard') }}">Contact</a>
            @endif
        </li>
        <li class="sidebar-nav-item">
            <a href="{{ url('admin/dashboard') }}">Dashboard Admin</a>
        </li>
        <li class="sidebar-nav-item"> <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
             @csrf
         </form>
        </li>
    </ul>
</nav>