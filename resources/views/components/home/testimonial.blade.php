@php($testimonial = config('litus.testimonial'))

<section class="bg-white py-[50px]">
    <div class="mx-auto max-w-[820px] px-7 text-center">
        <div class="mb-8">
            <img
                src="{{ $testimonial['image'] }}"
                alt="{{ $testimonial['name'] }}"
                class="mx-auto block h-[88px] w-[88px] rounded-full border-[3px] border-litus-surface object-cover shadow-[0_4px_20px_rgba(14,23,59,0.12)]"
                loading="lazy"
            >
        </div>

        <p class="mb-8 text-[clamp(1rem,2vw,1.15rem)] leading-[1.85] font-medium text-litus-navy">
            {{ $testimonial['quote'] }}
        </p>

        <div class="mb-5 font-serif text-[2.2rem] leading-none text-litus-navy">&rdquo;&rdquo;</div>

        <div class="mb-1 text-[0.9rem] font-extrabold text-litus-navy">{{ $testimonial['name'] }}</div>
        <div class="text-[0.82rem] text-litus-muted">{{ $testimonial['role'] }}</div>
    </div>
</section>
