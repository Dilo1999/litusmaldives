@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="bg-litus-bg">
        <x-page-hero
            eyebrow="GET IN TOUCH WITH US"
            title="Contact Us"
            subtitle="Get in touch — we respond within 2 business hours."
            :image="config('litus.sample_images')[0]"
        />

        <section class="px-7 pt-8">
            <div class="mx-auto grid max-w-[1260px] grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach([
                    ['icon' => 'map-pin', 'title' => 'Our Office', 'body' => config('litus.contact.address')],
                    ['icon' => 'phone', 'title' => 'Phone', 'body' => implode("\n", config('litus.contact.phones'))],
                    ['icon' => 'mail', 'title' => 'Email', 'body' => config('litus.contact.email')],
                    ['icon' => 'clock', 'title' => 'Working Hours', 'body' => config('litus.contact.hours')],
                ] as $card)
                    <div class="litus-card rounded-[20px] px-[22px] py-6 text-center">
                        <div class="mx-auto mb-3.5 flex h-12 w-12 items-center justify-center rounded-full bg-litus-surface">
                            <x-litus-icon :name="$card['icon']" class="h-5 w-5 text-litus-accent" />
                        </div>
                        <div class="mb-2 text-[0.82rem] font-bold text-litus-navy">{{ $card['title'] }}</div>
                        <div class="text-[0.78rem] leading-[1.65] whitespace-pre-line text-litus-muted">{{ $card['body'] }}</div>
                    </div>
                @endforeach
            </div>
        </section>

        <section class="px-7 pt-7 pb-20">
            <div class="mx-auto grid max-w-[1260px] grid-cols-1 gap-6 lg:grid-cols-[1fr_1.1fr]">
                <div class="litus-card overflow-hidden rounded-3xl">
                    <iframe
                        title="Litus Maldives Location"
                        src="{{ config('litus.contact.map_embed') }}"
                        class="block min-h-[320px] w-full flex-1 border-0"
                        loading="lazy"
                    ></iframe>
                    <div class="px-6 py-5">
                        <div class="mb-1 text-[0.88rem] font-bold text-litus-navy">Our Office Location</div>
                        <div class="text-[0.8rem] text-litus-muted">{{ config('litus.contact.address') }}, Maldives</div>
                    </div>
                </div>

                <div class="litus-card rounded-3xl p-8 md:p-10">
                    <x-section-badge text="CONTACT US" />
                    <h2 class="mb-2 text-[1.5rem] leading-[1.2] font-black text-litus-navy">
                        Have Questions?<br>
                        Get in Touch!
                    </h2>
                    <p class="mb-7 text-[0.83rem] leading-[1.72] text-litus-muted">
                        We handle all formalities for your imports and exports, working with all international stations to guarantee your load arrives safely.
                    </p>
                    <x-contact-form variant="soft" />
                </div>
            </div>
        </section>
    </div>
@endsection
