<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield(section: 'title')</title>
</head>
<body>
    @yield('content')
    <footer>&copy; Copyright {{date('Y')}}  &middot; <a href="/about-us" >About</a></footer>
</body>
</html>
