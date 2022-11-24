<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Include our CSS file compiled with Vite-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
        <x-layout.navbar></x-layout.navbar>
        <br><br><br><br><br><br><br><br>

        {{$slot}} <!-- welcome.blade.php -->

        <x-layout.footer></x-layout.footer>

        <script src="{{ asset('js/app.js') }}"></script>

    </div>
</body>
</html>
