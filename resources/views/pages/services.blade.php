@extends('layouts.app')

@section('title', 'Services')

@section('content')
@php
    $page = config('litus.services_page');
    $services = config('litus.services');
    $cards = collect($services)->where('wide', false)->values();
    $wide = collect($services)->firstWhere('wide', true);
@endphp

<div class="overflow-x-clip bg-white">

    {{-- Hero --}}
    <section class="relative min-h-[300px] overflow-hidden pt-[72px] md:min-h-[330px]">
        <img
            src="{{ $page['hero_image'] }}"
            alt="Litus Maldives services"
            class="absolute inset-0 h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-litus-navy/95 via-litus-navy/80 to-litus-navy/30"></div>

        <div class="relative litus-container flex min-h-[220px] items-center py-12 md:min-h-[250px] md:py-14">
            <div class="max-w-[650px]">
                <div class="mb-3 text-[0.75rem] font-bold tracking-[0.08em] text-litus-accent uppercase">
                    {{ $page['eyebrow'] }}
                </div>
                <h1 class="m-0 text-[clamp(2rem,4.5vw,2.75rem)] leading-[1.18] font-black tracking-[-0.02em] text-white">
                    {{ $page['h1'] }}
                    <span class="block">{{ $page['h1_accent'] }}</span>
                </h1>
                <div class="mt-5 mb-5 h-[3px] w-[55px] rounded-full bg-litus-accent"></div>
                <p class="m-0 max-w-[580px] text-[0.9rem] leading-[1.8] text-white/80">
                    {{ $page['intro'] }}
                </p>
            </div>
        </div>
    </section>

    {{-- Service cards --}}
    <section class="relative bg-[radial-gradient(circle_at_100%_30%,rgba(6,182,212,0.08)_0,transparent_18%)] py-12 md:py-14" id="services">
        <div class="litus-container">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 xl:grid-cols-3">
                @foreach($cards as $service)
                    <article class="group overflow-hidden rounded-[9px] bg-white shadow-[0_5px_25px_rgba(0,28,70,0.10)] transition-all duration-300 hover:-translate-y-1.5 hover:shadow-[0_12px_35px_rgba(0,45,100,0.16)]">
                        <div class="relative h-[210px]">
                            <img
                                src="{{ $service['image'] }}"
                                alt="{{ $service['title'] }}"
                                class="h-full w-full object-cover"
                                loading="lazy"
                            >
                            <div class="absolute -bottom-[27px] left-[27px] flex h-14 w-14 items-center justify-center rounded-full border-[3px] border-white bg-litus-navy text-white shadow-[0_4px_10px_rgba(0,0,0,0.15)]">
                                <x-litus-icon :name="$service['icon']" class="h-5 w-5" />
                            </div>
                        </div>

                        <div class="flex min-h-[250px] flex-col px-[27px] pt-10 pb-[27px]">
                            <h3 class="m-0 text-[1.05rem] leading-[1.3] font-bold text-litus-navy">
                                {{ $service['title'] }}
                            </h3>
                            <div class="mt-1.5 mb-4 text-[0.7rem] text-litus-muted">{{ $service['category'] }}</div>
                            <p class="mb-5 text-[0.78rem] leading-[1.8] text-litus-muted">
                                {{ $service['desc'] }}
                            </p>
                            <a href="{{ route('services.show', $service['slug']) }}" class="mt-auto inline-flex items-center gap-2 text-[0.75rem] font-bold text-litus-accent no-underline transition-opacity hover:opacity-80">
                                View Details
                                <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            @if($wide)
                <article class="mt-6 grid overflow-hidden rounded-[9px] bg-white shadow-[0_5px_25px_rgba(0,28,70,0.10)] lg:grid-cols-[34%_66%]">
                    <div class="relative min-h-[235px]">
                        <img
                            src="{{ $wide['image'] }}"
                            alt="{{ $wide['title'] }}"
                            class="absolute inset-0 h-full w-full object-cover"
                            loading="lazy"
                        >
                        <div class="absolute bottom-5 left-[27px] flex h-14 w-14 items-center justify-center rounded-full border-[3px] border-white bg-litus-navy text-white shadow-[0_4px_10px_rgba(0,0,0,0.15)]">
                            <x-litus-icon :name="$wide['icon']" class="h-5 w-5" />
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-7 py-9 md:px-9">
                        <h3 class="m-0 text-[1.15rem] font-bold text-litus-navy">{{ $wide['title'] }}</h3>
                        <div class="mt-1.5 mb-3 text-[0.7rem] text-litus-muted">{{ $wide['category'] }}</div>
                        <p class="mb-4 max-w-[700px] text-[0.78rem] leading-[1.8] text-litus-muted">
                            {{ $wide['desc'] }}
                        </p>
                        <a href="{{ route('services.show', $wide['slug']) }}" class="inline-flex items-center gap-2 text-[0.75rem] font-bold text-litus-accent no-underline transition-opacity hover:opacity-80">
                            View Details
                            <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                        </a>
                    </div>
                </article>
            @endif
        </div>
    </section>

    {{-- Corporate banner --}}
    <section class="py-6 md:py-8">
        <div class="litus-container">
            <div class="relative flex min-h-[300px] items-center overflow-hidden rounded-[9px]">
                <img
                    src="{{ $page['corporate']['image'] }}"
                    alt="Corporate logistics"
                    class="absolute inset-0 h-full w-full object-cover"
                    loading="lazy"
                >
                <div class="absolute inset-0 bg-gradient-to-r from-litus-navy/95 via-litus-navy/85 to-litus-navy/25"></div>

                <div class="relative z-[1] w-full max-w-[520px] px-7 py-10 md:px-11 md:py-12">
                    <div class="mb-3 text-[0.75rem] font-bold tracking-[0.08em] text-litus-accent uppercase">
                        {{ $page['corporate']['eyebrow'] }}
                    </div>
                    <h2 class="m-0 max-w-[400px] text-[clamp(1.5rem,3vw,1.9rem)] leading-[1.25] font-black text-white">
                        {{ $page['corporate']['title'] }}
                    </h2>
                    <p class="mt-4 mb-6 max-w-[400px] text-[0.8rem] leading-[1.7] text-white/70">
                        {{ $page['corporate']['text'] }}
                    </p>
                    <a
                        href="{{ route($page['corporate']['cta_route']) }}"
                        class="inline-flex items-center gap-2 rounded-[5px] bg-litus-accent px-6 py-3 text-[0.75rem] font-semibold text-white no-underline transition-opacity hover:opacity-90"
                    >
                        {{ $page['corporate']['cta'] }}
                        <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>

                <div class="absolute right-5 bottom-5 z-[1] flex w-[min(305px,calc(100%-2.5rem))] items-center gap-5 rounded-[7px] bg-litus-accent px-6 py-6 text-white shadow-[0_10px_30px_rgba(0,0,0,0.15)] md:top-[85px] md:right-9 md:bottom-auto">
                    <x-litus-icon name="shield" class="h-9 w-9 shrink-0" />
                    <div>
                        <h3 class="m-0 text-[1rem] leading-[1.4] font-bold">
                            {{ $page['corporate']['badge_title'] }}
                        </h3>
                        <p class="mt-1.5 mb-0 text-[0.7rem] text-white/90">
                            {{ $page['corporate']['badge_text'] }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Features + gallery --}}
    <section class="pb-12 md:pb-14" id="gallery">
        <div class="litus-container">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-[40%_60%]">
                <div class="grid grid-cols-2 gap-2">
                    @foreach($page['features'] as $feature)
                        <div class="flex min-h-[140px] flex-col items-center justify-center rounded-[7px] bg-white px-3 py-4 text-center shadow-[0_4px_18px_rgba(0,30,70,0.09)]">
                            <x-litus-icon :name="$feature['icon']" class="mb-3 h-7 w-7 text-litus-accent" />
                            <span class="text-[0.7rem] leading-[1.4] font-semibold whitespace-pre-line text-litus-navy">
                                {{ $feature['label'] }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <div class="grid grid-cols-2 gap-2 sm:grid-cols-3 md:grid-cols-5">
                    @foreach($page['gallery'] as $image)
                        <img
                            src="{{ $image }}"
                            alt="Litus operations"
                            class="h-[88px] w-full rounded-[6px] object-cover"
                            loading="lazy"
                        >
                    @endforeach
                </div>
            </div>

            <div class="mt-6 text-center">
                <a
                    href="{{ route('gallery') }}"
                    class="inline-flex items-center gap-2 rounded-[5px] bg-litus-accent px-7 py-3 text-[0.75rem] font-semibold text-white no-underline transition-opacity hover:opacity-90"
                >
                    View Gallery
                    <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                </a>
            </div>
        </div>
    </section>

</div>
@endsection
