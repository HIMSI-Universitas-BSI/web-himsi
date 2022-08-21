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
                            <div class="action text-right">
                                @can('admin')
                                    <form action="/panitia/openrecruitment/{{ $oprec->id }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus?')"
                                            class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                @endcan
                                <button type="button" data-target="#ubah-status" data-toggle="modal"
                                    class="btn btn-sm btn-primary">UBAH STATUS</button>
                            </div>
                            <div class="row row-cols-2 row-cols-sm-1 my-3">
                                <div class="col col-md-4 d-flex flex-column align-items-center" style="gap: 1rem">
                                    <img src="{{ asset('storage/img/users/1.jpg') }}"
                                        style="width: 30vh; border-radius:1rem;height: fit-content;">
                                    <div class="text-center">
                                        <h3 class="text-capitalize">{{ $oprec->full_name }}</h2>
                                    </div>
                                </div>
                                <div class="col my-2">
                                    <table>
                                        <tr>
                                            <td>No Anggota</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td>{{ $oprec->no_anggota ? $oprec->no_anggota : '-' }}</td>
                                        </tr>
                                        <tr>
                                            <td>NIM</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td>{{ $oprec->NIM }}</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">Nama Lengkap</td>
                                            <td style="vertical-align: middle;"><span class="mx-2">:</span></td>
                                            <td class="text-capitalize">{{ $oprec->full_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Asal Kampus</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td>{{ $oprec->campuses->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Semester</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td>{{ $oprec->semester }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td><a href="mailto:{{ $oprec->email }}">{{ $oprec->email }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Whatsapp</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td><a
                                                    href="https://wa.me/{{ $oprec->whatsapp }}">{{ $oprec->whatsapp }}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>E-KTM</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td><button type="button" class="btn btn-sm btn-info" data-toggle="modal"
                                                    data-target="#ektm-modal" style="border-radius: 8px">LIHAT</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Curriculum Vitae</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td><a target="_blank" href="/storage/{{ $oprec->cv }}"
                                                    class="btn btn-sm btn-info" style="border-radius: 8px">LIHAT</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status Interview</td>
                                            <td><span class="mx-2">:</span></td>
                                            <td><span
                                                    class="text-capitalize @if ($oprec->status_interview == 'belum') text-danger @else text-success @endif">{{ $oprec->status_interview }}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: top;">Motivasi Bergabung</td>
                                        </tr>
                                    </table>
                                    <div class="p-2 shadow mt-2"
                                        style="border: 0.5px solid rgb(129, 129, 129);border-radius: 8px">
                                        {!! $oprec->motivasi_bergabung !!}
                                    </div>
                                    <div class="modal fade" id="ektm-modal" tabindex="-1"
                                        aria-labelledby="ektm-modalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="ektm-modalLabel">E-KTM
                                                        {{ $oprec->full_name }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body d-flex justify-content-center">
                                                    <img class="img-preview img-fluid mb-3 col-5"
                                                        src="/storage/{{ $oprec->ektm }}">
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="ubah-status" tabindex="-1"
                                        aria-labelledby="ektm-modalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="/panitia/openrecruitment/interview/{{ $oprec->id }}"
                                                method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ektm-modalLabel">Status Interview
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="input-group-text">
                                                                    <input id="interview-sudah"
                                                                        @checked($oprec->status_interview == 'sudah')
                                                                        name="status_interview" type="radio"
                                                                        value="sudah">
                                                                    <label for="interview-sudah"
                                                                        class="ml-2 m-0 text-success">sudah</label>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="input-group-text">
                                                                    <input id="interview-belum"
                                                                        @checked($oprec->status_interview == 'belum')
                                                                        name="status_interview" type="radio"
                                                                        value="belum">
                                                                    <label for="interview-belum"
                                                                        class="ml-2 m-0 text-danger">belum</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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
