@php($slides = config('litus.slides'))
@php($first = $slides[0])

<section
    data-hero-slider
    data-hero-slides='@json(collect($slides)->values())'
    class="relative h-screen min-h-[640px] overflow-hidden"
>
    {{-- Keyframes injected once — matches React HeroTransitionStyles --}}
    <style>
        @keyframes hero-tile-wipe {
            from { clip-path: inset(100% 0 0 0); }
            to   { clip-path: inset(0% 0 0 0); }
        }
        @keyframes hero-mosaic-in {
            from { opacity: 0; transform: scale(0.65); }
            to   { opacity: 1; transform: scale(1); }
        }
        @keyframes hero-blind-in {
            from { transform: scaleY(0); }
            to   { transform: scaleY(1); }
        }
    </style>

    <img
        data-hero-base
        src="{{ $first['image'] }}"
        alt="Litus Maldives operations"
        class="absolute inset-0 z-0 h-full w-full object-cover"
    >

    <div data-hero-effect aria-hidden="true" class="pointer-events-none absolute inset-0 z-[4] overflow-hidden"></div>

    <div class="hero-overlay-gradient pointer-events-none absolute inset-0 z-[3]"></div>

    <div class="pointer-events-none absolute inset-0 z-[5] flex items-center pt-[68px]">
        <div class="pointer-events-auto mx-auto w-full max-w-[1320px] px-[52px]">
            <div data-hero-copy class="max-w-[640px]">
                <div data-hero-copy-inner>
                    <div class="mb-[22px] inline-flex items-center gap-2">
                        <div class="h-0.5 w-7 bg-litus-accent"></div>
                        <span data-hero-eyebrow class="text-[0.65rem] font-bold tracking-[0.22em] text-litus-accent">{{ $first['eyebrow'] }}</span>
                    </div>

                    <h1 class="m-0 leading-[1.08] tracking-[-0.02em]">
                        <span data-hero-h1 class="block text-[clamp(2.8rem,7vw,5.6rem)] font-black text-white/88">{{ $first['h1'] }}</span>
                        <span data-hero-h2 class="block text-[clamp(2.8rem,7vw,5.6rem)] font-black text-white">{{ $first['h2'] }}</span>
                    </h1>

                    <p data-hero-sub class="mt-6 mb-10 max-w-[480px] text-[1.05rem] leading-[1.78] text-white/62">{{ $first['sub'] }}</p>

                    <div class="flex flex-wrap items-center gap-5">
                        <a
                            data-hero-cta
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 rounded-md bg-litus-accent px-[34px] py-3.5 text-[0.82rem] font-bold text-white no-underline shadow-[0_4px_20px_rgba(6,182,212,0.45)] transition-opacity hover:opacity-85"
                        >
                            <span data-hero-cta-label>{{ $first['cta'] }}</span>
                            <x-litus-icon name="arrow-right" class="h-4 w-4" />
                        </a>
                        <a
                            href="{{ route('services') }}"
                            class="inline-flex items-center gap-2 rounded-md border border-white/35 px-[30px] py-[13px] text-[0.82rem] font-semibold text-white no-underline transition-all hover:border-litus-accent hover:text-litus-accent"
                        >
                            Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-[160px] left-[52px] z-[10] flex gap-2">
        @foreach($slides as $index => $slide)
            <button
                type="button"
                data-hero-dot
                aria-label="Go to slide {{ $index + 1 }}"
                style="height:8px;border-radius:4px;border:none;padding:0;cursor:pointer;transition:all 0.35s;{{ $index === 0 ? 'width:28px;background:#06B6D4;' : 'width:8px;background:rgba(255,255,255,0.35);' }}"
            ></button>
        @endforeach
    </div>

    <div class="absolute right-[52px] bottom-[148px] z-[10] flex gap-2.5">
        <button type="button" data-hero-prev aria-label="Previous slide" class="flex h-11 w-11 cursor-pointer items-center justify-center rounded-full border border-white/25 bg-white/12 text-white backdrop-blur-[6px] transition-all hover:border-litus-accent hover:bg-litus-accent">
            <x-litus-icon name="chevron-left" class="h-[18px] w-[18px]" />
        </button>
        <button type="button" data-hero-next aria-label="Next slide" class="flex h-11 w-11 cursor-pointer items-center justify-center rounded-full border border-white/25 bg-white/12 text-white backdrop-blur-[6px] transition-all hover:border-litus-accent hover:bg-litus-accent">
            <x-litus-icon name="chevron-right" class="h-[18px] w-[18px]" />
        </button>
    </div>

    <div class="absolute right-0 bottom-0 left-0 z-[10]">
        <div class="h-px bg-white/10"></div>
        <div class="border-t border-white/8 bg-litus-navy/75 backdrop-blur-[16px]">
            <div class="mx-auto grid max-w-[1320px] grid-cols-1 px-[52px] md:grid-cols-3">
                @foreach(config('litus.hero_features') as $index => $feature)
                    <div @class([
                        'flex items-start gap-4 py-7',
                        'md:border-r md:border-white/10 md:pr-8' => $index < 2,
                        'md:ml-8 md:pl-8' => $index > 0,
                    ])>
                        <div class="mt-0.5 shrink-0 text-litus-accent">
                            <x-litus-icon :name="$feature['icon']" class="h-7 w-7" />
                        </div>
                        <div>
                            <div class="mb-1.5 text-[0.85rem] leading-[1.3] font-bold text-white">{{ $feature['title'] }}</div>
                            <div class="text-[0.76rem] leading-[1.65] text-white/45">{{ $feature['body'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Keep effect classes in DOM so Tailwind retains them in production builds --}}
    <div class="hidden" aria-hidden="true">
        <span class="hero-fx-layer hero-fx-wipe-tile hero-fx-wipe-inner hero-fx-mosaic-tile hero-fx-mosaic-inner hero-fx-blind-strip hero-fx-blind-inner"></span>
    </div>

    <script type="application/json" data-hero-slides>@json(collect($slides)->values())</script>
</section>
