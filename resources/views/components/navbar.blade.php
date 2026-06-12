<nav
    data-navbar
    class="fixed top-0 left-0 right-0 z-50 backdrop-blur-xl border-b transition-colors duration-300 bg-litus-navy/80 border-white/10"
>
    <div class="max-w-7xl mx-auto px-7 flex items-center justify-between h-[68px]">
        <a href="{{ route('home') }}" class="flex items-center gap-3 no-underline">
            <div class="w-9 h-9 rounded bg-white flex items-center justify-center text-litus-navy">
                <x-litus-icon name="ship" class="w-[18px] h-[18px]" />
            </div>
            <div>
                <div class="text-white font-black text-sm tracking-[0.3em] leading-none">LITUS</div>
                <div class="text-white/60 text-[7px] tracking-[0.3em] mt-0.5">MALDIVES</div>
            </div>
        </a>

        <div class="hidden md:flex items-center gap-10">
            @foreach(config('litus.nav_links') as $link)
                <a
                    href="{{ route($link['route']) }}"
                    @class([
                        'text-[0.68rem] font-bold tracking-[0.16em] no-underline transition-colors pb-0.5 border-b-2',
                        'text-white border-white' => request()->routeIs($link['route']),
                        'text-white/70 border-transparent hover:text-white' => !request()->routeIs($link['route']),
                    ])
                >{{ strtoupper($link['label']) }}</a>
            @endforeach
        </div>

        <a
            href="{{ route('contact') }}"
            class="hidden md:inline-flex px-6 py-2.5 bg-white text-litus-navy font-bold text-[0.68rem] tracking-[0.14em] rounded-sm no-underline hover:opacity-90 transition-opacity"
        >GET A QUOTE</a>

        <button
            type="button"
            data-mobile-menu-toggle
            aria-expanded="false"
            aria-label="Toggle menu"
            class="md:hidden text-white bg-transparent border-0 cursor-pointer p-1"
        >
            <x-litus-icon name="menu" data-icon="open" class="w-[22px] h-[22px]" />
            <x-litus-icon name="x" data-icon="close" class="w-[22px] h-[22px] hidden" />
        </button>
    </div>

    <div data-mobile-menu class="hidden md:hidden border-t border-white/10 bg-litus-navy px-7 pb-7">
        @foreach(config('litus.nav_links') as $link)
            <a
                href="{{ route($link['route']) }}"
                data-mobile-menu-close
                @class([
                    'block py-3.5 border-b border-white/6 text-[0.7rem] font-bold tracking-[0.16em] no-underline',
                    'text-white' => request()->routeIs($link['route']),
                    'text-white/70' => !request()->routeIs($link['route']),
                ])
            >{{ strtoupper($link['label']) }}</a>
        @endforeach
        <a
            href="{{ route('contact') }}"
            data-mobile-menu-close
            class="block mt-5 py-3.5 bg-white text-litus-navy text-center font-bold text-[0.7rem] tracking-[0.12em] rounded-sm no-underline"
        >GET A QUOTE</a>
    </div>
</nav>
