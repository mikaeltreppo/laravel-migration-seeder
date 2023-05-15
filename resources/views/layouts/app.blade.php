<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('name_page')</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container mt-5">
    @yield('content')

    @include('partials\footer')
</div>
</body>
</html>