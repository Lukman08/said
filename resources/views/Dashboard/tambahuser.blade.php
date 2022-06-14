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
                                <h4>Tambah Data Users</h4>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <div class="card-body">
                                        <form action="{{ route('insertuser') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">nama</label>
                                                <input type="text" name="name" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="text" name="email" class="form-control"
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                                <input type="password" name="password" class="form-control" bcrypt
                                                    id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                                <select class="form-select form-select-sm" name="role"
                                                    aria-label="form-select-sm example">
                                                    <option selected>Pilih Role</option>
                                                    <option value="1">manager</option>
                                                    <option value="2">user</option>
                                                </select>
                                            </div> --}}
                                            <button type="submit" class="btn btn-outline-primary">Submit</button>
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
