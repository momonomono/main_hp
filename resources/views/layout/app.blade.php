<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body>
    <div class="l-container">
        @yield('content')
    </div>
</body>
</html>