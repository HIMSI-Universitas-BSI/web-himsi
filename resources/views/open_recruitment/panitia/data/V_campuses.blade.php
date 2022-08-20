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
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Data Seluruh Kampus</h4>
                            <h6 class="card-subtitle">
                                Table ini merupakan rekap singkat dari seluruh kampus click pada data table untuk lebih
                                detail
                            </h6>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered no-wrap"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th class="text-capitalize text-center" rowspan="2"
                                                style="vertical-align: middle">no
                                            </th>
                                            <th class="text-capitalize text-center" rowspan="2"
                                                style="vertical-align: middle">
                                                kampus</th>
                                            <th class="text-capitalize text-center" rowspan="2"
                                                style="vertical-align: middle">
                                                Pendaftar</th>
                                            <th class="text-capitalize text-center text-center" colspan="2">Interview
                                            </th>
                                        </tr>
                                        <tr>
                                            <th class="text-capitalize text-center">Sudah</th>
                                            <th class="text-capitalize text-center">Belum</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($campuses as $campus)
                                            @php
                                                $sudahInterview = $campus->openRecruitment->where('status_interview', 'sudah')->count();
                                                $belumInterview = $campus->openRecruitment->where('status_interview', 'belum')->count();
                                            @endphp
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td class="text-capitalize" style="cursor: pointer"
                                                    onclick="window.location.href= '/panitia/openrecruitment/campus/{{ $campus->id }}'">
                                                    {{ $campus->name }}
                                                </td>
                                                <td class="text-center" style="cursor: pointer"
                                                    onclick="window.location.href= '/panitia/openrecruitment/campus/{{ $campus->id }}'">
                                                    {{ $campus->openRecruitment->count() }}
                                                </td>
                                                <td class="text-center"
                                                    @if ($sudahInterview > 0) style="cursor: pointer" 
                                                onclick="window.location.href= '/panitia/openrecruitment/campus/{{ $campus->id }}/sudah'" @endif>
                                                    {{ $sudahInterview }}
                                                </td>
                                                <td class="text-center"
                                                    @if ($sudahInterview > 0) style="cursor: pointer" 
                                                onclick="window.location.href= '/panitia/openrecruitment/campus/{{ $campus->id }}/belum'" @endif>
                                                    {{ $belumInterview }}
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
