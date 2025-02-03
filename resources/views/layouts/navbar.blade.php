<!-- Navbar -->
<nav class="fixed top-0 left-0 w-full z-50 blurred-bg">
    <div class="container mx-auto px-4 py-7 flex justify-between items-center">
        <a href="" class="text-2xl font-bold">API Docs</a>
        <div class="space-x-6">
            <x-nav-link href="{{ route('landing-page') }}" :active="request()->routeIs('landing-page')">Home</x-nav-link>
            <x-nav-link href="">Features</x-nav-link>
            <x-nav-link href="">Developers</x-nav-link>
            <x-nav-link href="">Contact</x-nav-link>
        </div>
    </div>
</nav>
