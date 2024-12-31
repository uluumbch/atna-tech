<nav x-data="{ mobileMenuIsOpen: false }" @click.away="mobileMenuIsOpen = false" x-scroll-to-header
    class="flex items-center justify-between bg-primary-200 fixed z-[39] w-full top-0 px-6 py-4 "
    aria-label="atna tech menu">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="">
        <img src="{{ asset('images/atna-tech-logo.png') }}" alt="atna tech logo" class="w-32 " />
    </a>
    <!-- Desktop Menu -->
    <ul class="hidden items-center gap-4 md:flex">
        <li>
            <a href="{{ route('consulting') }}"
                class="font-medium text-black underline-offset-2 hover:text-slate-800 focus:outline-none focus:underline"
                aria-current="page">Pendirian badan usaha</a>
        </li>
        <li>
            <a href="{{ route('consulting') }}"
                class="font-medium text-black underline-offset-2 hover:text-slate-800 focus:outline-none focus:underline">Perizinan
                badan Usaha
            </a>
        </li>
        <li><a href="#"
                class="font-medium text-black underline-offset-2 hover:text-slate-800 focus:outline-none focus:underline">Layanan
                IT
            </a>
        </li>
        <li><a href="{{ route('home') }}#tentang-kami"
                @if (Route::currentRouteName() == 'home') x-on:click.prevent="$scrollTo({ offsetHeader: true })" @endif
                class="font-medium text-black underline-offset-2 hover:text-slate-800 focus:outline-none focus:underline">Tentang
                kami
            </a>
        </li>
    </ul>
    <!-- Mobile Menu Button -->
    <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" :aria-expanded="mobileMenuIsOpen"
        :class="mobileMenuIsOpen ? 'fixed top-6 right-6 z-20' : null" type="button"
        class="flex text-slate-700  md:hidden" aria-label="mobile menu" aria-controls="mobileMenu">
        <svg x-cloak x-show="!mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
        <svg x-cloak x-show="mobileMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" aria-hidden="true"
            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <!-- Mobile Menu -->
    <ul x-cloak x-show="mobileMenuIsOpen"
        x-transition:enter="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0"
        x-transition:leave="transition motion-reduce:transition-none ease-out duration-300"
        x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full" id="mobileMenu"
        class="fixed max-h-svh overflow-y-auto inset-x-0 top-0 z-10 flex flex-col divide-y divide-slate-300 rounded-b-xl border-b border-slate-300 bg-slate-100 px-6 pb-6 pt-20  md:hidden">
        <li>
            <a href="{{ route('consulting') }}"
                class="w-full text-lg font-bold text-primary-700 focus:underline py-6 underline"
                aria-current="page">Pendirian badan usaha</a>
        </li>
        <li>
            <a href="{{ route('consulting') }}"
                class="w-full text-lg font-bold text-primary-700 focus:underline py-6">Perizinan
                badan Usaha
            </a>
        </li>
        <li><a href="#" class="w-full text-lg font-bold text-primary-700 focus:underline py-6">Layanan
                IT
            </a>
        </li>
        <li>
            <a href="#tentang-kami" x-on:click="mobileMenuIsOpen = false"
                x-on:click.prevent="$scrollTo({ offsetHeader: true })"
                class="w-full text-lg font-bold text-primary-700 focus:underline py-6">Tentang
                kami
            </a>
        </li>
    </ul>
</nav>
