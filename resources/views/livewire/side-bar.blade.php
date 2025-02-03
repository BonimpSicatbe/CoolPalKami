<div class="h-screen w-96 bg-gray-900 text-white flex flex-col overflow-y-auto overflow-hidden fixed">
    <a href="{{ route('dashboard') }}">
        <div class="p-10 text-5xl font-bold text-center flex items-center justify-center space-x-3">
            <x-play-icon />
            <span class="text-[#ff2c21]">Broadway</span>
        </div>
    </a>

    <ul class="space-y-3 text-base px-10 pb-10">
        @foreach($menuItems as $index => $item)
            @if(isset($item['title']))
                <li class="p-3 font-bold text-white text-xl flex items-center justify-between cursor-pointer transition-transform duration-300"
                    onclick="toggleSubMenu({{ $index }})">
                    <div class="flex items-center space-x-2">
                        <x-hamburger-icon />
                        <span>{{ $item['title'] }}</span>
                    </div>
                    <x-arrow-icon class="transition-transform duration-300 rotate-0" id="arrow-{{ $index }}" />
                </li>

                @if(isset($item['subItems']))
                    <ul class="ml-6 space-y-2 hidden transition-opacity duration-300" id="submenu-{{ $index }}">
                        @foreach($item['subItems'] as $subItem => $id)
                            <li
                                class="p-2 text-gray-400 hover:text-white hover:translate-x-2 cursor-pointer flex items-center transition-transform duration-300">
                                <x-arrow-icon class="mr-2" />
                                <a href="#{{ $id }}" class="scroll-link w-full">{{ $subItem }}</a>
                            </li>
                        @endforeach
                    </ul>
                @endif
            @endif
        @endforeach

        <!--  -->
        @if (Auth::check())
            <!-- User is logged in -->
            <!-- <li
                class="p-3 font-bold text-white text-xl flex items-center justify-between cursor-pointer transition-transform duration-300">
                <div class="flex flex-row items-center gap-4">
                    <i class="fa-solid fa-user-circle"></i>
                    <a href="{{ route('profile.edit') }}">Account</a>
                </div>
            </li> -->

            <li
                class="p-3 font-bold text-white text-xl flex items-center justify-between cursor-pointer transition-transform duration-300">
                <form action="{{ route('logout') }}" method="POST" class="flex flex-row items-center gap-4">
                    @csrf
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <button type="submit" class="bg-transparent border-none text-white cursor-pointer">Logout</button>
                </form>
            </li>
        @else
            <!-- User is a guest -->
            <li
                class="p-3 font-bold text-white text-xl flex items-center justify-between cursor-pointer transition-transform duration-300">
                <div class="flex flex-row items-center gap-4">
                    <i class="fa-solid fa-right-to-bracket"></i>
                    <a href="{{ route('login') }}">Login</a>
                </div>
            </li>
        @endif

    </ul>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll('.scroll-link').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    });

    function toggleSubMenu(index) {
        const submenu = document.getElementById(`submenu-${index}`);
        const arrow = document.getElementById(`arrow-${index}`);

        if (submenu.classList.contains('hidden')) {
            submenu.classList.remove('hidden');
            arrow.classList.add('rotate-90');
        } else {
            submenu.classList.add('hidden');
            arrow.classList.remove('rotate-90');
        }
    }
</script>