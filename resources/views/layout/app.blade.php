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
<body class="antialiased">

<x-layout.navbar></x-layout.navbar>


<footer>Footer in app.blade.php</footer>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
