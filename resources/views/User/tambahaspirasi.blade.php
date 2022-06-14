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
                                    <h4>Tulis aspirasi anda.</h4>
                                </div>
                                @if (session('success'))
                                    <div class="alert alert-success mt-4">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="card-body">
                                            <form action="{{ route('insertaspirasi') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Aspirasi</label>
                                                    <input type="text" name="aspirasi" class="form-control"
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
@endcan
