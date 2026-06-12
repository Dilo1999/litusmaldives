@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <x-page-hero
        title="Leading Logistics Provider in Maldives"
        subtitle="Get in touch — we respond within 2 business hours."
        crumb="Contact"
        :image="config('litus.sample_images')[9]"
    />

    <section class="bg-litus-primary">
        <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-px">
            @foreach([
                ['icon' => 'map-pin', 'title' => 'Our Office', 'body' => config('litus.contact.address')],
                ['icon' => 'phone', 'title' => 'Phone', 'body' => implode("\n", config('litus.contact.phones'))],
                ['icon' => 'mail', 'title' => 'Email', 'body' => config('litus.contact.email')],
                ['icon' => 'clock', 'title' => 'Working Hours', 'body' => config('litus.contact.hours')],
            ] as $i => $card)
                <div @class(['p-8 text-center', 'bg-litus-primary' => $i % 2 === 0, 'bg-litus-primary/8' => $i % 2 !== 0])>
                    <div class="w-12 h-12 rounded-full bg-white/10 flex items-center justify-center mx-auto mb-3.5 text-white/70">
                        <x-litus-icon :name="$card['icon']" class="w-5 h-5" />
                    </div>
                    <div class="text-white font-bold text-[0.82rem] mb-2">{{ $card['title'] }}</div>
                    <div class="text-white/45 text-[0.8rem] leading-relaxed whitespace-pre-line">{{ $card['body'] }}</div>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-24 bg-litus-bg">
        <div class="max-w-7xl mx-auto px-7 grid grid-cols-1 lg:grid-cols-2 gap-18">
            <div>
                <x-section-label text="OUR LOCATION" />
                <h2 class="text-litus-primary font-black text-3xl leading-tight mb-5">Find Us in Malé</h2>
                <p class="text-litus-muted text-[0.88rem] leading-relaxed mb-7">
                    Ma. Dydum, 2nd Floor, Buruzu Magu, 20340, Malé, Republic of Maldives. Our offices are open Sunday–Thursday, 8:00 AM to 5:00 PM.
                </p>
                <div class="rounded-md overflow-hidden border border-litus-primary/10">
                    <iframe
                        title="Litus Maldives Location"
                        src="{{ config('litus.contact.map_embed') }}"
                        class="w-full h-[360px] border-0 block"
                        loading="lazy"
                    ></iframe>
                </div>
            </div>

            <div class="bg-white rounded-lg border border-litus-primary/8 p-11 shadow-[0_8px_48px_rgba(11,36,118,0.07)]">
                <x-section-label text="CONTACT US" />
                <h3 class="text-litus-primary font-black text-2xl mb-2">Have Questions?<br>Get in Touch!</h3>
                <p class="text-litus-muted text-[0.85rem] leading-relaxed mb-8">
                    We handle all formalities for your imports and exports. We work with all international stations to guarantee your load safely reaches without any delays.
                </p>
                <x-contact-form />
            </div>
        </div>
    </section>

    <div class="h-80">
        <iframe
            title="Litus Maldives Map"
            src="{{ config('litus.contact.map_full') }}"
            class="w-full h-full border-0 block"
            loading="lazy"
        ></iframe>
    </div>
@endsection
