@extends('layouts.app')

@section('title', 'Career')

@section('content')
    <x-page-hero
        title="Career"
        subtitle="Join the LITUS Maldives team and build your career in logistics."
        crumb="Career"
    />

    <section class="py-24 bg-white">
        <div class="litus-container max-w-3xl text-center">
            <p class="text-litus-muted leading-relaxed text-[0.95rem] mb-8">
                LITUS Maldives is always looking for talented individuals passionate about logistics and supply chain excellence. Send your CV to
                <a href="mailto:{{ config('litus.contact.email') }}" class="text-litus-primary font-semibold no-underline hover:underline">{{ config('litus.contact.email') }}</a>
                to explore current opportunities.
            </p>
            <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-9 py-3.5 bg-litus-primary text-white font-bold text-[0.7rem] tracking-[0.14em] rounded-sm no-underline hover:bg-litus-primary-dark transition-colors uppercase">
                Contact Us
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>
    </section>
@endsection
