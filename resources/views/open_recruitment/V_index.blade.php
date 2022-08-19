<x-guest-layout title="Pengenalan HIMSI">
    @component('components.navbar')
        <div class="ms-auto">
            <a href="/oprec/choose-campus" class="btn btn-primary btn-sm p-2">Lanjut Pendaftaran</a>
        </div>
    @endcomponent
    <div class="container">
        <div class="mt-2">
            @include('layouts.partials.alert')
        </div>
        <div class="box-video-profile">
            <video autoplay controls>
                <source src="/video/profile.mp4" type="video/mp4">
            </video>
        </div>
        <div class="card shadow position-relative">
            <div class="card-body">
                <h5 class="card-title">Himpunan Mahasiswa Sistem Informasi (HIMSI) Universitas Bina Sarana Informatika
                </h5>
                <p class="card-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ultrices mi sit facilisis sit tincidunt sit
                    parturient porta. Tellus et odio arcu in odio amet risus. Pharetra convallis et, etiam quam egestas
                    amet
                    magna. Proin non lectus metus aliquet dolor cursus. Feugiat rhoncus eu pellentesque interdum duis
                    arcu
                    at vel. Amet, quam facilisis posuere nascetur faucibus venenatis. Amet vel eu fringilla ultricies
                    nam
                    magna. Quisque blandit quisque feugiat neque pretium. Lobortis in odio vel diam eu, ultricies
                    interdum
                    ante volutpat. Quis luctus at elit lorem faucibus et. Eget a, faucibus ornare sodales et scelerisque
                    amet netus. Tincidunt dis amet vitae quis. Varius feugiat ac sagittis at faucibus velit ut. Orci
                    eros,
                    tortor pharetra augue dis malesuada amet. Nibh mattis sit nisl, feugiat. Lacus, eu vulputate eros
                    turpis
                    facilisis. Consequat accumsan leo urna orci, in vivamus. Eleifend consequat habitasse cras sed
                    pharetra
                    leo, scelerisque. Id vulputate velit, elit nunc donec aliquam, turpis enim, sed.
                </p>
                <div class="text-center py-4">
                    <a href="/oprec/choose-campus" class="btn btn-primary">Lanjut Pendaftaran</a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
