<section data-hero-slider class="relative h-screen min-h-[640px] overflow-hidden">
    {{-- Background layers (image + overlay per slide) --}}
    @foreach(config('litus.slides') as $index => $slide)
        <div
            data-hero-bg
            @class(['is-active' => $index === 0])
            class="absolute inset-0 z-0 overflow-hidden pointer-events-none"
        >
            <img
                src="{{ $slide['image'] ?? config('litus.hero_image') }}"
                alt="{{ $slide['headline'][0] ?? 'Maldives logistics' }}"
                class="absolute inset-0 w-full h-full object-cover select-none"
                loading="{{ $index === 0 ? 'eager' : 'lazy' }}"
            >
            <div class="absolute inset-0" style="background: {{ $slide['overlay'] }};"></div>
        </div>
    @endforeach

    {{-- Left accent bar --}}
    <div class="absolute left-0 top-0 bottom-0 w-1.5 bg-linear-to-b from-litus-primary to-transparent z-10 pointer-events-none"></div>

    {{-- Slide content --}}
    <div class="absolute inset-0 flex items-center z-10 pointer-events-none">
        <div class="max-w-7xl mx-auto px-7 w-full">
            @foreach(config('litus.slides') as $index => $slide)
                <div
                    data-hero-content
                    @class(['is-active' => $index === 0])
                    class="max-w-2xl pointer-events-auto"
                >
                    {{-- Tag --}}
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 bg-litus-primary/15 border border-litus-primary/30 rounded-sm mb-7">
                        <div class="w-1.5 h-1.5 rounded-full bg-litus-primary shrink-0"></div>
                        <span class="text-litus-primary font-bold text-[0.62rem] tracking-[0.22em]">{{ $slide['tag'] }}</span>
                    </div>

                    {{-- Headline --}}
                    <h1 class="m-0 mb-7 leading-none font-black text-[clamp(3rem,8vw,6.5rem)] tracking-tight">
                        @foreach($slide['headline'] as $line)
                            <span @class([
                                'block',
                                'text-litus-primary' => $line === $slide['accent'],
                                'text-white' => $line !== $slide['accent'],
                            ])>{{ $line }}</span>
                        @endforeach
                    </h1>

                    {{-- Subtitle --}}
                    <p class="text-white/65 text-base leading-relaxed max-w-lg m-0 mb-11">{{ $slide['sub'] }}</p>

                    {{-- CTAs --}}
                    <div class="flex flex-wrap gap-3.5">
                        <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-9 py-4 bg-litus-primary text-white font-bold text-[0.72rem] tracking-[0.12em] rounded-sm no-underline hover:opacity-90 transition-opacity">
                            OUR SERVICES
                            <x-litus-icon name="arrow-right" class="w-4 h-4 shrink-0" />
                        </a>
                        <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-9 py-4 bg-transparent border border-white/35 text-white font-semibold text-[0.72rem] tracking-[0.12em] rounded-sm no-underline hover:border-litus-primary hover:text-litus-primary transition-colors">
                            GET IN TOUCH
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Pagination dots --}}
    <div class="absolute bottom-[100px] left-1/2 -translate-x-1/2 flex items-center gap-2.5 z-20">
        @foreach(config('litus.slides') as $index => $slide)
            <button
                type="button"
                data-hero-dot
                aria-label="Go to slide {{ $index + 1 }}"
                @class([
                    'h-2.5 rounded-full border-0 cursor-pointer p-0 transition-all duration-[350ms]',
                    'w-9 bg-litus-primary' => $index === 0,
                    'w-2.5 bg-white/35 hover:bg-white/55' => $index !== 0,
                ])
            ></button>
        @endforeach
    </div>

    {{-- Side arrows --}}
    <button type="button" data-hero-prev aria-label="Previous slide" class="absolute top-1/2 left-7 -translate-y-1/2 z-20 w-12 h-12 border border-white/25 rounded-full bg-litus-navy/45 text-white cursor-pointer hidden sm:flex items-center justify-center backdrop-blur-sm hover:bg-litus-primary hover:border-litus-primary transition-colors">
        <x-litus-icon name="chevron-left" class="w-5 h-5" />
    </button>
    <button type="button" data-hero-next aria-label="Next slide" class="absolute top-1/2 right-7 -translate-y-1/2 z-20 w-12 h-12 border border-white/25 rounded-full bg-litus-navy/45 text-white cursor-pointer hidden sm:flex items-center justify-center backdrop-blur-sm hover:bg-litus-primary hover:border-litus-primary transition-colors">
        <x-litus-icon name="chevron-right" class="w-5 h-5" />
    </button>

    {{-- Stats strip --}}
    <div class="hidden md:grid absolute bottom-0 left-0 right-0 z-20 grid-cols-4 bg-litus-primary/95 backdrop-blur-md">
        @foreach([
            ['n' => '500+', 'l' => 'Islands Served'],
            ['n' => '15+', 'l' => 'Years Experience'],
            ['n' => '2,000+', 'l' => 'Deliveries / Month'],
            ['n' => '98%', 'l' => 'On-Time Rate'],
        ] as $i => $stat)
            <div @class(['flex flex-col items-center py-5', 'border-r border-white/20' => $i < 3])>
                <span class="text-white font-black text-3xl leading-none">{{ $stat['n'] }}</span>
                <span class="text-white/80 text-[0.6rem] tracking-[0.18em] mt-1.5 uppercase">{{ $stat['l'] }}</span>
            </div>
        @endforeach
    </div>
</section>
