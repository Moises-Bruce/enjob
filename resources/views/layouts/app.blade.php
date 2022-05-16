<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="shortcut icon" href="{{ asset('img/enjob-favicon.png') }}" type="image/x-icon">

    <title>Enjob</title>
</head>

<body>
    @yield('content')

    @stack('scripts')
</body>

</html>
