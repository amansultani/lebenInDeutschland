<header class="fixed inset-x-0 top-0 z-50 bg-white shadow">
    <nav class="flex items-center justify-between p-4 lg:p-6 lg:px-8" aria-label="Global" x-data="{ open: false }">
        <div class="flex lg:flex-1">
            <a href="{{ route('home') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">Leben In Deutschland</span>
                <img class="h-6 w-auto" src="{{ asset('logo.png') }}" alt="">
            </a>
        </div>
        
        <!-- Mobile Menu Button -->
        <div class="lg:hidden">
            <button @click="open = !open" class="text-gray-900 focus:outline-none">
                <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>

                </svg>
                <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Navigation Links for Mobile and Desktop -->
        <div 
            :class="open ? 'flex' : 'hidden'" 
            class="flex-col lg:flex-row lg:flex lg:gap-x-8 absolute lg:relative bg-white shadow-md lg:shadow-none w-full
             lg:w-auto lg:justify-start top-full left-0  lg:mt-0 p-4 lg:p-0 place-items-center"
            
        >
            <a href="{{ route('home') }}" class="text-sm font-semibold {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-900' }} block py-2">
                Startseite
            </a>
            <a href="{{ route('category') }}" class="text-sm font-semibold {{ request()->routeIs('category') || request()->routeIs('questions.*') ? 'text-blue-500' : 'text-gray-900' }} block py-2">
                Alle Fragen
            </a>
            <a href="{{ route('test.list') }}" class="text-sm font-semibold {{ request()->routeIs('test.list') || request()->routeIs('test.*') ? 'text-blue-500' : 'text-gray-900' }} block py-2">
                Test
            </a>
        </div>
        
        <div class="lg:flex lg:items-center lg:gap-x-6 lg:flex-1 lg:justify-end">
            <x-language-selection />
        </div>
    </nav>
</header>
