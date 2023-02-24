<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
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

                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{route('data-master.transportation-type.index')}}" aria-expanded="false">
                        <i class="fas fa-plane"></i>
                        <span class="hide-menu">Transportation Type</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('data-master.transportation.index')}}" aria-expanded="false">
                        <i class="fas fa-train"></i>
                        <span class="hide-menu">Transportation</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('data-master.route.index')}}" aria-expanded="false">
                        <i class="fas fa-map-signs"></i>
                        <span class="hide-menu">Route</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Reports</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('reports.reservation.index')}}" aria-expanded="false">
                        <i class="far fa-credit-card"></i>
                        <span class="hide-menu">Reservation </span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Setting</span></li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{route('setting.application.index')}}" aria-expanded="false">
                        <i class="fas fa-cogs"></i>
                        <span class="hide-menu">Application </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
