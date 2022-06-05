@can('isAdmin')
    <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <a href="{{ route('home') }}">SAID</a>
            </div>
            <div class="sidebar-brand sidebar-brand-sm">
                <a href="{{ route('home') }}">SA</a>
            </div>
            <ul class="sidebar-menu">
                <li class="menu-header">Dashboard</li>
                <li class="dropdown">
                    <a href="{{ route('home') }}" class="nav-link"><i
                            class="fas fa-fire"></i><span>Dashboard</span></a>
                </li>

                <li class="menu-header">MAIN MENU</li>

                <li class="dropdown">
                    <a href="{{ route('datauser') }}" class="nav-link "><i class="fas fa-th-large"></i> <span>Data
                            User</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                        <span>Pengajuan Surat</span></a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('sktm') }}">SKTM</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('slipgaji') }}">Slip Gaji</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{ route('informasi') }}" class="nav-link"><i class="fas fa-map-marker-alt"></i>
                        <span>Informasi</span></a>

                </li>

                <li class="dropdown">
                    <a href="{{ route('aspirasi') }}" class="nav-link "><i class="fas fa-plug"></i>
                        <span>Aspirasi</span></a>

                </li>
            @endcan

            @can('isUser')
                <div class="main-sidebar sidebar-style-2">
                    <aside id="sidebar-wrapper">
                        <div class="sidebar-brand">
                            <a href="{{ route('home') }}">SAID</a>
                        </div>
                        <div class="sidebar-brand sidebar-brand-sm">
                            <a href="{{ route('home') }}">SA</a>
                        </div>
                        <ul class="sidebar-menu">
                            <li class="menu-header">Dashboard</li>
                            <li class="dropdown">
                                <a href="{{ route('home') }}" class="nav-link"><i
                                        class="fas fa-fire"></i><span>Dashboard</span></a>
                            </li>

                            <li class="menu-header">MAIN MENU</li>


                            <li class="dropdown">
                                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i>
                                    <span>Pengajuan Surat</span></a>
                                <ul class="dropdown-menu">
                                    <li><a class="nav-link" href="{{ route('pengajuansktm') }}">SKTM</a>
                                    </li>
                                    <li><a class="nav-link" href="{{ route('pengajuanslipgaji') }}">Slip Gaji</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="{{ route('informasi_user') }}" class="nav-link"><i
                                        class="fas fa-map-marker-alt"></i>
                                    <span>Informasi</span></a>

                            </li>
                            <li class="dropdown">
                                <a href="{{ route('kirimaspirasi') }}" class="nav-link "><i
                                        class="fas fa-plug"></i> <span>Aspirasi</span></a>

                            </li>
                        @endcan
                        {{-- <li class="dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#">Calendar</a>
                    </li>
                    <li><a class="nav-link" href="#">ChartJS</a>
                    </li>
                    <li><a class="nav-link" href="#">DataTables</a></li>
                    <li><a class="nav-link" href="#">Flag</a></li>
                </ul>
            </li> --}}
                    </ul>

                    {{-- <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="#" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div> --}}
                </aside>
            </div>
