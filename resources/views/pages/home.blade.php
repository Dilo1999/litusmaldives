@extends('layouts.app')

@section('title', 'Home')

@section('content')
@php($slides = config('litus.slides'))
@php($first = $slides[0])
@php($testimonial = config('litus.testimonial'))

<div class="min-h-screen overflow-x-clip bg-litus-bg">

    {{-- Hero --}}
    <section
        data-hero-slider
        data-hero-slides='@json(collect($slides)->values())'
        class="relative h-screen min-h-[640px] overflow-hidden"
    >
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

        <div class="pointer-events-none absolute inset-0 z-[5] flex items-center pt-[72px] pb-[200px] md:pb-[180px]">
            <div class="pointer-events-auto litus-container">
                <div data-hero-copy class="max-w-[640px]">
                    <div data-hero-copy-inner>
                        <h1 class="m-0 leading-[1.05] tracking-[-0.02em]">
                            <span data-hero-h1 class="block text-[clamp(2.1rem,5.2vw,4.4rem)] font-black text-white">{{ $first['h1'] }}</span>
                            <span data-hero-h2 class="mt-1 block text-[clamp(2.4rem,6vw,5.2rem)] font-black text-litus-accent">{{ $first['h2'] }}</span>
                        </h1>

                        <p data-hero-sub class="mt-5 mb-8 max-w-[460px] text-[0.95rem] leading-[1.75] text-white/75 sm:mt-6 sm:mb-9 sm:text-[1.05rem]">{{ $first['sub'] }}</p>

                        <div class="flex flex-wrap items-center gap-3 sm:gap-4">
                            <a
                                data-hero-cta
                                href="{{ route($first['cta_route'] ?? 'services') }}"
                                class="inline-flex items-center gap-2 rounded-lg bg-litus-accent px-7 py-3.5 text-[0.82rem] font-bold tracking-[0.04em] text-white no-underline shadow-[0_4px_20px_rgba(6,182,212,0.45)] transition-opacity hover:opacity-90"
                            >
                                <span data-hero-cta-label>{{ $first['cta'] }}</span>
                                <x-litus-icon name="arrow-right" class="h-4 w-4" />
                            </a>
                            <a
                                data-hero-secondary
                                href="{{ route($first['secondary_route'] ?? 'contact') }}"
                                class="inline-flex items-center gap-2 rounded-lg border border-white/50 px-7 py-3.5 text-[0.82rem] font-semibold tracking-[0.04em] text-white no-underline transition-all hover:border-litus-accent hover:text-litus-accent"
                            >
                                <span data-hero-secondary-label>{{ $first['secondary_cta'] ?? 'CONTACT Us' }}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute top-1/2 right-5 z-[10] hidden -translate-y-1/2 flex-col items-center gap-3 sm:right-8 md:flex lg:right-12">
            <div class="absolute top-2 bottom-2 left-1/2 w-px -translate-x-1/2 bg-white/25"></div>
            @foreach($slides as $index => $slide)
                <button
                    type="button"
                    data-hero-dot
                    aria-label="Go to slide {{ $index + 1 }}"
                    class="relative z-[1] flex cursor-pointer flex-col items-center gap-1.5 border-0 bg-transparent p-0"
                >
                    <span
                        data-hero-dot-mark
                        class="block h-2.5 w-2.5 rounded-full transition-all duration-300"
                        style="{{ $index === 0 ? 'background:#06B6D4;box-shadow:0 0 0 4px rgba(6,182,212,0.25);' : 'background:rgba(255,255,255,0.35);' }}"
                    ></span>
                    <span
                        data-hero-dot-num
                        class="text-[0.72rem] font-bold tracking-[0.08em] transition-colors duration-300 {{ $index === 0 ? 'text-litus-accent' : 'text-white/45' }}"
                    >{{ str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT) }}</span>
                </button>
            @endforeach
        </div>

        <div class="absolute right-0 bottom-0 left-0 z-[10] w-full max-w-full">
            <div class="overflow-hidden rounded-t-[22px] border border-white/10 border-b-0 bg-litus-navy/80 backdrop-blur-[18px]">
                <div class="litus-container grid grid-cols-1 gap-y-5 py-6 md:grid-cols-2 md:gap-y-6 lg:grid-cols-4 lg:gap-y-0 lg:py-7">
                    @foreach(config('litus.hero_features') as $index => $feature)
                        <div @class([
                            'flex min-w-0 items-start gap-3.5 px-2 lg:px-5',
                            'lg:border-r lg:border-white/12' => $index < 3,
                        ])>
                            <div class="mt-0.5 shrink-0 text-litus-accent">
                                <x-litus-icon :name="$feature['icon']" class="h-7 w-7" />
                            </div>
                            <div class="min-w-0">
                                <div class="mb-1 text-[0.9rem] leading-[1.3] font-bold text-white">{{ $feature['title'] }}</div>
                                <div class="text-[0.78rem] leading-[1.55] text-white/55">{{ $feature['body'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="hidden" aria-hidden="true">
            <span class="hero-fx-layer hero-fx-wipe-tile hero-fx-wipe-inner hero-fx-mosaic-tile hero-fx-mosaic-inner hero-fx-blind-strip hero-fx-blind-inner"></span>
        </div>
    </section>

    {{-- Services --}}
    <section class="relative overflow-hidden py-[60px] pb-[80px]">
        <div class="litus-orb -right-20 top-0 h-[360px] w-[360px] opacity-40"></div>

        <div class="relative litus-container">
            <div class="mb-10 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <x-section-badge text="OUR SERVICES" surface="white" />
                    <h2 class="m-0 max-w-[520px] text-[clamp(1.7rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">
                        Comprehensive Logistics Solutions for You
                    </h2>
                </div>
                <x-arrow-link :href="route('services')" variant="text" label="View all services" />
            </div>

            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach(config('litus.home_services') as $service)
                    <a
                        href="{{ route('services') }}"
                        class="group litus-card flex items-start gap-4 rounded-[18px] px-5 py-5 no-underline transition-all duration-250 hover:-translate-y-1 hover:shadow-[0_10px_30px_rgba(6,182,212,0.12),0_2px_8px_rgba(14,23,59,0.06)]"
                    >
                        <div class="mt-0.5 shrink-0 text-litus-accent transition-transform duration-300 group-hover:scale-110">
                            <x-litus-icon :name="$service['icon']" class="h-8 w-8" />
                        </div>
                        <div class="min-w-0">
                            <div class="mb-1.5 text-[0.95rem] leading-snug font-bold text-litus-navy">{{ $service['title'] }}</div>
                            <p class="m-0 text-[0.8rem] leading-[1.55] text-litus-muted">{{ $service['desc'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- About Litus --}}
    <section class="relative overflow-hidden py-[50px]">
        <div class="litus-orb -left-[100px] bottom-[-100px] h-[400px] w-[400px] opacity-40"></div>

        <div class="relative litus-container">
            <div class="litus-card relative overflow-hidden rounded-[28px] px-8 py-12 md:px-16 md:py-14">
                <div class="pointer-events-none absolute -top-20 -right-20 h-[300px] w-[300px] rounded-full bg-[radial-gradient(circle,rgba(6,182,212,0.1)_0%,transparent_70%)]"></div>

                <div class="relative z-[1] grid grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-[72px]">
                    <div>
                        <x-section-badge text="ABOUT LITUS" />
                        <h2 class="mb-5 text-[clamp(1.7rem,3.2vw,2.5rem)] leading-[1.15] font-black text-litus-navy">
                            We Take Care of<br>
                            <span class="text-litus-accent">Your Logistics</span>
                        </h2>
                        <p class="mb-7 text-[0.92rem] leading-[1.88] text-litus-muted">
                            LITUS Maldives is a Maldivian-owned logistics company delivering reliable and cost-effective solutions to businesses and individuals worldwide.
                        </p>
                        <ul class="mb-9 flex list-none flex-col gap-3.5 p-0">
                            @foreach(config('litus.why_points') as $point)
                                <li class="flex items-start gap-3">
                                    <x-litus-icon name="check-circle" class="mt-0.5 h-[18px] w-[18px] shrink-0 text-litus-accent" />
                                    <span class="text-[0.88rem] leading-[1.55] text-litus-muted">{{ $point }}</span>
                                </li>
                            @endforeach
                        </ul>
                        <x-arrow-link :href="route('about')" variant="accent" label="Learn More" />
                    </div>

                    <div class="relative">
                        <div class="overflow-hidden rounded-[22px]">
                            <x-litus-sample-img :index="0" alt="Litus Maldives logistics" class="block h-[380px] w-full object-cover" />
                        </div>
                        <div class="absolute right-3 bottom-3 rounded-2xl bg-litus-navy px-5 py-4 shadow-[0_8px_24px_rgba(14,23,59,0.25)] sm:right-4 sm:bottom-4 sm:px-[22px] sm:py-[18px]">
                            <div class="text-[1.7rem] leading-none font-black text-white">15+</div>
                            <div class="mt-1.5 max-w-[90px] text-[0.62rem] leading-[1.35] font-semibold tracking-[0.04em] text-white/65">Years of Experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Stats bar --}}
    <section class="relative overflow-hidden pb-[50px]">
        <div class="relative litus-container">
            <div class="rounded-[24px] bg-litus-navy px-4 py-8 shadow-[0_12px_40px_rgba(14,23,59,0.18)] sm:px-6 md:py-9">
                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4 lg:gap-0">
                    @foreach(config('litus.home_stats') as $index => $stat)
                        <div @class([
                            'flex items-center gap-4 px-4 md:px-6',
                            'lg:border-r lg:border-white/12' => $index < 3,
                        ])>
                            <div class="shrink-0 text-litus-accent">
                                <x-litus-icon :name="$stat['icon']" class="h-8 w-8" />
                            </div>
                            <div>
                                <div class="text-[1.65rem] leading-none font-black text-white md:text-[1.85rem]">{{ $stat['value'] }}</div>
                                <div class="mt-1.5 text-[0.82rem] font-medium text-white/70">{{ $stat['label'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonial --}}
    <section class="bg-white py-[50px]">
        <div class="litus-container text-center">
            <div class="mb-8">
                <img
                    src="{{ asset($testimonial['image']) }}"
                    alt="{{ $testimonial['name'] }}"
                    class="mx-auto block h-[88px] w-[88px] rounded-full border-[3px] border-litus-surface object-cover shadow-[0_4px_20px_rgba(14,23,59,0.12)]"
                    loading="lazy"
                >
            </div>

            <p class="mb-8 text-[clamp(1rem,2vw,1.15rem)] leading-[1.85] font-medium text-litus-navy">
                {{ $testimonial['quote'] }}
            </p>

            <div class="mb-5 font-serif text-[2.2rem] leading-none text-litus-navy">&rdquo;&rdquo;</div>

            <div class="mb-1 text-[0.9rem] font-extrabold text-litus-navy">{{ $testimonial['name'] }}</div>
            <div class="text-[0.82rem] text-litus-muted">{{ $testimonial['role'] }}</div>
        </div>
    </section>

    {{-- Operations --}}
    <section id="operations" class="relative scroll-mt-24 overflow-hidden py-[50px]">
        <div class="litus-orb -right-[60px] top-0 h-[360px] w-[360px] opacity-35"></div>

        <div class="relative litus-container">
            <div class="grid grid-cols-1 items-center gap-14 lg:grid-cols-[1fr_1.3fr]">
                <div>
                    <x-section-badge text="WHAT WE DO" surface="white" />
                    <h2 class="mb-[18px] text-[clamp(1.7rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">Our Operations</h2>
                    <p class="mb-8 text-[0.92rem] leading-[1.88] text-litus-muted">
                        Litus Maldives, taking the Maldives logistics to another level. Our dedication with absolute standards, special staffing, and modern machinery will provide you with an incredible experience — from container loading in Malé to the final island delivery.
                    </p>
                    <x-arrow-link :href="route('gallery')" variant="dark" label="Our Operations" />
                </div>

                <div class="grid grid-cols-2 grid-rows-[220px_160px] gap-3">
                    <div class="row-span-2 overflow-hidden rounded-[20px] shadow-[0_4px_20px_rgba(14,23,59,0.1)]">
                        <x-litus-sample-img :index="0" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                    </div>
                    @foreach([1, 2] as $index)
                        <div class="overflow-hidden rounded-[20px] shadow-[0_4px_20px_rgba(14,23,59,0.08)]">
                            <x-litus-sample-img :index="$index" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-105" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-3 grid grid-cols-2 gap-3 md:grid-cols-4">
                @foreach([3, 4, 5, 6] as $index)
                    <div class="h-[130px] overflow-hidden rounded-[18px] shadow-[0_4px_16px_rgba(14,23,59,0.07)]">
                        <x-litus-sample-img :index="$index" alt="Operations" class="h-full w-full object-cover transition-transform duration-500 hover:scale-[1.07]" />
                    </div>
                @endforeach
            </div>

            <div class="mt-8 text-center">
                <x-arrow-link :href="route('gallery')" variant="outline" label="View More" />
            </div>
        </div>
    </section>

    {{-- Articles --}}
    <section id="articles" class="relative scroll-mt-24 overflow-hidden py-[50px]">
        <div class="litus-orb -left-20 bottom-[-60px] h-[320px] w-[320px] opacity-35"></div>

        <div class="relative litus-container">
            <div class="mb-11 flex flex-wrap items-end justify-between gap-4">
                <div>
                    <x-section-badge text="LATEST NEWS" surface="white" />
                    <h2 class="m-0 text-[clamp(1.7rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">Top Latest Articles</h2>
                </div>
                <x-arrow-link :href="route('blog')" variant="text" label="View All" />
            </div>

            <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                @foreach(collect(config('blog.posts'))->take(3) as $i => $article)
                    <a href="{{ route('blog.show', $article['slug']) }}" class="litus-card group block cursor-pointer overflow-hidden no-underline transition-all duration-250 hover:-translate-y-1.5 hover:shadow-[0_12px_40px_rgba(6,182,212,0.14),0_2px_8px_rgba(14,23,59,0.06)]">
                        <div class="h-[190px] overflow-hidden">
                            <img src="{{ $article['hero'] }}" alt="{{ $article['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.06]" loading="lazy">
                        </div>
                        <div class="px-[22px] pt-[22px] pb-[26px]">
                            <div class="mb-3 flex gap-2.5">
                                <span class="rounded-full bg-litus-surface px-3 py-0.5 text-[0.58rem] font-bold tracking-[0.12em] text-litus-accent">{{ $article['tag'] }}</span>
                                <span class="text-[0.72rem] text-[#b0bcd0]">{{ $article['date'] }}</span>
                            </div>
                            <h3 class="mb-2.5 text-[0.92rem] leading-snug font-bold text-litus-navy">{{ $article['title'] }}</h3>
                            <p class="mb-4 text-[0.78rem] leading-[1.72] text-litus-muted">{{ $article['excerpt'] }}</p>
                            <div class="flex items-center gap-1 text-[0.68rem] font-bold text-litus-accent">
                                Read More
                                <x-litus-icon name="chevron-right" class="h-3 w-3" />
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="mt-10 text-center">
                <x-arrow-link :href="route('blog')" variant="ghost" label="View All Articles" />
            </div>
        </div>
    </section>

</div>
@endsection
