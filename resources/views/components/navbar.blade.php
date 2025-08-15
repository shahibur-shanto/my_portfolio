<header class="bg-gray-200 shadow sticky top-0 z-50">
    <div class="container mx-auto flex justify-between items-center p-2">
        <!-- Logo -->
        <img alt="my logo" src="{{ asset('storage/images/shanto_2.png') }}" class="w-40 h-10" />

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-6">

            @foreach($menus as $menu)

{{--                <a href="#{{strtolower($menu['name'])}}" class="hover:text-primary">{{$menu['name']}}</a>--}}
                <a href="{{ url('/').'#' . strtolower($menu['name']) }}" class="go-home" data-section="home">{{$menu['name']}}</a>
            @endforeach
            @auth
                @if(auth()->user()->name === 'admin')
                    <a href="/admin/dashboard" class="hover:text-primary">
                        Dashboard
                    </a>
                @endif
            @endauth
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden flex flex-col space-y-1 focus:outline-none">
            <span class="block w-6 h-0.5 bg-gray-800"></span>
            <span class="block w-6 h-0.5 bg-gray-800"></span>
            <span class="block w-6 h-0.5 bg-gray-800"></span>
        </button>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-100 px-4 pb-4">
        @foreach($menus as $menu)

            <a href="#{{strtolower($menu['name'])}}" class="block py-2 hover:text-primary">{{$menu['name']}}</a>

        @endforeach

            @auth
                @if(auth()->user()->name === 'admin')
                    <a href="/dashboard" class="block py-2 hover:text-primary text-red-500 font-medium">
                        Dashboard (Admin)
                    </a>
                @endif
            @endauth
    </div>
</header>

<!-- Script for Mobile Menu Toggle -->
<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = mobileMenu.querySelectorAll('a');

    // Toggle menu on hamburger click
    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });

    // Close menu when a link is clicked
    mobileLinks.forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
        });
    });

</script>
