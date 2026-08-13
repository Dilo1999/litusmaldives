@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="bg-litus-bg">
        <x-page-hero
            eyebrow="END-TO-END FREIGHT SOLUTIONS"
            title="Our Services"
            subtitle="End-to-end logistics solutions across every atoll of the Maldives."
            :image="config('litus.sample_images')[0]"
            cta="Get a Quote"
            ctaRoute="contact"
        />

        <section class="pt-14">
            <div class="litus-container text-center">
                <x-section-badge text="WHAT WE DO" surface="white" class="justify-center" />
                <h2 class="mb-4 text-[clamp(1.8rem,3.5vw,2.6rem)] leading-[1.15] font-black text-litus-navy">
                    Our Services Make Your Work More Productive
                </h2>
                <p class="mx-auto max-w-[620px] text-[0.93rem] leading-[1.88] text-litus-muted">
                    As the leading logistics provider in the Maldives, we specialise in a complete suite of freight and supply chain solutions designed for the unique geography of the archipelago.
                </p>
            </div>
        </section>

        <section class="pt-11 pb-20">
            <div class="relative litus-container grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach(config('litus.services') as $i => $service)
                    <div class="litus-card group overflow-hidden transition-all duration-250 hover:-translate-y-1.5 hover:shadow-[0_12px_40px_rgba(6,182,212,0.14),0_2px_8px_rgba(14,23,59,0.06)]">
                        <div class="relative h-[150px] overflow-hidden">
                            <x-litus-sample-img :index="$i" :alt="$service['title']" class="h-full w-full object-cover" />
                            <div class="absolute inset-x-0 bottom-0 h-3/5 bg-linear-to-t from-litus-navy/88 to-transparent"></div>
                            <div class="absolute bottom-3.5 left-4 flex h-[38px] w-[38px] items-center justify-center rounded-[10px] bg-litus-accent text-white">
                                <x-litus-icon :name="$service['icon']" class="h-[17px] w-[17px]" />
                            </div>
                        </div>
                        <div class="px-5 pt-5 pb-[22px]">
                            <h3 class="mb-2.5 text-[0.92rem] font-extrabold text-litus-navy">{{ $service['title'] }}</h3>
                            <p class="mb-4 text-[0.8rem] leading-[1.75] text-litus-muted">{{ $service['desc'] }}</p>
                            <div class="flex items-center gap-1 text-[0.72rem] font-bold text-litus-accent">
                                Learn More
                                <x-litus-icon name="arrow-right" class="h-3 w-3" />
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection
