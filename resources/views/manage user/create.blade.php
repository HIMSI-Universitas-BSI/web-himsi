<x-panitia-layout title="Tambah Pengguna">
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 align-self-center">
                    @include('layouts.partials.alert-bs4')
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Create Users</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- *************************************************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->
            <div class="card p-4">
                <form action="/manage-users" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="NIM">NIM</label>
                        <input type="number" class="form-control" id="NIM" placeholder="NIM"
                            value="{{ old('NIM') }}" name="NIM">
                        @error('NIM')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="full_name" placeholder="Nama Lengkap"
                            value="{{ old('full_name') }}" name="full_name">
                        @error('full_name')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pilih-campus">Kampus</label>
                        <select class="custom-select" id="pilih-campus" name="campus_name">
                            <option value="">pilih kampus</option>
                            @foreach ($campuses as $c)
                                <option value="{{ $c->name }} " @selected(old('campus_name') == $c->name)>{{ $c->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('campus_name')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="position">Jabatan</label>
                        <select class="custom-select" id="position" name="position_name">
                            <option value="">pilih jabatan</option>
                            @foreach ($positions as $p)
                                <option value="{{ $p->name }}" @selected(old('position_name') == $p->name)>{{ $p->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('position_name')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Kirim</button>
                </form>
            </div>
            <!-- *************************************************************** -->
            <!-- End First Cards -->
            <!-- *************************************************************** -->
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
</x-panitia-layout>
