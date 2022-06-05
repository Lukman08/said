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
                                <h4>Pengajuan SKTM</h4>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="card-body">
                                        <form action="{{ route('insertsktm') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tempat
                                                    Lahir</label>
                                                <input type="text" name="tempatlahir" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal
                                                    Lahir</label>
                                                <input type="date" name="tanggallahir" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Agama</label>
                                                <select class="form-control" name="agama">
                                                    <option disabled selected value>Pilih agama</option>
                                                    <option>Islam</option>
                                                    <option>Kristen</option>
                                                    <option>Khatolik</option>
                                                    <option>Hindu</option>
                                                    <option>Buddha</option>
                                                    <option>Konghucu</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Jenis
                                                    Kelamin</label>
                                                <select class="form-control" name="jeniskelamin">
                                                    <option disabled selected value>Pilih jenis Kelamin</option>
                                                    <option>Laki Laki</option>
                                                    <option>Perempuan</option>
                                                </select>
                                            </div>



                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Pekerjaan</label>
                                                <input type="text" name="pekerjaan" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                                <input type="text" name="alamat" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Nama Orang
                                                    Tua</label>
                                                <input type="text" name="name_ortu" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tempat
                                                    Lahir Orang Tua</label>
                                                <input type="text" name="tempatlahir_ortu" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal
                                                    Lahir Orang Tua</label>
                                                <input type="date" name="tanggallahir_ortu" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Pekerjaan Orang
                                                    Tua</label>
                                                <input type="text" name="pekerjaan_ortu" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Alamat Orang
                                                    Tua</label>
                                                <input type="text" name="alamat_ortu" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>

                                            <button type="submit" class="btn btn-outline-primary"
                                                id="exampleInputEmail1" aria-describedby="emailHelp">Submit</button>

                                        </form>
                                    </div>
                                </div>
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
