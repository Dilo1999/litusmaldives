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

    <div class="pointer-events-none absolute inset-0 z-[5] flex items-center pt-[68px] pb-[260px] md:pb-[230px]">
        <div class="pointer-events-auto mx-auto w-full max-w-[1320px] px-6 sm:px-[52px]">
            <div data-hero-copy class="max-w-[580px]">
                <div data-hero-copy-inner>
                    <div class="mb-4 inline-flex items-center gap-2 sm:mb-[22px]">
                        <div class="h-0.5 w-7 bg-litus-accent"></div>
                        <span data-hero-eyebrow class="text-[0.65rem] font-bold tracking-[0.22em] text-litus-accent">{{ $first['eyebrow'] }}</span>
                    </div>

                    <h1 class="m-0 leading-[1.06] tracking-[-0.02em]">
                        <span data-hero-h1 class="block text-[clamp(2rem,5vw,4.25rem)] font-black text-white/88">{{ $first['h1'] }}</span>
                        <span data-hero-h2 class="block text-[clamp(2rem,5vw,4.25rem)] font-black text-white">{{ $first['h2'] }}</span>
                    </h1>

                    <p data-hero-sub class="mt-4 mb-6 max-w-[480px] text-[0.95rem] leading-[1.7] text-white/62 sm:mt-6 sm:mb-8 sm:text-[1.05rem] sm:leading-[1.78]">{{ $first['sub'] }}</p>

                    <div class="flex flex-wrap items-center gap-3 sm:gap-5">
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

    {{-- Bottom zone: slider controls + feature strip (stacked, no overlap) --}}
    <div class="absolute right-0 bottom-0 left-0 z-[10] w-full max-w-full overflow-hidden">
        <div class="mx-auto flex w-full max-w-[1320px] items-center justify-between px-6 pb-4 sm:px-[52px] sm:pb-5">
            <div class="flex gap-2">
                @foreach($slides as $index => $slide)
                    <button
                        type="button"
                        data-hero-dot
                        aria-label="Go to slide {{ $index + 1 }}"
                        style="height:8px;border-radius:4px;border:none;padding:0;cursor:pointer;transition:all 0.35s;{{ $index === 0 ? 'width:28px;background:#06B6D4;' : 'width:8px;background:rgba(255,255,255,0.35);' }}"
                    ></button>
                @endforeach
            </div>

            <div class="flex gap-2.5">
                <button type="button" data-hero-prev aria-label="Previous slide" class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-white/25 bg-white/12 text-white backdrop-blur-[6px] transition-all hover:border-litus-accent hover:bg-litus-accent sm:h-11 sm:w-11">
                    <x-litus-icon name="chevron-left" class="h-[18px] w-[18px]" />
                </button>
                <button type="button" data-hero-next aria-label="Next slide" class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full border border-white/25 bg-white/12 text-white backdrop-blur-[6px] transition-all hover:border-litus-accent hover:bg-litus-accent sm:h-11 sm:w-11">
                    <x-litus-icon name="chevron-right" class="h-[18px] w-[18px]" />
                </button>
            </div>
        </div>

        <div class="h-px bg-white/10"></div>
        <div class="border-t border-white/8 bg-litus-navy/75 backdrop-blur-[16px]">
            <div class="mx-auto grid w-full max-w-[1320px] grid-cols-1 gap-y-4 px-6 py-5 sm:px-[52px] md:grid-cols-3 md:gap-y-0 md:py-6">
                @foreach(config('litus.hero_features') as $index => $feature)
                    <div @class([
                        'flex min-w-0 items-start gap-3 sm:gap-4 md:px-4',
                        'md:border-r md:border-white/10' => $index < 2,
                    ])>
                        <div class="mt-0.5 shrink-0 text-litus-accent">
                            <x-litus-icon :name="$feature['icon']" class="h-6 w-6 sm:h-7 sm:w-7" />
                        </div>
                        <div class="min-w-0">
                            <div class="mb-1 text-[0.78rem] leading-[1.35] font-bold text-white sm:text-[0.82rem]">{{ $feature['title'] }}</div>
                            <div class="text-[0.72rem] leading-[1.6] text-white/45 sm:text-[0.76rem] sm:leading-[1.65]">{{ $feature['body'] }}</div>
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
