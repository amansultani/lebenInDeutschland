<header class="fixed inset-x-0 top-0 z-50 bg-white">
    <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{route('home')}}" class="-m-1.5 p-1.5">
                <span class="sr-only">Leben In Deutschland</span>
                <img class="h-10 w-auto" src="{{ asset('logo.png') }}" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button id="menu-open-button" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
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
        <div class="hidden lg:flex lg:items-center lg:gap-x-6 lg:flex-1 lg:justify-end">
            <x-language-selection />
        </div>
    </nav>
    <div id="mobile-menu" class="lg:hidden hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-50"></div>
        <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
                <button id="menu-close-button" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                    <div class="space-y-2 py-6">
                        <a href="{{ route('home') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 {{ request()->routeIs('home') ? 'bg-gray-200' : '' }}">Startseite</a>
                        <a href="{{ route('category') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 {{ request()->routeIs('category') ? 'bg-gray-200' : '' }}">Alle Fragen</a>
                        <a href="{{ route('test.list') }}" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 {{ request()->routeIs('test.list') ? 'bg-gray-200' : '' }}">Test</a>
                    </div>
                    <div class="py-6">
                        <x-language-selection />
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
