@can('isUser')
    <x-dcore.head />
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <x-dcore.nav />
            <x-dcore.sidebar />
            <div class="main-content">
                <section class="section">

                    <!-- MAIN OF CENTER CONTENT -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pengajuan Slip Gaji</h4>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-outline-success" href="{{ route('tambahslipgaji') }}"
                                        role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg> Tambah</a>

                                    <table class="table mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $nom = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">{{ $nom++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->jeniskelamin }}</td>
                                                    <td>{{ $row->alamat }}</td>
                                                    <td>
                                                        @if ($row->keterangan == 0)
                                                            <span class="badge badge-danger">Belum di acc</span>
                                                        @else
                                                            <span class="badge badge-success">Sudah di acc</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($row->keterangan == 0)
                                                            <span class="badge badge-secondary">Sedang Diproses</span>
                                                        @else
                                                            <a class="btn btn-success"
                                                                href="{{ route('downloadslipgaji', $row->id) }}"
                                                                role="button">Download</a>
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
@endcan

@can('isAdmin')
    <x-dcore.head />
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <x-dcore.nav />
            <x-dcore.sidebar />
            <div class="main-content">
                <section class="section">

                    <!-- MAIN OF CENTER CONTENT -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Pengajuan Slip Gaji</h4>
                                </div>
                                <div class="card-body">

                                    @if (session('upload'))
                                        <div class="alert alert-success mt-4">
                                            {{ session('upload') }}
                                        </div>
                                    @elseif (session('acc'))
                                        <div class="alert alert-success mt-4">
                                            {{ session('acc') }}
                                        </div>
                                    @endif

                                    <table class="table mt-4">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $nom = 1;
                                            @endphp
                                            @foreach ($data as $row)
                                                <tr>
                                                    <th scope="row">{{ $nom++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->jeniskelamin }}</td>
                                                    <td>{{ $row->alamat }}</td>
                                                    <td>
                                                        @if ($row->keterangan == 0)
                                                            <span class="badge badge-danger">Belum di acc</span>
                                                        @else
                                                            <span class="badge badge-success">Sudah di acc</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="btn-group dropleft">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                Menu
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('detailslipgaji', $row->id) }}">Detail</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('accslipgaji', $row->id) }}">Acc</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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
@endcan
