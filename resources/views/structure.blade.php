<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Seeder's</title>
</head>

<body>
    <header>
        <a href="{{ route('home') }}">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.wilsonfamilychiropracticcenter.net%2Fwp-content%2Fuploads%2F2018%2F12%2Fplaceholder-logo-2.png"
                alt="">
        </a>
    </header>
    @yield('content')
</body>

</html>
