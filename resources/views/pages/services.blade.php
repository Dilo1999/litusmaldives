@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <x-page-hero
        title="Our Services"
        subtitle="End-to-end logistics solutions across every atoll of the Maldives."
        crumb="Services"
        :image="config('litus.sample_images')[2]"
    />

    <section class="pt-20 bg-litus-bg">
        <div class="max-w-7xl mx-auto px-7 text-center">
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="w-7 h-0.5 bg-litus-primary"></div>
                <span class="text-litus-primary font-bold text-[0.62rem] tracking-[0.24em]">WHAT WE DO</span>
                <div class="w-7 h-0.5 bg-litus-primary"></div>
            </div>
            <h2 class="text-litus-primary font-black text-[clamp(2rem,4vw,2.8rem)] leading-tight mb-5">Our Services Make Your Work More Productive</h2>
            <p class="text-litus-muted max-w-xl mx-auto leading-relaxed text-[0.93rem]">
                As the leading logistics provider in the Maldives, we specialise in a complete suite of freight and supply chain solutions designed for the unique geography of the archipelago.
            </p>
        </div>
    </section>

    <section class="py-16 pb-24 bg-litus-bg">
        <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
            @foreach(config('litus.services') as $i => $service)
                <div class="group bg-white border border-litus-primary/8 rounded-md overflow-hidden cursor-pointer hover:border-litus-primary hover:-translate-y-1 hover:shadow-[0_12px_40px_rgba(11,36,118,0.12)] transition-all animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.06 }}">
                    <div class="h-40 overflow-hidden relative">
                        <x-litus-sample-img :index="$i" alt="{{ $service['title'] }}" class="w-full h-full object-cover brightness-65" />
                        <div class="absolute inset-x-0 bottom-0 h-3/5 bg-linear-to-t from-litus-primary/90 to-transparent"></div>
                        <div class="absolute bottom-3.5 left-4 w-10 h-10 bg-litus-primary rounded-sm flex items-center justify-center text-white">
                            <x-litus-icon :name="$service['icon']" class="w-[18px] h-[18px]" />
                        </div>
                    </div>
                    <div class="p-5 pb-6">
                        <h3 class="text-litus-primary font-extrabold text-[0.95rem] leading-snug mb-3">{{ $service['title'] }}</h3>
                        <p class="text-litus-muted text-[0.82rem] leading-relaxed m-0">{{ $service['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-20 bg-litus-primary">
        <div class="max-w-2xl mx-auto px-7 text-center">
            <h2 class="text-white font-black text-3xl mb-4">We Are the Best at Total Logistics Solutions</h2>
            <p class="text-white/50 leading-relaxed mb-9">Trusted by leading resorts, businesses, and government entities across the Maldives.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-10 py-4 bg-litus-primary text-white font-bold text-[0.72rem] tracking-[0.12em] rounded-sm no-underline hover:opacity-85 transition-opacity">
                GET A QUOTE
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>
    </section>
@endsection
