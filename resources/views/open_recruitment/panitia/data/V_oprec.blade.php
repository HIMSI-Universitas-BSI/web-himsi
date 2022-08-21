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
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @include('layouts.partials.alert-bs4')
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data oprec Kampus {{ $campus }}</h4>
                            <h6 class="card-subtitle">
                                Table ini merupakan data seluruh pendaftar dari kampus {{ $campus }} click pada
                                data untuk melihat detailnya
                            </h6>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize">no</th>
                                            <th class="text-capitalize">NIM</th>
                                            <th class="text-capitalize">nama lengkap</th>
                                            <th class="text-capitalize">asal kampus</th>
                                            <th class="text-capitalize">semester</th>
                                            <th class="text-capitalize">status interview</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($openRecruitment as $oprec)
                                            <tr style="cursor: pointer"
                                                onclick="window.location.href = '/panitia/openrecruitment/{{ $oprec->id }}'">
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $oprec->NIM }}</td>
                                                <td class="text-capitalize">{{ $oprec->full_name }}</td>
                                                <td>{{ $oprec->campuses->name }}</td>
                                                <td>{{ $oprec->semester }}</td>
                                                <td><span
                                                        class="text-capitalize @if ($oprec->status_interview == 'belum') text-danger @else text-success @endif">{{ $oprec->status_interview }}</span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-capitalize">no</th>
                                            <th class="text-capitalize">NIM</th>
                                            <th class="text-capitalize">nama lengkap</th>
                                            <th class="text-capitalize">asal kampus</th>
                                            <th class="text-capitalize">semester</th>
                                            <th class="text-capitalize">status interview</th>
                                        </tr>
                                    </tfoot>
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
