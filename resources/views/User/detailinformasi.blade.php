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
                                <h3>{{ $data->judul }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="text-center">
                                    <img class="rounded" src="{{ asset('gambarinformasi/' . $data->gambar) }}"
                                        alt="" style="width:500px">
                                </div>
                                <p></p>
                                <p class="text-justify">{!! $data->isi !!}</p>
                                <p> </p>
                                <p>Diubah pada: {{ $data->updated_at }}</p>
                                <a href="{{ route('informasi_user') }}" class="btn btn-primary">
                                    Kembali
                                </a>
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
