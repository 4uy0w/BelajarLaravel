<!DOCTYPE HTML>

<html>
    <head>
        <title> ShrineComics: Web baca komik digital </title>
        <link rel="icon" type="image/x-icon" href="{{ asset('/icon/ShrineComics.webp') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/style/style.css') }}">
    </head>
    <body>
        <div class="content">
            @yield('content')
        </div>

        <script src="{{ asset('/js/script.js') }}"></script>
    </body>
</html>
