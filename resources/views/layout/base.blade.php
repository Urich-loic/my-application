<!DOCTYPE html>
<html lang='{{str_replace("_","-", config("app.locale"))}}'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>{{page_title($title)}}</title>
</head>
<body class="flex flex-col justify-between items-center h-screen py-5" >
    <main role="main" class="text-center">
        @yield('content')
    </main>
   @include('layout.partials.footer')
</body>
</html>
