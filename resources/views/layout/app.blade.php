<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Livewire Styles -->
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <livewire:styles/>

    <!-- Your Custom Styles -->
    <style>
        /* Your existing styles */
    </style>
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    {{$slot}}

    <!-- Livewire Scripts -->
    <livewire:scripts/>
</body>
</html>
