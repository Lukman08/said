<x-dcore.head />
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <x-dcore.nav />
        <x-dcore.sidebar />
        <div class="main-content">
            <section class="section">
                {{-- <x-dcore.card /> --}}

                <!-- MAIN OF CENTER CONTENT -->
                @can('isAdmin')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Dashboard Admin</h4>
                                </div>
                                <div class="card-body">


                                    <div class="row">

                                        <div class="col-md-4 col-sm-12 mb-3">
                                            <div class="card bg-dark">
                                                {{-- <img src=" gambar1.jpg" class="card-img-top" alt="..."> --}}

                                                <div class="card-body">
                                                    <img src="{{ asset('dashboard/user.png') }}" class="card-img-top"
                                                        alt="...">
                                                    <div class="card-title">
                                                        <h4>{{ $datauser }}</h4>
                                                    </div>
                                                    Data User
                                                </div>

                                                <div class="card-footer">
                                                    <a href="{{ route('datauser') }}"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-success">
                                                {{-- <img src="gambar1.jpg" class="card-img-top" alt="..."> --}}

                                                <div class="card-body">
                                                    <img src="{{ asset('dashboard/pengajuan.png') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4>{{ $sktm }}</h4>
                                                    </div>
                                                    Pengajuan SKTM
                                                </div>

                                                <div class="card-footer">
                                                    <a href="{{ route('sktm') }}" class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-danger">
                                                {{-- <img src="gambar1.jpg" class="card-img-top" alt="..."> --}}

                                                <div class="card-body">
                                                    <img src="{{ asset('dashboard/pengajuan.png') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4>{{ $slipgaji }}</h4>
                                                    </div>
                                                    Pengajuan Keterangan Slip Gaji
                                                </div>

                                                <div class="card-footer">
                                                    <a href="{{ route('slipgaji') }}"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-danger">
                                                {{-- <img src="gambar1.jpg" class="card-img-top" alt="..."> --}}

                                                <div class="card-body">
                                                    <img src="{{ asset('dashboard/informasi.png') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4>{{ $informasi }}</h4>
                                                    </div>
                                                    Informasi
                                                </div>

                                                <div class="card-footer">
                                                    <a href="{{ route('informasi') }}"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="card bg-warning">
                                                {{-- <img src="https://img.freepik.com/free-vector/follow-me-social-business-theme-design_24877-50426.jpg?size=338&ext=jpg&ga=GA1.2.351400492.1650332179" class="card-img-top" alt="..."> --}}

                                                <div class="card-body">
                                                    <img src="{{ asset('dashboard/aspirasi.png') }}"
                                                        class="card-img-top" alt="...">
                                                    <div class="card-title">
                                                        <h4>{{ $aspirasi }}</h4>
                                                    </div>
                                                    Aspirasi
                                                </div>

                                                <div class="card-footer">
                                                    <a href="{{ route('aspirasi') }}"
                                                        class="card-link">Selengkapnya.</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan

                                @can('isUser')
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Dashboard User</h4>
                                                </div>
                                                <div class="card-body">


                                                    <div class="row">
                                                        <h3>Selamat Datang {{ Auth::user()->name }}.</h3>
                                                        <img src="{{ asset('dashboard/alurpengajuan.png') }}"
                                                            class="card-img-top" alt="...">
                                                    </div>
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
