            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">CareerCast</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">CC</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Dashboard</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="{{ url('/home') }}">Infografis</a></li>
                            </ul>
                        </li>
                        <li class="menu-header">Menu</li>

                        @if (Auth::user()->role_id == 1)
                            <li><a class="nav-link" href="{{ url('/pendataan') }}"><i class="fas fa-graduation-cap"></i>
                                    <span>Pendataan Alumni</span></a></li>
                            <li><a class="nav-link" href="{{ url('loker') }}"><i class="fas fa-briefcase"></i>
                                    <span>Pendataan Loker</span></a></li>
                        @elseif (Auth::user()->role_id == 2)
                            <li><a class="nav-link" href="{{ url('/forecasting') }}"><i class="far fa-address-book"></i>
                                    <span>Forecasting</span></a></li>
                        @endif

                        <li><a class="nav-link" href="{{ url('news') }}"><i class="fas fa-info-circle"></i>
                                <span>Informasi Loker</span></a></li>
                        <li><a class="nav-link" href="{{ url('/history') }}"><i class="fas fa-list"></i>
                                <span>History Alumni</span></a></li>

                </aside>
            </div>
