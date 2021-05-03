<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
    
    @include('inc.header')

    @include('inc.messages')

    @yield('content')

    @include('inc.footer')

</body>
</html>