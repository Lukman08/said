<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                <x-dcore.card />

                <!-- MAIN OF CENTER CONTENT -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>User</h4>
                            </div>
                            <div class="card-body">

                                @can('isUser')
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Transaksi</a>
                                    </li>
                                @endcan

                                @can('isManager')
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Laporan</a>
                                    </li>
                                @endcan

                                @can('isAdmin')
                                    <li class="nav-item">
                                        <a href="" class="nav-link">Pengaturan</a>
                                    </li>
                                @endcan
                            </div>
                        </div>
                    </div>

                </div>
                <!-- END OF CENTER CONTENT -->


            </section>
        </div>
        <x-dcore.footer />
    </div>
</div>
<x-dcore.script />
