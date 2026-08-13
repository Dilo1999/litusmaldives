@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="bg-litus-bg">
        <x-page-hero
            eyebrow="MALDIVES' LEADING LOGISTICS COMPANY"
            title="About Us"
            subtitle="The leading logistics provider in the Maldives — since 2009."
            :image="config('litus.sample_images')[0]"
            cta="Our Services"
            ctaRoute="services"
        />

        <section class="relative px-0 pt-16">
            <div class="litus-orb -left-20 top-0 h-[360px] w-[360px] opacity-45"></div>
            <div class="relative litus-container">
                <div class="litus-card rounded-[28px] px-8 py-12 md:px-14 md:py-[52px]">
                    <div class="grid grid-cols-1 items-center gap-16 lg:grid-cols-2 lg:gap-[72px]">
                        <div data-about-tabs>
                            <x-section-badge text="WHO WE ARE" />
                            <h2 class="mb-5 text-[clamp(1.8rem,3.5vw,2.4rem)] leading-[1.15] font-black text-litus-navy">About LITUS Maldives</h2>
                            <p class="mb-4 text-[0.92rem] leading-[1.88] text-litus-muted">
                                LITUS Maldives is a specialist freight management company with offices, warehousing, and an exceptional operations team providing end-to-end logistics services throughout the archipelago.
                            </p>
                            <p class="mb-7 text-[0.92rem] leading-[1.88] text-litus-muted">
                                We understand the unique challenges of operating in the Maldives — island geography, tidal schedules, customs regulations, and the demands of a world-class tourism industry.
                            </p>

                            <div class="mb-6 flex gap-2.5">
                                <button type="button" data-tab-btn="vision" class="cursor-pointer rounded-full border-0 bg-litus-navy px-[22px] py-2.5 text-[0.72rem] font-bold text-white shadow-[0_4px_14px_rgba(14,23,59,0.2)]">Our Vision</button>
                                <button type="button" data-tab-btn="mission" class="cursor-pointer rounded-full border-0 bg-litus-surface px-[22px] py-2.5 text-[0.72rem] font-bold text-litus-muted">Our Mission</button>
                            </div>

                            <p data-tab-panel="vision" class="m-0 text-[0.88rem] leading-[1.85] text-litus-muted">
                                To be the most trusted and innovative logistics partner in the Indian Ocean region, enabling commerce and connectivity across every inhabited island of the Maldives.
                            </p>
                            <p data-tab-panel="mission" class="is-hidden m-0 text-[0.88rem] leading-[1.85] text-litus-muted">
                                To deliver dependable, efficient, and cost-effective freight solutions that empower businesses and communities in the Maldives through world-class service standards.
                            </p>
                        </div>

                        <div class="relative">
                            <div class="overflow-hidden rounded-[20px]">
                                <x-litus-sample-img :index="1" alt="About Litus" class="block h-[400px] w-full object-cover" />
                            </div>
                            <div class="absolute -bottom-4 -left-4 rounded-2xl bg-litus-accent px-6 py-[18px] shadow-[0_8px_24px_rgba(6,182,212,0.35)]">
                                <div class="text-[1.8rem] leading-none font-black text-white">15+</div>
                                <div class="mt-1 text-[0.6rem] tracking-[0.14em] text-white/80">YEARS</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-10 pb-20">
            <div class="relative litus-container">
                <div class="litus-card rounded-[28px] px-8 py-12 md:px-14 md:py-[52px]">
                    <div class="mb-12 text-center">
                        <x-section-badge text="OUR PEOPLE" surface="white" class="justify-center" />
                        <h2 class="mb-3 text-[clamp(1.8rem,3.5vw,2.4rem)] font-black text-litus-navy">Meet Our Team</h2>
                        <p class="mx-auto max-w-lg text-[0.88rem] leading-relaxed text-litus-muted">
                            Our dedicated professionals bring decades of combined logistics and maritime expertise to every shipment.
                        </p>
                    </div>

                    <div class="mb-12 grid grid-cols-1 gap-7 sm:grid-cols-2 lg:grid-cols-4">
                        @foreach(config('litus.team') as $i => $member)
                            <div class="rounded-[20px] border border-litus-navy/8 bg-litus-surface/50 p-8 text-center">
                                <div class="mx-auto mb-4 h-[88px] w-[88px] overflow-hidden rounded-full border-[3px] border-white">
                                    <x-litus-sample-img :index="$i + 2" :alt="$member['name']" class="h-full w-full object-cover" />
                                </div>
                                <div class="text-[0.88rem] font-bold text-litus-navy">{{ $member['name'] }}</div>
                                <div class="mt-1 text-[0.72rem] tracking-wide text-litus-muted">{{ $member['role'] }}</div>
                            </div>
                        @endforeach
                    </div>

                    <div class="border-t border-litus-navy/8 pt-10">
                        <h3 class="mb-8 text-center font-bold text-litus-navy">Meet Our Key Members</h3>
                        <div class="flex flex-wrap justify-center gap-12">
                            @foreach(config('litus.key_members') as $member)
                                <div class="text-center">
                                    <div class="mx-auto mb-3 h-[76px] w-[76px] overflow-hidden rounded-full border-2 border-litus-accent/30">
                                        <x-litus-sample-img :index="$loop->index + 6" :alt="$member['name']" class="h-full w-full object-cover" />
                                    </div>
                                    <div class="text-[0.82rem] font-semibold text-litus-navy">{{ $member['name'] }}</div>
                                    <div class="mt-0.5 text-[0.68rem] text-litus-muted">{{ $member['role'] }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-[50px]">
            <div class="litus-container">
                <div class="litus-card rounded-3xl px-8 py-11 md:px-[52px]">
                    <div class="mb-9 text-center">
                        <span class="text-[0.62rem] font-bold tracking-[0.22em] text-litus-accent">TRUSTED BY LEADING BRANDS</span>
                        <h2 class="mt-2.5 mb-0 text-[1.7rem] font-black text-litus-navy">We've Partnered With</h2>
                    </div>
                    <div class="flex flex-wrap items-center justify-center gap-x-10 gap-y-6 md:gap-x-[52px]">
                        @foreach(config('litus.partners') as $partner)
                            <img
                                src="{{ asset($partner['logo']) }}"
                                alt="{{ $partner['name'] }}"
                                title="{{ $partner['name'] }}"
                                class="h-16 w-auto max-w-[200px] cursor-pointer object-contain transition-all duration-200 ease-out hover:scale-105 hover:-translate-y-0.5 hover:drop-shadow-md md:h-20 md:max-w-[260px]"
                                loading="lazy"
                            >
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
