@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@php
    $about = config('litus.about');
    $samples = config('litus.sample_images');
@endphp

<div class="overflow-x-clip bg-litus-bg">

    {{-- Hero --}}
    <section class="relative min-h-[280px] overflow-hidden pb-16 pt-[72px] md:min-h-[320px] md:pb-20">
        <img
            src="{{ $about['hero_image'] }}"
            alt="About Litus Maldives"
            class="absolute inset-0 h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-litus-navy/90 via-litus-navy/65 to-litus-navy/25"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-litus-navy/50 via-transparent to-litus-navy/20"></div>

        <div class="relative litus-container flex min-h-[180px] items-center py-6 md:min-h-[200px] md:py-8">
            <div class="max-w-[720px]">
                <div class="mb-5 inline-flex items-center gap-2">
                    <div class="h-0.5 w-7 bg-litus-accent"></div>
                    <span class="text-[0.65rem] font-bold tracking-[0.22em] text-litus-accent">{{ $about['eyebrow'] }}</span>
                </div>

                <h1 class="m-0 text-[clamp(2.4rem,5.5vw,4.4rem)] leading-[1.08] font-black tracking-[-0.02em] text-white">
                    {{ $about['h1'] }}
                    <span class="block text-litus-accent">{{ $about['h1_accent'] }}</span>
                </h1>

                <p class="mt-6 mb-0 max-w-[580px] text-[0.95rem] leading-[1.85] text-white/75 md:text-[1.02rem]">
                    {{ $about['intro'] }}
                </p>
            </div>
        </div>
    </section>

    {{-- Vision & Mission card --}}
    <section class="relative z-[2] -mt-10 mb-4 md:-mt-14">
        <div class="litus-container">
            <div class="litus-card grid grid-cols-1 overflow-hidden rounded-[28px] shadow-[0_16px_48px_rgba(14,23,59,0.12)] md:grid-cols-2">
                <div class="flex items-start gap-5 px-8 py-10 md:px-12 md:py-12">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-litus-accent text-white">
                        <x-litus-icon name="target" class="h-7 w-7" />
                    </div>
                    <div>
                        <h2 class="m-0 text-[1.05rem] font-black tracking-[0.06em] text-litus-navy">OUR VISION</h2>
                        <div class="mt-2.5 h-0.5 w-10 rounded-full bg-litus-accent"></div>
                        <p class="mt-3.5 mb-0 text-[0.95rem] leading-[1.7] text-litus-muted">{{ $about['vision'] }}</p>
                    </div>
                </div>

                <div class="flex items-start gap-5 border-t border-litus-navy/8 px-8 py-10 md:border-t-0 md:border-l md:px-12 md:py-12">
                    <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-litus-accent text-white">
                        <x-litus-icon name="flag" class="h-7 w-7" />
                    </div>
                    <div>
                        <h2 class="m-0 text-[1.05rem] font-black tracking-[0.06em] text-litus-navy">OUR MISSION</h2>
                        <div class="mt-2.5 h-0.5 w-10 rounded-full bg-litus-accent"></div>
                        <p class="mt-3.5 mb-0 text-[0.95rem] leading-[1.7] text-litus-muted">{{ $about['mission'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Leadership --}}
    <section class="relative overflow-hidden py-[70px]">
        <div class="litus-orb -right-20 top-10 h-[320px] w-[320px] opacity-35"></div>

        <div class="relative litus-container">
            <div class="mb-12 text-center">
                <x-section-badge text="MEET OUR TEAM" surface="white" class="justify-center" />
                <h2 class="m-0 text-[clamp(1.9rem,3.5vw,2.6rem)] font-black text-litus-navy">Our Leadership</h2>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach(config('litus.team') as $i => $member)
                    <div class="litus-card overflow-hidden rounded-[20px] text-center transition-all duration-250 hover:-translate-y-1 hover:shadow-[0_12px_36px_rgba(14,23,59,0.12)]">
                        <div class="aspect-[4/5] overflow-hidden bg-litus-surface">
                            <img
                                src="{{ !empty($member['image']) ? asset($member['image']) : ($samples[($i + 2) % count($samples)] ?? config('litus.hero_image')) }}"
                                alt="{{ $member['name'] }}"
                                class="h-full w-full object-cover"
                                loading="lazy"
                            >
                        </div>
                        <div class="px-5 pt-5 pb-6">
                            <div class="text-[1rem] font-bold text-litus-navy">{{ $member['name'] }}</div>
                            <div class="mt-1 text-[0.78rem] text-litus-muted">{{ $member['role'] }}</div>
                            <a
                                href="{{ $member['linkedin'] ?? '#' }}"
                                aria-label="{{ $member['name'] }} on LinkedIn"
                                class="mt-4 inline-flex h-9 w-9 items-center justify-center rounded-full bg-litus-accent/12 text-litus-accent no-underline transition-colors hover:bg-litus-accent hover:text-white"
                            >
                                <x-litus-icon name="linkedin" class="h-4 w-4" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Key Members --}}
    <section class="relative overflow-hidden bg-white py-[70px]">
        <div class="pointer-events-none absolute inset-y-10 left-0 w-24 opacity-40 md:w-32" style="background-image:radial-gradient(circle, rgba(14,23,59,0.12) 1px, transparent 1.5px); background-size:14px 14px;"></div>
        <div class="pointer-events-none absolute inset-y-10 right-0 w-24 opacity-40 md:w-32" style="background-image:radial-gradient(circle, rgba(14,23,59,0.12) 1px, transparent 1.5px); background-size:14px 14px;"></div>

        <div class="relative litus-container">
            <div class="mb-12 text-center">
                <h2 class="m-0 text-[0.78rem] font-bold tracking-[0.2em] text-litus-accent md:text-[0.85rem]">
                    MEET OUR KEY MEMBERS
                </h2>
            </div>

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach(config('litus.key_members') as $i => $member)
                    <div class="flex min-h-[150px] overflow-hidden rounded-[22px] bg-white shadow-[0_8px_28px_rgba(14,23,59,0.08)]">
                        <div class="relative flex w-[46%] shrink-0 items-end justify-center overflow-hidden">
                            <div class="absolute left-1/2 top-1/2 h-[120%] w-[120%] -translate-x-1/2 -translate-y-[42%] rounded-full bg-litus-navy/[0.06]"></div>
                            <img
                                src="{{ !empty($member['image']) ? (str_starts_with($member['image'], 'http') ? $member['image'] : asset($member['image'])) : ($samples[($i + 6) % count($samples)] ?? config('litus.hero_image')) }}"
                                alt="{{ $member['name'] }}"
                                class="relative z-[1] h-full max-h-[160px] w-auto max-w-[95%] object-contain object-bottom"
                                loading="lazy"
                            >
                        </div>
                        <div class="flex min-w-0 flex-1 flex-col justify-center py-5 pr-5 pl-2">
                            <div class="text-[0.82rem] font-black tracking-[0.04em] text-litus-navy uppercase">
                                {{ $member['name'] }}
                            </div>
                            <div class="mt-1 text-[0.78rem] text-litus-muted">{{ $member['role'] }}</div>
                            <a
                                href="{{ $member['linkedin'] ?? '#' }}"
                                aria-label="{{ $member['name'] }} on LinkedIn"
                                class="mt-3 inline-flex h-8 w-8 items-center justify-center rounded-full bg-litus-accent text-white no-underline transition-opacity hover:opacity-90"
                            >
                                <x-litus-icon name="linkedin" class="h-3.5 w-3.5" />
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- What Sets Us Apart --}}
    <section class="relative overflow-hidden bg-litus-bg py-[80px]">
        <div class="relative litus-container">
            <div class="overflow-hidden rounded-[28px] bg-white shadow-[0_16px_48px_rgba(14,23,59,0.1)] lg:grid lg:grid-cols-[minmax(0,1.05fr)_minmax(0,0.95fr)]">
                <div class="relative z-[1] px-8 py-10 md:px-12 md:py-14 lg:pr-6">
                    <div class="mb-3 text-[0.68rem] font-bold tracking-[0.22em] text-litus-accent">OUR SPECIALTIES</div>
                    <h2 class="mb-8 text-[clamp(1.9rem,3.5vw,2.6rem)] leading-[1.15] font-black text-litus-navy">
                        What Sets Us Apart
                    </h2>

                    <ul class="m-0 flex list-none flex-col gap-4 p-0">
                        @foreach(config('litus.specialties') as $point)
                            <li class="flex items-start gap-3.5">
                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-litus-accent text-white">
                                    <x-litus-icon name="check" class="h-3.5 w-3.5" />
                                </span>
                                <span class="text-[0.92rem] leading-[1.6] text-litus-muted">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relative min-h-[300px] sm:min-h-[360px] lg:min-h-[480px]">
                    <div class="specialty-slant-stripe absolute inset-0 hidden bg-litus-accent lg:block"></div>
                    <div class="specialty-slant-image absolute inset-0 overflow-hidden">
                        <img
                            src="{{ $about['specialty_image'] }}"
                            alt="Litus Maldives specialties"
                            class="absolute inset-0 h-full w-full object-cover"
                            loading="lazy"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Clients / Partners --}}
    <section class="relative overflow-hidden bg-litus-surface py-[70px]" data-clients-carousel>
        <div class="litus-container">
            <div class="mb-12 text-center">
                <div class="mb-3 text-[0.68rem] font-bold tracking-[0.22em] text-litus-accent">OUR CLIENTS</div>
                <h2 class="m-0 text-[clamp(1.7rem,3vw,2.3rem)] font-black text-litus-navy">Trusted By Leading Brands</h2>
                <div class="mx-auto mt-4 h-0.5 w-12 rounded-full bg-litus-accent"></div>
            </div>

            <div class="overflow-hidden">
                <div
                    class="flex snap-x snap-mandatory gap-5 overflow-x-auto scroll-smooth pb-2 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden"
                    data-clients-track
                >
                    @foreach(config('litus.partners') as $partner)
                        <div
                            class="flex h-[120px] w-[min(220px,70vw)] shrink-0 snap-center items-center justify-center rounded-2xl border border-litus-navy/6 bg-white px-6 shadow-[0_4px_18px_rgba(14,23,59,0.06)] transition-shadow duration-200 hover:shadow-[0_8px_28px_rgba(14,23,59,0.1)] md:h-[130px] md:w-[220px]"
                            data-clients-card
                        >
                            <img
                                src="{{ asset($partner['logo']) }}"
                                alt="{{ $partner['name'] }}"
                                title="{{ $partner['name'] }}"
                                class="max-h-16 w-auto max-w-full object-contain"
                                loading="lazy"
                            >
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-9 flex items-center justify-center gap-2.5" data-clients-dots>
                @foreach(config('litus.partners') as $i => $partner)
                    <button
                        type="button"
                        class="h-2.5 w-2.5 rounded-full transition-colors duration-200 {{ $i === 0 ? 'bg-litus-accent' : 'bg-litus-navy/15' }}"
                        data-clients-dot="{{ $i }}"
                        aria-label="Show {{ $partner['name'] }}"
                    ></button>
                @endforeach
            </div>
        </div>
    </section>

</div>
@endsection
