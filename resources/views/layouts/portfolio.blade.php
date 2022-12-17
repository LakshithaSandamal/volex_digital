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
    @include('components.portfolio.header')

    <div class="container-fluid">
        <div class="row">
            @yield('content')

            @include('components.portfolio.footer')
        </div>
    </div>

    @include('library.portfolio.scripts')
</body>

</html>