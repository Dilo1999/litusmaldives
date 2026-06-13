<header
    data-navbar
    class="fixed top-0 right-0 left-0 z-[100] border-b border-transparent bg-transparent transition-all duration-400"
>
    <div class="mx-auto flex h-[68px] max-w-[1320px] items-center justify-between gap-6 px-9">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center no-underline">
            <img
                data-nav-logo
                src="{{ config('litus.logo') }}"
                alt="LITUS Maldives"
                class="h-[42px] w-auto object-contain brightness-0 invert transition-all duration-400"
            >
        </a>

        <nav class="hidden flex-1 items-center justify-center gap-1.5 md:flex">
            @foreach(config('litus.nav_links') as $link)
                <a
                    href="{{ route($link['route']) }}"
                    data-nav-link
                    data-active="{{ request()->routeIs($link['route']) ? 'true' : 'false' }}"
                    @class([
                        'rounded-md border-b-2 px-3.5 py-1.5 text-[0.72rem] font-medium tracking-[0.06em] no-underline transition-colors duration-200',
                        'border-litus-accent font-bold text-litus-accent' => request()->routeIs($link['route']),
                        'border-transparent text-white/82 hover:text-litus-accent' => !request()->routeIs($link['route']),
                    ])
                >{{ $link['label'] }}</a>
            @endforeach
        </nav>

        <div class="hidden shrink-0 items-center gap-5 md:flex">
            <a href="tel:+9607979055" class="flex items-center gap-2 no-underline transition-opacity hover:opacity-70">
                <x-litus-icon data-nav-phone-icon name="phone" class="h-3.5 w-3.5 text-white/70" />
                <span data-nav-phone class="text-[0.78rem] font-bold tracking-[0.04em] text-white transition-colors duration-400">+960 797 9055</span>
            </a>

            <div data-nav-divider class="h-5 w-px bg-white/20"></div>

            <a
                href="{{ route('contact') }}"
                data-nav-cta
                class="rounded-md border border-white/45 bg-transparent px-5 py-2 text-[0.72rem] font-semibold tracking-[0.08em] text-white no-underline transition-all duration-250 hover:border-litus-accent hover:bg-litus-accent hover:text-white"
            >
                Leave a Request
            </a>
        </div>

        <button
            type="button"
            data-mobile-menu-toggle
            aria-expanded="false"
            aria-label="Toggle menu"
            class="cursor-pointer border-0 bg-transparent p-1 text-white transition-colors duration-300 md:hidden"
        >
            <x-litus-icon name="menu" data-icon="open" class="h-[22px] w-[22px]" />
            <x-litus-icon name="x" data-icon="close" class="hidden h-[22px] w-[22px]" />
        </button>
    </div>

    <div data-mobile-menu class="hidden border-t border-litus-navy/7 bg-white px-7 py-6 shadow-[0_8px_24px_rgba(14,23,59,0.10)] md:hidden">
        @foreach(config('litus.nav_links') as $link)
            <a
                href="{{ route($link['route']) }}"
                data-mobile-menu-close
                @class([
                    'block border-b border-litus-navy/6 py-3.5 text-[0.82rem] font-semibold tracking-[0.06em] no-underline',
                    'text-litus-accent' => request()->routeIs($link['route']),
                    'text-litus-muted' => !request()->routeIs($link['route']),
                ])
            >{{ $link['label'] }}</a>
        @endforeach
        <div class="flex items-center gap-2 pt-4">
            <x-litus-icon name="phone" class="h-3.5 w-3.5 text-litus-accent" />
            <a href="tel:+9607979055" class="text-[0.82rem] font-bold text-litus-navy no-underline">+960 797 9055</a>
        </div>
        <a
            href="{{ route('contact') }}"
            data-mobile-menu-close
            class="mt-3.5 block rounded-lg bg-litus-navy py-3 text-center text-[0.78rem] font-bold text-white no-underline"
        >
            Leave a Request
        </a>
    </div>
</header>
