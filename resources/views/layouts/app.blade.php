<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'API Documentation') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.css" rel="stylesheet" />

        <style>
            .blurred-bg {
                backdrop-filter: blur(8px);
                background-color: rgba(3, 7, 18, 0.8);
            }

        </style>
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#030712] text-white">

        <div class="flex flex-col min-h-screen">
            <!-- Main Layout -->
            <div class="flex flex-1 overflow-hidden">
                <!-- Sidebar -->
                @if (View::hasSection('sidebar'))
                    <aside class="w-96 h-full">
                        @yield('sidebar')
                    </aside>
                @endif
                <!-- Main Content -->
                <div class="flex-1 h-full">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->

        </div>

        <script src="{{asset('js/copyClipboard.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.js"></script>
    </body>
</html>
