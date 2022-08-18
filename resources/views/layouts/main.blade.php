<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="<?= asset('plugins/bootstrap-5.2/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/app.css') ?>">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/himsi.ico') }}">
    @yield('more-head')
</head>

<body>
    @yield('content')

    @yield('footer')
    <script src="<?= asset('plugins/bootstrap-5.2/js/bootstrap.bundle.min.js') ?>"></script>
    @yield('more-footer')
</body>

</html>
