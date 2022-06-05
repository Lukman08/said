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
                                <h4>Detail Pengajuan SKTM</h4>
                            </div>
                            <div class="card-body">
                                <table class="table">

                                    <tr>
                                        <th scope="col">Nama</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->name }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tempat Tanggal Lahir</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->tempatlahir }}, {{ $data->tanggallahir }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Agama</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->agama }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->jeniskelamin }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Pekerjaan</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->pekerjaan }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->alamat }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Nama Orang Tua</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->name_ortu }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Tempat Tanggal Lahir Orang Tua</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->tempatlahir_ortu }},
                                            {{ $data->tanggallahir_ortu }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Pekerjaan Orang Tua</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->pekerjaan_ortu }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Alamat Orang Tua</th>
                                        <th scope="col">:</th>
                                        <th scope="col">{{ $data->alamat_ortu }}</th>
                                    </tr>
                                </table>

                                <form action="{{ route('uploadsktm', $data->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="file">Upload SKTM</label>
                                        <input class="form-control-file @error('filesktm') is-invalid @enderror"
                                            type="file" id="exampleInputEmail1" name="filesktm">
                                        @error('filesktm')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn-block btn-primary" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">Upload</button>

                                </form>
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
