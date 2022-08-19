<x-guest-layout title="Input NIM">
    @component('components.navbar')
        <div class="mx-auto py-2">
            <h5 class="text-uppercase">HIMSI {{ substr($campus, 0, 13) }}@if (strlen($campus) > 13)
                    ...
                @endif
            </h5>
        </div>
        <img src="<?= asset('img/logo/bsi.png') ?>" class="logo-navbar">
    @endcomponent
    <div class="container d-flex align-items-center justify-content-center" style="height: 70vh;">
        <div class="card shadow" style="width: 90%">
            <div class="card-header judul-halaman">
                <div class="text-center my-3">
                    <h4>MASUKAN NIM KALIAN</h4>
                </div>
            </div>
            <div class="card-body">
                <form action="/oprec/input-nim" method="post">
                    @csrf
                    <input type="hidden" value="{{ old('campus', $campus) }}" name="campus">
                    <div class="mb-3">
                        <input class="form-control @error('NIM') is-invalid @enderror" type="number" name="NIM"
                            aria-label="input NIM" placeholder="Masukan NIM" value="{{ old('NIM') }}" required
                            maxlength="8">
                        @error('NIM')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn btn-warning">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
