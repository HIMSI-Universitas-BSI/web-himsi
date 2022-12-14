<x-guest-layout title="Formulir Open Recruitment">
    <script src="{{ asset('js/jquery.js') }}"></script>
    @component('components.navbar')
        <div class="mx-auto py-2">
            <h5>FORMULIR PENDAFTARAN</h5>
        </div>
    @endcomponent
    <div class="container">
        @include('layouts.partials.alert')
        <div class="card shadow">
            <div class="card-header judul-halaman">
                <div class="text-center my-3">
                    <h4>Pendaftaran Anggota Baru HIMSI UBSI Kampus {{ $OR->campus }}</h4>
                </div>
            </div>
            <div class="card-body">
                <p>HIMSI atau Himpunan Mahasiswa Sistem Informasi adalah salah satu Organisasi Mahasiswa di Universitas
                    Bina
                    Sarana Informatika. HIMSI tersebar di beberapa KAMPUS UTAMA dan KAMPUS PSDKU.
                    untuk lingkup KAMPUS UTAMA di wilayah JADETABEK (Jakarta, Depok, Tanggerang, Bekasi) yaitu :</p>
                <p class="mt-2"><b>SEKTOR BARAT</b></p>
                <ul>
                    <li>Cimone</li>
                    <li>BSD</li>
                    <li>Cengkareng</li>
                </ul>
                <p class="mt-2"><b>SEKTOR TENGAH</b></p>
                <ul>
                    <li>Salemba</li>
                    <li>Pemuda</li>
                    <li>Keramat</li>
                    <li>Margonda</li>
                </ul>
                <p class="mt-2"><b>SEKTOR TIMUR</b></p>
                <ul>
                    <li>Kaliabang</li>
                    <li>Cutmutiah</li>
                    <li>Cikarang</li>
                </ul>
                <p>Sedangkan untuk lingkup <b>KAMPUS PSDKU</b> (Program Studi Diluar Kampus Utama) yaitu :
                    Karawang, Bogor, Pontianak, Tegal. </p>
                <p class="mt-3">Teruntuk Mahasiswa/i yang mendaftarkan diri, Jika KAMPUS UTAMA anda tidak disebutkan di
                    atas, jangan
                    berkecil hati tetap lanjutkan pendaftaran. Kami akan membantu teman-teman untuk mendirikannya di
                    Kampus
                    yang belum ada, dan membantu teman-teman Mahasiswa/i untuk mengembangkan potensi diri anda</p>

                <p class="mt-2"><b>Selamat Mendaftar</b></p>
            </div>
        </div>

        <form action="/oprec/form/{{ $OR->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="old_ektm" value="{{ $OR->ektm }}">
            <input type="hidden" name="old_cv" value="{{ $OR->cv }}">
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Masukan email" required value="{{ old('email', $OR->email) }}">
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="full_name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('full_name') is-invalid @enderror"
                            name="full_name" id="full_name" placeholder="Masukan nama lengkap" required
                            value="{{ old('full_name', $OR->full_name) }}">
                        @error('full_name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="NIM" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('NIM') is-invalid @enderror" id="NIM"
                            name="NIM" value="{{ old('NIM', $OR->NIM) }}">
                        @error('NIM')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="campus" class="form-label">Asal Kampus</label>
                        <select class="form-control @error('campus') is-invalid @enderror" name="campuses_id">
                            @foreach ($campuses as $campus)
                                <option value="{{ $campus->id }}" @selected(old('campuses_id', $OR->campuses->id) === $campus->id)>{{ $campus->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('campus')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="semester" class="form-label">Semester</label>
                        <input type="number" class="form-control @error('semester') is-invalid @enderror"
                            name="semester" id="semester" placeholder="Masukan semester" required
                            value="{{ old('semester', $OR->semester) }}">
                        @error('semester')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="whatsapp" class="form-label">No Whatsapp</label>
                        <input type="number" class="form-control @error('whatsapp') is-invalid @enderror"
                            name="whatsapp" id="whatsapp" placeholder="Masukan nomor whatsapp" required
                            value="{{ old('whatsapp', $OR->whatsapp) }}">
                        @error('whatsapp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="modal fade" id="ektm-modal" tabindex="-1" aria-labelledby="ektm-modalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body d-flex justify-content-center">
                                    <img class="img-preview img-fluid mb-3 col-5" src="/storage/{{ $OR->ektm }}">
                                </div>
                                <div class="modal-footer justify-content-center">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img class="img-preview img-fluid mb-3 col-5 d-none">
                    <div class="input-ektm d-none">
                        <label for="ektm" class="form-label">Upload Screenshoot E-KTM</label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg"
                            class="form-control @error('ektm') is-invalid @enderror" name="ektm" id="ektm"
                            onchange="previewImage()">
                        @error('ektm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button-rubah mt-2">
                        <button type="button" class="btn btn-info btn-sm my-2" data-bs-toggle="modal"
                            data-bs-target="#ektm-modal" id="btn-ektm-modal">
                            Preview E-KTM
                        </button>
                        <button type="button" class="btn btn-sm btn-primary" id="rubah-ektm">Rubah E-KTM</button>
                        <button type="button" class="btn btn-sm btn-danger d-none" id="batal-rubah-ektm">Batal
                            Rubah</button>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">

                    <div class="input-cv d-none">
                        <label for="cv" class="form-label">Upload Curriculum Vitae (CV)</label>
                        <p class="mb-1">Jika belum punya cv silahkan download template di sini <a
                                href="#">download</a></p>
                        <p class="mb-2 text-danger">Wajib PDF</p>
                        <input type="file" accept=".pdf" class="form-control @error('cv') is-invalid @enderror"
                            name="cv" id="cv" value="{{ old('cv') }}">
                        @error('cv')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="button-rubah mt-2">
                        <a target="_blank" href="/storage/{{ $OR->cv }}" class="btn btn-info btn-sm my-2"
                            id="btn-cv-modal">
                            Preview CV
                        </a>
                        <button type="button" class="btn btn-sm btn-primary" id="rubah-cv">Rubah CV</button>
                        <button type="button" class="btn btn-sm btn-danger d-none" id="batal-rubah-cv">Batal
                            Rubah</button>
                    </div>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="motivasi_bergabung" class="form-label">Alasan Anda Ingin Bergabung HIMSI?</label>
                        <textarea name="motivasi_bergabung" id="motivasi_bergabung"><?= old('motivasi_bergabung', $OR->motivasi_bergabung) ?></textarea>
                        @error('motivasi_bergabung')
                            <p class="text-danger"><small>{{ $message }}</small></p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="my-3 text-center">
                <button type="submit" class="btn btn-primary px-5">KIRIM</button>
            </div>
        </form>

    </div>

    <script src="<?= asset('plugins/tinymce/tinymce.min.js') ?>"></script>
    <script>
        tinymce.init({
            selector: 'textarea#motivasi_bergabung',
            menubar: false,
            toolbar: false,
            height: 200
        });
        const previewImage = () => {
            const image = document.querySelector('#ektm');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            imgPreview.classList.remove('d-none')
            $('#btn-ektm-modal').addClass('d-none')

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);
            ofReader.onload = function(ofREvent) {
                imgPreview.src = ofREvent.target.result
            }
        }

        $('#rubah-ektm').on('click', function() {
            $(this).addClass('d-none');
            $('.input-ektm').removeClass('d-none')
            $('#batal-rubah-ektm').removeClass('d-none');
        })
        $('#batal-rubah-ektm').on('click', function() {
            $(this).addClass('d-none');
            $('#btn-ektm-modal').removeClass('d-none')
            $('.input-ektm').addClass('d-none')
            $('.input-ektm input').val(null)
            $('#rubah-ektm').removeClass('d-none');
        })
        $('#rubah-cv').on('click', function() {
            $(this).addClass('d-none');
            $('#btn-cv-modal').addClass('d-none');
            $('.input-cv').removeClass('d-none')
            $('#batal-rubah-cv').removeClass('d-none');
        })
        $('#batal-rubah-cv').on('click', function() {
            $(this).addClass('d-none');
            $('.input-cv').addClass('d-none')
            $('.input-cv input').val(null)
            $('#btn-cv-modal').removeClass('d-none')
            $('#rubah-cv').removeClass('d-none');
        })
    </script>
</x-guest-layout>
