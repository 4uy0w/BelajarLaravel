<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document @yield('titlex')</title>
</head>
<body>
    @section('menu')
        Ini adalah bagian dari kehidupan 
    @show 
    <div class="menu">
        @yield('menu');
    </div>
</body>
</html>