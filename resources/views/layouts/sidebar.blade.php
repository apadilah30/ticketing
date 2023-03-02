<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item {{ request()->is('dashboard/*') ? 'selected' : false }}">
                    <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Data Master</span></li>

                <li class="sidebar-item {{ request()->is('data-master/transportation-type/*') ? 'selected' : false }}">
                    <a class="sidebar-link" href="{{route('data-master.transportation-type.index')}}" aria-expanded="false">
                        <i class="fas fa-plane"></i>
                        <span class="hide-menu">Transportation Type</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('data-master/transportation/*') ? 'selected' : false }}"> 
                    <a class="sidebar-link sidebar-link" href="{{route('data-master.transportation.index')}}" aria-expanded="false">
                        <i class="fas fa-train"></i>
                        <span class="hide-menu">Transportation</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('data-master/route/*') ? 'selected' : false }}"> 
                    <a class="sidebar-link sidebar-link" href="{{route('data-master.route.index')}}" aria-expanded="false">
                        <i class="fas fa-map-signs"></i>
                        <span class="hide-menu">Route</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Reports</span></li>
                <li class="sidebar-item {{ request()->is('reports/reservation/*') ? 'selected' : false }}"> 
                    <a class="sidebar-link sidebar-link" href="{{route('reports.reservation.index')}}" aria-expanded="false">
                        <i class="far fa-credit-card"></i>
                        <span class="hide-menu">Reservation </span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
