<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('img/books.png') }}">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>
    @yield('cdns')

    @vite('resources/js/app.js')

</head>

<body>
    @include('includes.header')

    <main>
        @yield('content')
    </main>

    @include('includes.footer')

</body>

</html>