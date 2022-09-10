<x-guest-layout title="Berhasil Mendaftar">
    @component('components.navbar')
        <div class="mx-auto">
            <h5>HIMSI UBSI</h5>
        </div>
        <img src="<?= asset('img/logo/bsi.png') ?>" class="logo-navbar">
    @endcomponent
    <div class="container">
        <div class="d-flex justify-content-center align-items-center mt-4">
            <div class="card shadow position-relative" style="width: 90%">
                <div class="card-header">
                    <h1>Selamat Anda Berhasil Mendaftar</h1>
                </div>
                <div class="card-body">
                    <ul>
                        <li>Untuk update informasi silahkan follow instagram HIMSI {{ $data->campuses->name }} <br> <a
                                href="{{ $data->campuses->instagram }}">Go to instagram</a></li>
                        <li>follow juga instagram HIMSI DPP <br> <a href="https://www.instagram.com/himsiubsi"
                                target="_blank">Go to
                                instagram</a></li>
                        <li>untuk informasi lebih lanjut silahkan masuk kedalam group whatsapp HIMSI
                            {{ $data->campuses->name }} : <a href="{{ $data->campuses->group_wa }}"
                                target="_blank">masuk group</a>
                        </li>
                        <li>untuk membuat twibbon clik <a href="https://bit.ly/3czNHde" target="_blank">buat
                                twuibbon</a></li>
                    </ul>
                    <div class="my-3">
                        <a href="/oprec/edit/{{ $data->id }}">Edit data pendaftaran</a>
                    </div>
                    <div class="my-3">
                        <a href="/">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
