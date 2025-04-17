@include('layout.header')
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        @include('layout.navbar')
        <!--end::Header-->
        <!--begin::Sidebar-->
        @include('layout.sidebar')
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-sm-6"><h3 class="mb-0">Service</h3></div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Service</li>
                            </ol>
                        </div>
                    </div>
                <!--end::Row-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!--begin::Container-->
                <div class="container-fluid">
                    <!--begin::Row-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-11">
                                            <h3 class="card-title">Data Service</h3>
                                        </div>
                                            <div class="col-1 d-flex justify-content-end">
                                                <a href="{{route('service.create')}}" 
                                                class="btn btn-success btn-sm">Tambah</a>
                                            </div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>No</td>
                                            <td>Keluhan</td>
                                            <td>Tanggal Masuk</td>
                                            <td>Tanggal Keluar</td>
                                            <td>Aksi</td>
                                        </tr>
                                        @foreach($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$row->keluhan}}</td>
                                                <td>{{$row->tgl_masuk}}</td>
                                                <td>{{$row->tgl_keluar}}</td>
                                                <td>
                                                    <a href="{{route('pemilik.edit', $row->id)}}"
                                                    class="btn btn-warning">Edit</a>
                                                    <a href="{{route('pemilik.delete', $row->id)}}"
                                                    class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--end::App Main-->
        <!--begin::Footer-->
        @include('layout.bebas')
        <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('layout.footer')