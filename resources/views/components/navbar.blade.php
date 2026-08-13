<header
    data-navbar
    class="fixed top-0 right-0 left-0 z-[100] border-b border-transparent bg-transparent transition-all duration-400"
>
    <div class="litus-container flex h-[72px] items-center justify-between gap-4">
        <a href="{{ route('home') }}" class="flex shrink-0 items-center no-underline">
            <img
                data-nav-logo
                src="{{ asset(config('litus.logo')) }}"
                alt="LITUS Maldives"
                class="h-[42px] w-auto object-contain brightness-0 invert transition-all duration-400"
            >
        </a>

        <nav class="hidden flex-1 items-center justify-center gap-0.5 lg:flex xl:gap-1">
            @foreach(config('litus.nav_links') as $link)
                @php
                    $href = $link['href'] ?? route($link['route']);
                    $isActive = empty($link['href']) && !empty($link['route']) && request()->routeIs($link['route']);
                @endphp
                <a
                    href="{{ $href }}"
                    data-nav-link
                    data-active="{{ $isActive ? 'true' : 'false' }}"
                    @class([
                        'rounded-none border-b-2 px-2.5 py-1.5 text-[0.82rem] font-semibold tracking-[0.04em] uppercase no-underline transition-colors duration-200 xl:px-3.5 xl:text-[0.88rem]',
                        'border-litus-accent font-bold text-litus-accent' => $isActive,
                        'border-transparent text-white/90 hover:text-litus-accent' => !$isActive,
                    ])
                >{{ $link['label'] }}</a>
            @endforeach
        </nav>

        <div class="hidden shrink-0 items-center lg:flex">
            <a
                href="{{ route('contact') }}"
                data-nav-cta
                class="inline-flex items-center gap-2 rounded-full bg-gradient-to-r from-litus-accent to-cyan-400 px-6 py-2.5 text-[0.82rem] font-bold tracking-[0.04em] text-white no-underline shadow-[0_4px_18px_rgba(6,182,212,0.4)] transition-all duration-250 hover:opacity-90"
            >
                Get a Quote
                <x-litus-icon name="arrow-right" class="h-4 w-4" />
            </a>
        </div>

        <button
            type="button"
            data-mobile-menu-toggle
            aria-expanded="false"
            aria-label="Toggle menu"
            class="cursor-pointer border-0 bg-transparent p-1 text-white transition-colors duration-300 lg:hidden"
        >
            <x-litus-icon name="menu" data-icon="open" class="h-[22px] w-[22px]" />
            <x-litus-icon name="x" data-icon="close" class="hidden h-[22px] w-[22px]" />
        </button>
    </div>

    <div data-mobile-menu class="hidden border-t border-litus-navy/7 bg-white px-6 py-6 shadow-[0_8px_24px_rgba(14,23,59,0.10)] lg:hidden">
        @foreach(config('litus.nav_links') as $link)
            @php
                $href = $link['href'] ?? route($link['route']);
                $isActive = empty($link['href']) && !empty($link['route']) && request()->routeIs($link['route']);
            @endphp
            <a
                href="{{ $href }}"
                data-mobile-menu-close
                @class([
                    'block border-b border-litus-navy/6 py-3.5 text-[0.95rem] font-semibold tracking-[0.04em] no-underline',
                    'text-litus-accent' => $isActive,
                    'text-litus-muted' => !$isActive,
                ])
            >{{ $link['label'] }}</a>
        @endforeach
        <a
            href="{{ route('contact') }}"
            data-mobile-menu-close
            class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-full bg-gradient-to-r from-litus-accent to-cyan-400 py-3 text-[0.82rem] font-bold text-white no-underline"
        >
            Get a Quote
            <x-litus-icon name="arrow-right" class="h-4 w-4" />
        </a>
    </div>
</header>
