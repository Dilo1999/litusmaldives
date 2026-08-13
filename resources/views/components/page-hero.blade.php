@props([
    'title',
    'subtitle' => null,
    'eyebrow' => null,
    'image' => config('litus.hero_image'),
    'cta' => null,
    'ctaRoute' => 'contact',
])

<section class="relative h-[clamp(480px,55vh,620px)] overflow-hidden">
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 h-full w-full object-cover">
    <div class="page-hero-overlay absolute inset-0"></div>

    <div class="absolute inset-0 flex items-center pt-[68px]">
        <div class="mx-auto w-full max-w-[1320px] px-6 lg:px-9">
            <div class="max-w-[640px] animate-on-scroll" data-animate="fadeInUp">
                @if($eyebrow)
                    <div class="mb-5 inline-flex items-center gap-2">
                        <div class="h-0.5 w-7 bg-litus-accent"></div>
                        <span class="text-[0.65rem] font-bold tracking-[0.22em] text-litus-accent">{{ $eyebrow }}</span>
                    </div>
                @endif

                <h1 class="m-0 text-[clamp(2.4rem,6vw,4.8rem)] leading-[1.08] font-black tracking-[-0.02em] text-white">
                    {{ $title }}
                </h1>

                @if($subtitle)
                    <p class="mt-6 mb-0 max-w-[480px] text-[1.05rem] leading-[1.78] text-white/62">
                        {{ $subtitle }}
                    </p>
                @endif

                @if($cta)
                    <div class="mt-9">
                        <x-arrow-link :href="route($ctaRoute)" variant="accent" :label="$cta" />
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
