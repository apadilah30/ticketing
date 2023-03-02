<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar bg-white shadow" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-lg">
        <div class="container justify-content-between">
            <div class="navbar-brand text-primary fw-bold">
                Travely
            </div>
            <div class="button-group">
                @guest
                <a href="{{route('login')}}" class="btn btn-primary btn-rounded fw-bold">Login</a>
                <a href="{{route('register')}}" class="btn btn-transparent shadow-none text-primary fw-bold">Daftar</a>
                @endguest

                @auth
                @if (Auth::user()->level  == 'SUPER_ADMIN')
                <a href="{{route('dashboard')}}" class="btn btn-primary btn-rounded fw-bold">Dashboard</a>
                @else
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                    </ul>
                    <ul class="navbar-nav float-end">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('assets/images/users/profile-pic.jpg')}}" alt="user" class="rounded-circle"
                                    width="40">
                                <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                        class="text-dark">{{Auth::user()->customer->name}}</span> <i data-feather="chevron-down"
                                        class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="{{route('index')}}">
                                    <i data-feather="user" class="svg-icon me-2 ms-1"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('logout')}}" method="post">
                                    @csrf
                                    <button class="dropdown-item" type="submit">
                                        <i data-feather="power" class="svg-icon me-2 ms-1"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
                @endif
                @endauth
            </div>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->