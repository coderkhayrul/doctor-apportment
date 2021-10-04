            <div class="page-wrap">
                <div class="app-sidebar colored">
                    <div class="sidebar-header">
                        <a class="header-brand" href="index.html">
                            <div class="logo-img">
                                <img src="{{ asset('template') }}/src/img/brand-white.svg" class="header-brand-img"
                                    alt="lavalite">
                            </div>
                            <span class="text">Hospital</span>
                        </a>
                        <button type="button" class="nav-toggle"><i data-toggle="expanded"
                                class="ik ik-toggle-right toggle-icon"></i></button>
                        <button id="sidebarClose" class="nav-close"><i class="ik ik-x"></i></button>
                    </div>

                    <div class="sidebar-content">
                        <div class="nav-container">
                            <nav id="main-menu-navigation" class="navigation-main">
                                <div class="nav-lavel">Navigation</div>
                                <!-- DASHBOARD START -->
                                <div class="nav-item active">
                                    <a href="{{ url('dashboard') }}"><i
                                            class="ik ik-bar-chart-2"></i><span>Dashboard</span></a>
                                </div>
                                <!-- DASHBOARD END -->
                                <!-- DOCTORS START -->
                                @if (Auth::check() && Auth::user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Doctors</span> <span
                                            class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{ route('doctor.create') }}" class="menu-item">Create</a>
                                        <a href="{{ route('doctor.index') }}" class="menu-item">View</a>
                                    </div>
                                </div>
                                @endif
                                <!-- DOCTORS END -->
                                <!-- APPOINTMET TIME START -->
                                @if (Auth::check() && Auth::user()->role->name === 'doctor')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Appointment Time</span> <span
                                            class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{ route('appointment.create') }}" class="menu-item">Create</a>
                                        <a href="{{ route('appointment.index') }}" class="menu-item">Check</a>
                                    </div>
                                </div>
                                @endif
                                <!-- APPOINTMET TIME END -->
                                <!-- PATIENT APPOINTMET START -->
                                @if (Auth::check() && Auth::user()->role->name === 'admin')
                                <div class="nav-item has-sub">
                                    <a href="javascript:void(0)"><i class="ik ik-layers"></i><span>Patient Appointment</span> <span
                                            class="badge badge-danger"></span></a>
                                    <div class="submenu-content">
                                        <a href="{{ route('patient') }}" class="menu-item">Today Appointment</a>
                                        <a href="{{ route('all.appointment') }}" class="menu-item">All Time Appointments</a>
                                    </div>
                                </div>
                                @endif
                                <!-- PATIENT APPOINTMET END -->
                                <!-- LOGOUT START -->
                                <div class="nav-item active">
                                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        href="{{ route('logout') }}"><i
                                        class="ik ik-power dropdown-icon"></i>
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                <!-- LOGOUT END -->
                            </nav>
                        </div>
                    </div>
                </div>
