@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <x-page-hero
        title="About Us"
        subtitle="The leading logistics provider in the Maldives — since 2009."
        crumb="About Us"
        :image="config('litus.sample_images')[7]"
    />

    <section class="py-24 bg-litus-bg">
        <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div class="animate-on-scroll" data-animate="slideLeft" data-about-tabs>
                <x-section-label text="WHO WE ARE" />
                <h2 class="text-litus-primary font-black text-[clamp(2rem,4vw,2.8rem)] leading-tight mb-5">About LITUS Maldives</h2>
                <p class="text-litus-muted leading-relaxed text-[0.92rem] mb-4">
                    LITUS Maldives is a specialist freight management company with offices, warehousing, and an exceptional operations team providing end-to-end logistics services throughout the archipelago.
                </p>
                <p class="text-litus-muted leading-relaxed text-[0.92rem] mb-8">
                    We understand the unique challenges of operating in the Maldives — island geography, tidal schedules, customs regulations, and the demands of a world-class tourism industry. Our team is built to meet those challenges every day.
                </p>

                <div class="flex gap-2.5 mb-6">
                    <button type="button" data-tab-btn="vision" class="px-6 py-2.5 bg-litus-primary text-white border-2 border-litus-primary font-bold text-[0.68rem] tracking-[0.14em] rounded-sm cursor-pointer">OUR VISION</button>
                    <button type="button" data-tab-btn="mission" class="px-6 py-2.5 bg-transparent text-litus-primary border-2 border-litus-primary font-bold text-[0.68rem] tracking-[0.14em] rounded-sm cursor-pointer">OUR MISSION</button>
                </div>

                <p data-tab-panel="vision" class="text-litus-muted leading-relaxed text-[0.88rem] m-0">
                    To be the most trusted and innovative logistics partner in the Indian Ocean region, enabling commerce and connectivity across every inhabited island of the Maldives.
                </p>
                <p data-tab-panel="mission" class="text-litus-muted leading-relaxed text-[0.88rem] m-0 is-hidden">
                    To deliver dependable, efficient, and cost-effective freight solutions that empower businesses and communities in the Maldives through world-class service standards.
                </p>
            </div>

            <div class="relative animate-on-scroll" data-animate="slideRight">
                <x-litus-sample-img :index="1" alt="About Litus" class="w-full h-[460px] object-cover rounded-md" />
                <div class="absolute -bottom-5 -left-5 px-7 py-5 bg-white rounded">
                    <div class="text-litus-primary font-black text-4xl leading-none">15+</div>
                    <div class="text-litus-primary/70 text-[0.6rem] tracking-[0.16em] mt-1">YEARS OF EXCELLENCE</div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-litus-primary">
        <div class="max-w-7xl mx-auto px-7">
            <div class="text-center mb-15">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <div class="w-7 h-0.5 bg-white"></div>
                    <span class="text-white font-bold text-[0.62rem] tracking-[0.24em]">OUR PEOPLE</span>
                    <div class="w-7 h-0.5 bg-white"></div>
                </div>
                <h2 class="text-white font-black text-[clamp(2rem,4vw,2.6rem)] mb-3.5">Meet Our Team</h2>
                <p class="text-white/42 max-w-lg mx-auto text-[0.88rem] leading-relaxed">
                    Our dedicated professionals bring decades of combined logistics and maritime expertise to every shipment.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-7 mb-14">
                @foreach(config('litus.team') as $i => $member)
                    <div class="text-center p-8 bg-white/4 rounded-md border border-white/8 animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                        <div class="w-[88px] h-[88px] rounded-full overflow-hidden mx-auto mb-4 border-[3px] border-white/40">
                            <x-litus-sample-img :index="$i + 2" alt="{{ $member['name'] }}" class="w-full h-full object-cover" />
                        </div>
                        <div class="text-white font-bold text-[0.88rem]">{{ $member['name'] }}</div>
                        <div class="text-white/60 text-[0.72rem] mt-1 tracking-wide">{{ $member['role'] }}</div>
                    </div>
                @endforeach
            </div>

            <div class="border-t border-white/8 pt-12">
                <h3 class="text-white font-bold text-center mb-8">Meet Our Key Members</h3>
                <div class="flex justify-center gap-12 flex-wrap">
                    @foreach(config('litus.key_members') as $member)
                        <div class="text-center">
                            <div class="w-[76px] h-[76px] rounded-full overflow-hidden mx-auto mb-3 border-2 border-white/30">
                                <x-litus-sample-img :index="$loop->index + 6" alt="{{ $member['name'] }}" class="w-full h-full object-cover" />
                            </div>
                            <div class="text-white/85 font-semibold text-[0.82rem]">{{ $member['name'] }}</div>
                            <div class="text-white/50 text-[0.68rem] mt-0.5">{{ $member['role'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-litus-bg">
        <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 lg:grid-cols-2 gap-18 items-center">
            <div>
                <x-section-label text="WHAT WE EXCEL AT" />
                <h2 class="text-litus-primary font-black text-[clamp(2rem,3.5vw,2.6rem)] leading-tight mb-8">Our Specialties</h2>
                <ul class="list-none p-0 m-0 flex flex-col gap-3.5">
                    @foreach(config('litus.specialties') as $spec)
                        <li class="flex items-start gap-3">
                            <div class="w-1.5 h-1.5 rounded-full bg-litus-primary shrink-0 mt-2"></div>
                            <span class="text-litus-muted text-[0.85rem] leading-relaxed">{{ $spec }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="relative">
                <x-litus-sample-img :index="8" alt="Specialties" class="w-full h-[460px] object-cover rounded-md" />
                <div class="absolute bottom-5 right-5 px-5 py-4 bg-litus-primary/92 rounded border border-white/30">
                    <div class="text-white font-black text-2xl tracking-[0.2em]">LITUS</div>
                    <div class="text-white/50 text-[0.65rem] tracking-[0.18em]">MALDIVES</div>
                </div>
            </div>
        </div>
    </section>

    <x-home.partners />
@endsection
