@extends('layouts.main')

@section('title', 'Pengenalan HIMSI')

@section('content')
    @extends('layouts.partials.navbar')
@section('nav-right-content')
    <h5>KAMPUS BSI</h5>
@endsection
<div class="container">
    <div class="card">
        <div class="card-header judul-halaman">
            <div class="text-center my-3">
                <h4>ASAL KAMPUS</h4>
                <p>Silahkan pilih kampus kalian</p>
            </div>
        </div>
        <div class="card-body list-kampus">
            <div class="row row-cols-2 justify-content-center">
                @foreach ($campuses as $c)
                    <div class="col my-2" style="width: 160px">
                        <div class="card text-center"
                            onclick="window.location.href = '/oprec/choose-campus/{{ $c->name }}'">
                            <img src="<?= asset('img/campuses/' . $c->image) ?>" alt="">
                            <div class="card-body p-2">
                                <h6>{{ $c->name }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
