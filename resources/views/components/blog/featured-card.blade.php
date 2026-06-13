@props(['post', 'featured' => false])

<a
    href="{{ route('blog.show', $post['slug']) }}"
    data-blog-featured
    data-slug="{{ $post['slug'] }}"
    data-tag="{{ $post['tag'] }}"
    {{ $attributes->merge(['class' => 'group mb-7 block no-underline']) }}
>
    <div class="litus-card grid overflow-hidden rounded-3xl transition-all duration-250 group-hover:-translate-y-1 group-hover:shadow-[0_12px_40px_rgba(6,182,212,0.14),0_2px_8px_rgba(14,23,59,0.06)] md:grid-cols-[1.3fr_1fr]">
        <div class="h-[360px] overflow-hidden">
            <img
                src="{{ $post['hero'] }}"
                alt="{{ $post['title'] }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105"
                loading="lazy"
            >
        </div>
        <div class="flex flex-col justify-center px-10 py-10">
            <div class="mb-[18px] flex gap-2.5">
                <span class="rounded-full bg-litus-accent px-3.5 py-0.5 text-[0.58rem] font-bold tracking-[0.12em] text-white">{{ $post['tag'] }}</span>
                <span class="text-[0.75rem] text-[#b0bcd0]">{{ $post['date'] }}</span>
            </div>
            <h2 class="mb-3.5 text-[1.35rem] leading-[1.3] font-black text-litus-navy">{{ $post['title'] }}</h2>
            <p class="mb-6 text-[0.88rem] leading-[1.78] text-litus-muted">{{ $post['excerpt'] }}</p>
            <div class="flex items-center gap-1.5 text-[0.72rem] font-bold text-litus-accent">
                Read More
                <x-litus-icon name="arrow-right" class="h-[13px] w-[13px]" />
            </div>
        </div>
    </div>
</a>
