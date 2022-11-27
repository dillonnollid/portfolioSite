<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Dillon's Portfolio</title>

    @vite(['resources/js/app.js'])

    <!-- Establish connections early to increase font load performance-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <!-- Include our CSS file compiled with Vite-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <script>
        // Light and Dark mode switcher (freecodecamp)
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="dark:bg-darkBlue dark:text-white font-raleway scrollbar-hide">

        <x-layout.navbar></x-layout.navbar>

        {{$slot}} <!-- welcome.blade.php -->

        <x-layout.footer></x-layout.footer>

        <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
