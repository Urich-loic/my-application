<!DOCTYPE html>
<html lang='{{str_replace("_","-", config("app.locale"))}}'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>@yield(section: 'title')</title>
</head>
<body class="flex flex-col justify-between items-center h-screen py-5" >
    <main role="main" class="text-center">
        @yield('content')
    </main>
    <footer class="text-gray-400">&copy; Copyright {{date('Y')}}  &middot;
        @if(!Route::is('about'))
        <a href="{{route('about')}}" class="text-indigo-500 hover:text-indigo-600 underline">About</a>
        @endif
    </footer>
</body>
</html>
