<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="id">
        <div class="main">
        @include('includes.header')

        @yield('content')

        @include('includes.footer')
        </div>
    </div>
</body>
</html>