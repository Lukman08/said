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
                                    <h4>Informasi</h4>
                                </div>
                                <div class="card-body">
                                    <a class="btn btn-outline-success" href="{{ route('tambahinformasi') }}"
                                        role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg> Tambah</a>

                                    @if (session('success'))
                                        <div class="alert alert-success mt-4">
                                            {{ session('success') }}
                                        </div>
                                    @elseif (session('update'))
                                        <div class="alert alert-info mt-4">
                                            {{ session('update') }}
                                        </div>
                                    @elseif (session('delete'))
                                        <div class="alert alert-danger mt-4">
                                            {{ session('delete') }}
                                        </div>
                                    @endif

                                    <table class="table mt-2">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Judul</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Isi</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $index => $row)
                                                <tr>
                                                    <th scope="row">{{ $index + $data->firstItem() }}</th>
                                                    <td class="card-text">{!! Str::limit($row->judul, 25) !!}</td>

                                                    <td>
                                                        <img src="{{ asset('gambarinformasi/' . $row->gambar) }}" alt=""
                                                            style="width:100px">
                                                    </td>
                                                    <td class="card-text">{!! Str::limit($row->isi, 35) !!}</td>
                                                    <td>
                                                        <div class="btn-group dropleft">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-toggle="dropdown" aria-expanded="false">
                                                                Menu
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item"
                                                                    href="{{ route('editinformasi', $row->id) }}">Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('deleteinformasi', $row->id) }}">Hapus</a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $data->links() }}
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
                                    <h4>Informasi Terbaru</h4>
                                </div>
                                <div class="card-body">
                                    @foreach ($data as $row)
                                        <div class="row">
                                            <div class="col">
                                                <!-- Post list:start -->
                                                <div class="card mb-4">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <!-- thumbnail:start -->
                                                                <!-- true -->
                                                                <img class="card-img-top"
                                                                    src="{{ asset('gambarinformasi/' . $row->gambar) }}"
                                                                    alt="Title">
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <h5 class="card-title">{{ $row->judul }}</h5>
                                                                <p class="card-text">{!! Str::limit($row->isi, 250) !!}
                                                                </p>
                                                                <a href="{{ route('detailinformasi', $row->id) }}"
                                                                    class="btn btn-primary">
                                                                    Selengkapnya.
                                                                </a>
                                                                <p class="card-text">Diubah pada :
                                                                    {{ $row->updated_at }}.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    @endforeach
                                    <!-- empty -->
                                    {{ $data->links() }}
                                    <!-- Post list:end -->
                                </div>
                            </div>

                            <!-- pagination:start -->
                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                            <!-- pagination:end -->

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
