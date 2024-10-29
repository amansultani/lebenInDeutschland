<header class="fixed inset-x-0 top-0 z-50 bg-white">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{route('home')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Leben In Deutschland</span>
                <img class="h-6 w-auto" src="{{ asset('logo.png') }}" alt="">
            </a>
        </div>
        <div class="flex gap-x-5">
            <a href="{{ route('home') }}"
               class="text-sm font-semibold leading-6 {{ request()->routeIs('home') ? 'text-blue-500' : 'text-gray-900' }}">
                Startseite
            </a>
            <a href="{{ route('category') }}"
               class="text-sm font-semibold leading-6 {{ request()->routeIs('category') ? 'text-blue-500' : 'text-gray-900' }}">
                Alle Fragen
            </a>
            <a href="{{ route('test.list') }}"
               class="text-sm font-semibold leading-6 {{ request()->routeIs('test.list') ? 'text-blue-500' : 'text-gray-900' }}">
                Test
            </a>
        </div>
        <div class=" lg:flex lg:items-center lg:gap-x-6 lg:flex-1 lg:justify-end">
            <x-language-selection />
        </div>
    </nav>

</header>
