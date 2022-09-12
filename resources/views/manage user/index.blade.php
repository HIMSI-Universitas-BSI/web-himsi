<x-panitia-layout>
    <!-- This page plugin CSS -->
    <link href="{{ asset('template/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet">

    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.alert-bs4')
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Seluruh Users</h4>
                            <h6 class="card-subtitle">
                                Table ini merupakan data seluruh user yang mendapatkan hak akses dan hanya dapat di
                                akses oleh DPP
                            </h6>
                            <div class="my-2">
                                <a href="manage-users/create" class="btn btn-success">Tambah User</a>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-center" style="vertical-align: middle">no
                                            </th>
                                            <th class="text-capitalize text-center" style="vertical-align: middle">
                                                NIM</th>
                                            <th class="text-capitalize text-center" style="vertical-align: middle">
                                                Nama Lengkap</th>
                                            <th class="text-capitalize text-center text-center">Kampus
                                            </th>
                                            <th class="text-capitalize text-center text-center">Jabatan
                                            </th>
                                            <th class="text-capitalize text-center text-center">Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($users as $u)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $u->NIM }}</td>
                                                <td>{{ $u->full_name }}</td>
                                                <td>{{ $u->campuses->name }}</td>
                                                <td>{{ $u->positions->name }}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fas fa-eye"></i>
                                                    </button>
                                                    <button class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        {{-- <footer class="footer text-center text-muted">
            All Rights Reserved by Adminmart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer> --}}
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    <!--This page plugins -->
    <script src="{{ asset('template/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
</x-panitia-layout>
