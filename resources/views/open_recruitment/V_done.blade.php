<x-guest-layout title="Berhasil Mendaftar">
    @component('components.navbar')
        <div class="mx-auto">
            <h5>HIMSI UBSI</h5>
        </div>
        <img src="<?= asset('img/logo/bsi.png') ?>" class="logo-navbar">
    @endcomponent
    <div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 70vh">
            <div class="card shadow position-relative" style="width: 90%">
                <div class="card-header">
                    <h1>Selamat Anda Berhasil Mendaftar</h1>
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum, quae! A perspiciatis neque
                        natus
                        tempore? Veritatis velit accusantium pariatur eius dignissimos voluptatem maiores possimus eos
                        tempore doloremque ullam deleniti labore hic facere a voluptate amet quo sit esse unde quis,
                        nobis
                        officiis</p>
                    <div class="my-3">
                        <a href="/oprec/data/{{ $NIM }}">Edit data pendaftaran</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
