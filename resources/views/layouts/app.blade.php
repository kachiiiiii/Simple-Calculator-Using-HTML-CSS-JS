<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('images/yyyy.jpeg') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="flex justify-between">
        <div class="w[30%]">
            <img src="{{ asset('images/logo.webp') }}" alt="" class="w-[25%]">
        </div>
        <div>
            <nav>
                <a href="" class="px-4 py-2 rounded bg-gray-700 text-white">Home</a>
                <a href="" class="px-4 py-2 rounded bg-gray-700 text-white">About Us</a>
                <a href="" class="px-4 py-2 rounded bg-gray-700 text-white">Contact</a>
                <a href="" class="px-4 py-2 rounded bg-gray-700 text-white">Services</a>
                <a href="" class="px-4 py-2 rounded bg-gray-700 text-white">Portfolio</a>
            </nav>
        </div>
        <div class="w-[20%]">
            <div>
                <a href="{{ route('crud.create') }}"> <i class="fa-solid fa-plus"> </i>Add post</a>
            </div>
        </div>
    </section>
    @yield('content')
</body>

</html>
