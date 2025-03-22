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
                        <div class="col-sm-6"><h3 class="mb-0">Detail Service</h3></div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                        <div class="col-md-6">
                            <div class="card mb-4">
                                <div class="card-header"><h3 class="card-title">Data Detail Service</h3></div>
                                <!-- /.card-header -->
                                <div class="card-body p-0">
                                    <a href="{{route('detailService.create')}}">
                                        <input type="button" value="Tambah">
                                    </a>
                                    <table class="table table-striped">
                                        <tr>
                                            <td>No</td>
                                            <td>Sparepart</td>
                                            <td>Harga</td>
                                            <td>Aksi</td>
                                        </tr>
                                        @php $no = 1; @endphp
                                        @foreach($data as $row)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>{{$row->sparepart}}</td>
                                            <td>{{$row->harga}}</td>
                                            <td>
                                                <a href="{{route('detailService.edit', $row->id)}}">Edit</a>
                                                <a href="{{route('detailService.delete', $row->id)}}">Delete</a>
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