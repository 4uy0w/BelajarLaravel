<!DOCTYPE html>
<html lang="en">
<head>
    <title>King Of Pasta</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Scripts -->
    <script src="{{ asset('/js/jquery.js') }}"></script>
    <script src="{{ asset('/js/jquery.glide.js') }}"></script>
    <script src="{{ asset('/js/MyJQ.js') }}"></script>
    <script src="{{ asset('/js/jquery.localScroll.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('/js/wow.min.js') }}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">

    <script>
        $(document).ready(function() {
            $('#navigations').localScroll({duration:800});
        });
        new WOW().init();
    </script>
</head>
<body>

    @include('partials.header')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')

</body>
</html>
