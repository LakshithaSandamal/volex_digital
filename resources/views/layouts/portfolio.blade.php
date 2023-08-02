<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Volex Digital</title>
    @include('library.portfolio.styles')
</head>

<body>
    <div class="preloader" id="preloader" style="background: url('{{ asset('img/logo/preloader.gif') }}')"></div>
    @include('components.portfolio.header')

    @yield('content')

    @include('components.portfolio.footer')

    @include('library.portfolio.scripts')
</body>

</html>
