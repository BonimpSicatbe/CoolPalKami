@extends('layouts.app')
@section('content')
<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-50 blurred-bg">
    <div class="container mx-auto px-4 py-7 flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-2xl font-bold">Broadway <span
                class="text-[#ff2c21]">API</span></a>
        <div class=" flex flex-row space-x-6">
            <a href="documentation"
                class="text-white bg-gray-900 hover:bg-gray-800 border border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-100 dark:bg-white dark:border-gray-200 dark:text-gray-900 dark:hover:bg-gray-100 me-2 mb-2 transition duration-300 ease-in-out">Documentation</a>
            @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </div>
    </div>
</nav>

<header class="h-screen flex items-center justify-center bg-gradient-to-b from-[#030712] to-[#10141f]">
    <div class="text-center px-6">
        <h1 class="text-8xl font-bold mb-6">Welcome to Broadway</h1>
        <h1 class="text-8xl font-bold mb-6 text-[#ff2c21]">API Docu.</h1>
        <div class="flex flex-wrap justify-center text-center max-w-3xl mx-auto">
            <p class="text-2xl mb-8 text-gray-400">Be more simplify with our dynamic APIs</p>
        </div>
        <div class="space-x-4">
            <a href="documentation"
                class="text-white bg-gray-900 hover:bg-gray-800 border border-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-100 dark:bg-white dark:border-gray-200 dark:text-gray-900 dark:hover:bg-gray-100 me-2 mb-2 transition duration-300 ease-in-out">Get
                Started</a>
            <a href="http://127.0.0.1:8000/api/v1/movies/"
                class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-2 mb-2 transition duration-300 ease-in-out">Demo
                Project</a>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="pb-14 pt-14 bg-[#10141f] relative overflow-hidden transition duration-500 ease-in-out">
    <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
        <div class="relative">
            <img src="{{asset('images/code.png')}}" alt="Feature Image"
                class="rounded-lg shadow-lg transform hover:rotate-3 hover:scale-105 transition duration-500 ease-in-out">
        </div>
        <div>
            <h2 class="text-4xl font-bold mb-4">Broadway APIs!</h2>
            <p class="text-gray-400 mb-6">Broadway API is a RESTful API that provides access to a wide range of
                movie-related data. It is a great resource for developers who want to build applications that
                require movie-related data.
            </p>
            <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition">Learn
                More</a>
        </div>
    </div>
</section>

<!-- Developers Section -->
<section id="developers"
    class="py-16 bg-gradient-to-b from-[#10141f] to-[#030712] relative overflow-hidden transition duration-500 ease-in-out">
    <div class="container mx-auto text-center">
        <h2 class="text-4xl font-bold mb-8">Meet the Developers</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Developer Card -->
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                <img src="images/doming.jpg" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Doming H. Ricalde</h3>
                <p class="text-gray-400">Full-Stack Developer</p>
            </div>
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                <img src="images/robin.jpg" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">John Robin A. Estrella</h3>
                <p class="text-gray-400">Front-End Developer</p>
            </div>
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out text-center">
                <img src="images/josh.jpg" alt="Developer"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover object-center">
                <h3 class="text-xl font-semibold text-white">Joshua F. Penuela</h3>
                <p class="text-gray-400">Front-End Developer</p>
            </div>
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                <img src="images/alex.jpg" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Alexander V. Llano</h3>
                <p class="text-gray-400">Back-End Developer</p>
            </div>
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                <img src="images/hanzel.jpg" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Hanzel L. Ramirez</h3>
                <p class="text-gray-400">Back-End Developer</p>
            </div>
            <div
                class="bg-[#10141f] rounded-lg shadow-lg p-6 transform hover:scale-105 transition duration-500 ease-in-out">
                <img src="images/clark.jpg" alt="Developer" class="w-24 h-24 rounded-full mx-auto mb-4">
                <h3 class="text-xl font-semibold">Clark Angelo P. Mendoza</h3>
                <p class="text-gray-400">API Specialist</p>
            </div>
        </div>
    </div>
</section>

<footer id="footer" class="py-8 bg-[#030712]">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 Broadyway Movies <span class="text-[#ff2c21] font-bold">API</span> Documentation • BSIT 4-1 • ITEC 116 •
        Cool-Pal Group • All rights reserved.</p>
    </div>
</footer>
@endsection