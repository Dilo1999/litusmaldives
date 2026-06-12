@props([
    'title',
    'subtitle' => null,
    'crumb',
    'image' => config('litus.hero_image'),
])

<section class="relative h-[360px] flex items-center">
    <img src="{{ $image }}" alt="{{ $title }}" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-linear-to-br from-litus-primary/96 to-litus-primary/75"></div>
    <div class="absolute left-0 top-0 bottom-0 w-1 bg-linear-to-b from-white to-transparent"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-7 w-full pt-16">
        <div class="flex items-center gap-2 mb-5 text-[0.7rem]">
            <a href="{{ route('home') }}" class="text-white/40 hover:text-white/70 transition-colors">Home</a>
            <span class="text-white/20">/</span>
            <span class="text-white font-semibold">{{ $crumb }}</span>
        </div>
        <h1 class="text-white font-black text-[clamp(2.2rem,5vw,3.6rem)] leading-tight mb-3.5">{{ $title }}</h1>
        @if($subtitle)
            <p class="text-white/55 text-[0.95rem]">{{ $subtitle }}</p>
        @endif
    </div>
</section>
