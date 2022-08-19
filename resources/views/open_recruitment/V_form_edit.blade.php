<x-guest-layout title="Formulir Open Recruitment">
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
                    <h4>Pendaftaran Anggota Baru HIMSI UBSI Kampus {{ $OR->campuses->name }}</h4>
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

        <form action="/oprec" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="campus" value="{{ old('campus', $OR->campuses->id) }}">
            <input type="hidden" name="NIM" value="{{ old('NIM', $OR->NIM) }}">
            <div class="card my-3">
                <div class="card-body">
                    <div class="input">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control @error('email', $OR->email) is-invalid @enderror"
                            name="email" id="email" placeholder="Masukan email" required
                            value="{{ old('email') }}">
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
                        <input type="text"
                            class="form-control @error('full_name', $OR->full_name) is-invalid @enderror"
                            name="full_name" id="full_name" placeholder="Masukan nama lengkap" required
                            value="{{ old('full_name') }}">
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
                            readonly disabled value="{{ old('NIM', $OR->NIM) }}">
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
                        <input type="text" class="form-control @error('campus') is-invalid @enderror" disabled
                            readonly value="{{ old('campus', $OR->campuses->name) }}">
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
                        <input type="number"
                            class="form-control @error('semester', $OR->semester) is-invalid @enderror" name="semester"
                            id="semester" placeholder="Masukan semester" required value="{{ old('semester') }}">
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
                        <input type="number"
                            class="form-control @error('whatsapp', $OR->whatsapp) is-invalid @enderror" name="whatsapp"
                            id="whatsapp" placeholder="Masukan nomor whatsapp" required value="{{ old('whatsapp') }}">
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
                    <img class="img-preview img-fluid mb-3 col-5 d-none">
                    <div class="input">
                        <label for="ektm" class="form-label">Upload Screenshoot E-KTM</label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg"
                            class="form-control @error('ektm') is-invalid @enderror" name="ektm" id="ektm"
                            required onchange="previewImage()">
                        @error('ektm')
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
                        <label for="cv" class="form-label">Upload Curriculum Vitae (CV)</label>
                        <p class="mb-1">Jika belum punya cv silahkan download template di sini <a
                                href="#">download</a></p>
                        <p class="mb-2 text-danger">Wajib PDF</p>
                        <input type="file" accept=".pdf" class="form-control @error('cv') is-invalid @enderror"
                            name="cv" id="cv" required value="{{ old('cv') }}">
                        @error('cv')
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

            const ofReader = new FileReader();
            ofReader.readAsDataURL(image.files[0]);
            ofReader.onload = function(ofREvent) {
                imgPreview.src = ofREvent.target.result
            }
        }
    </script>
</x-guest-layout>
