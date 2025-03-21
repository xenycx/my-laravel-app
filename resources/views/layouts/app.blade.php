<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel პროექტი')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="margin: 0; padding: 0; background-color: #1a1a1a; color: #ffffff;">
    @include('components.navbar')

    <div style="padding: 20px;">
        @yield('content')
    </div>
</body>
</html>
