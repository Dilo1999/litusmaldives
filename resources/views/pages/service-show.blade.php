@extends('layouts.app')

@section('title', $service['title'])

@section('content')
<div class="overflow-x-clip bg-litus-bg">

    {{-- Hero --}}
    <section class="relative min-h-[320px] overflow-hidden pt-[72px] md:min-h-[380px]">
        <img
            src="{{ $service['image'] }}"
            alt="{{ $service['title'] }}"
            class="absolute inset-0 h-full w-full object-cover"
        >
        <div class="absolute inset-0 bg-gradient-to-r from-litus-navy/95 via-litus-navy/80 to-litus-navy/35"></div>

        <div class="relative litus-container flex min-h-[240px] items-center py-12 md:min-h-[300px] md:py-14">
            <div class="max-w-[720px]">
                <nav class="mb-5 flex flex-wrap items-center gap-2 text-[0.75rem]">
                    <a href="{{ route('home') }}" class="text-white/55 no-underline transition-colors hover:text-litus-accent">Home</a>
                    <span class="text-white/30">/</span>
                    <a href="{{ route('services') }}" class="text-white/55 no-underline transition-colors hover:text-litus-accent">Services</a>
                    <span class="text-white/30">/</span>
                    <span class="font-semibold text-white/90">{{ $service['title'] }}</span>
                </nav>

                <div class="mb-4 inline-flex items-center gap-2">
                    <div class="h-0.5 w-7 bg-litus-accent"></div>
                    <span class="text-[0.65rem] font-bold tracking-[0.2em] text-litus-accent uppercase">{{ $service['category'] }}</span>
                </div>

                <h1 class="m-0 text-[clamp(1.9rem,4vw,2.8rem)] leading-[1.15] font-black tracking-[-0.02em] text-white">
                    {{ $service['title'] }}
                </h1>

                <p class="mt-5 mb-0 max-w-[560px] text-[0.95rem] leading-[1.8] text-white/75">
                    {{ $service['desc'] }}
                </p>
            </div>
        </div>
    </section>

    {{-- Detail content --}}
    <section class="relative pb-16 pt-10 md:pb-20 md:pt-12">
        <div class="litus-container grid grid-cols-1 items-start gap-8 lg:grid-cols-[1fr_340px]">
            <div class="overflow-hidden rounded-[20px] bg-white shadow-[0_8px_32px_rgba(14,23,59,0.08)]">
                <div class="relative h-[220px] md:h-[280px]">
                    <img
                        src="{{ $service['image'] }}"
                        alt="{{ $service['title'] }}"
                        class="h-full w-full object-cover"
                    >
                    <div class="absolute bottom-4 left-4 flex h-12 w-12 items-center justify-center rounded-full border-[3px] border-white bg-litus-navy text-white shadow-[0_4px_12px_rgba(0,0,0,0.15)]">
                        <x-litus-icon :name="$service['icon']" class="h-5 w-5" />
                    </div>
                </div>

                <div class="px-7 py-8 md:px-10 md:py-10">
                    <h2 class="m-0 text-[1.35rem] font-black text-litus-navy">About this service</h2>
                    <div class="mt-3 mb-7 h-0.5 w-12 rounded-full bg-litus-accent"></div>

                    @foreach($service['body'] as $paragraph)
                        <p class="mb-4 text-[0.92rem] leading-[1.9] text-litus-muted last:mb-0">
                            {{ $paragraph }}
                        </p>
                    @endforeach

                    <h3 class="mt-9 mb-4 text-[1.05rem] font-bold text-litus-navy">What you can expect</h3>
                    <ul class="m-0 flex list-none flex-col gap-3.5 p-0">
                        @foreach($service['highlights'] as $point)
                            <li class="flex items-start gap-3">
                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-litus-accent text-white">
                                    <x-litus-icon name="check" class="h-3.5 w-3.5" />
                                </span>
                                <span class="text-[0.9rem] leading-[1.65] text-litus-muted">{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-10 flex flex-wrap gap-3">
                        <a
                            href="{{ route('contact') }}"
                            class="inline-flex items-center gap-2 rounded-lg bg-litus-accent px-6 py-3 text-[0.8rem] font-bold text-white no-underline transition-opacity hover:opacity-90"
                        >
                            Get a Quote
                            <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                        </a>
                        <a
                            href="{{ route('services') }}"
                            class="inline-flex items-center gap-2 rounded-lg border border-litus-navy/10 bg-litus-surface px-6 py-3 text-[0.8rem] font-bold text-litus-navy no-underline transition-colors hover:border-litus-accent/40 hover:text-litus-accent"
                        >
                            All Services
                        </a>
                    </div>
                </div>
            </div>

            <aside class="flex flex-col gap-5">
                <div class="rounded-[20px] bg-white p-6 shadow-[0_8px_32px_rgba(14,23,59,0.08)]">
                    <h3 class="m-0 text-[0.95rem] font-black text-litus-navy">Need this service?</h3>
                    <p class="mt-3 mb-5 text-[0.82rem] leading-[1.7] text-litus-muted">
                        Tell us about your cargo, timeline, and destination. Our team will respond with a clear plan and quote.
                    </p>
                    <a
                        href="{{ route('contact') }}"
                        class="inline-flex w-full items-center justify-center gap-2 rounded-lg bg-litus-navy px-5 py-3 text-[0.8rem] font-bold text-white no-underline transition-opacity hover:opacity-90"
                    >
                        Contact Us
                        <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
                    </a>
                </div>

                @if(count($others))
                    <div class="rounded-[20px] bg-white p-6 shadow-[0_8px_32px_rgba(14,23,59,0.08)]">
                        <h3 class="m-0 mb-4 text-[0.95rem] font-black text-litus-navy">Other services</h3>
                        <div class="flex flex-col gap-3">
                            @foreach($others as $other)
                                <a
                                    href="{{ route('services.show', $other['slug']) }}"
                                    class="group flex items-center gap-3 rounded-xl border border-litus-navy/6 p-3 no-underline transition-all hover:border-litus-accent/30 hover:shadow-[0_4px_16px_rgba(14,23,59,0.06)]"
                                >
                                    <div class="h-14 w-14 shrink-0 overflow-hidden rounded-lg">
                                        <img
                                            src="{{ $other['image'] }}"
                                            alt="{{ $other['title'] }}"
                                            class="h-full w-full object-cover"
                                            loading="lazy"
                                        >
                                    </div>
                                    <div class="min-w-0">
                                        <div class="truncate text-[0.8rem] font-bold text-litus-navy group-hover:text-litus-accent">
                                            {{ $other['title'] }}
                                        </div>
                                        <div class="mt-0.5 text-[0.68rem] text-litus-muted">{{ $other['category'] }}</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif
            </aside>
        </div>
    </section>

</div>
@endsection
