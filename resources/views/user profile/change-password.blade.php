<x-panitia-layout title="Rubah Password">
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
                                <li class="breadcrumb-item"><a href="/user/rubahPass">Rubah Password</a>
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
                <form action="/user/changePassAct" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="password-lama">Password Lama</label>
                        <input type="password" class="form-control" id="password-lama" placeholder="Password"
                            value="{{ old('passwordLama') }}" name="passwordLama">
                        @error('passwordLama')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-baru">Password Baru</label>
                        <input type="password" class="form-control" id="password-baru" placeholder="password baru"
                            value="{{ old('passwordBaru') }}" name="passwordBaru">
                        @error('passwordBaru')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password-konfirmasi">Konfirmasi</label>
                        <input type="password" class="form-control" id="password-konfirmasi" name="passwordKonfirmasi"
                            value="{{ old('passwordKonfirmasi') }}" placeholder="password konfirmasi">
                        @error('passwordKonfirmasi')
                            <small class="text-danger ml-2">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Rubah Password</button>
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
