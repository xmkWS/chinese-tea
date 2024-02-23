<!doctype html>
<html class="h-full scroll-smooth focus:scroll-auto" lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
    <script src="{{ asset('public/assets/js/script.js') }}" defer></script>
    @vite('resources/css/app.css')
{{--    <link rel="stylesheet" href="{{ asset('public/build/assets/app-DW9Qn3ri.css') }}">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body class="h-full">
    <div class="wrapper backdrop-opacity-25 text-base min-w-full flex flex-col bg-[url('/public/assets/images/bg.jpg')] bg-no-repeat bg-contain text-white">
        @include('components.header')
        <main class="flex-auto">
            @yield('content')
        </main>
        @include('components.footer')
    </div>
</body>
</html>