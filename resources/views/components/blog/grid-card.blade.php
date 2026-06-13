@props(['post'])

<article
    data-blog-item
    data-slug="{{ $post['slug'] }}"
    data-tag="{{ $post['tag'] }}"
    {{ $attributes->merge(['class' => 'litus-card group overflow-hidden rounded-[20px] transition-all duration-250 hover:-translate-y-1.5 hover:shadow-[0_12px_40px_rgba(6,182,212,0.14)]']) }}
>
    <a href="{{ route('blog.show', $post['slug']) }}" class="block no-underline">
        <div class="h-[170px] overflow-hidden">
            <img
                src="{{ $post['hero'] }}"
                alt="{{ $post['title'] }}"
                class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.06]"
                loading="lazy"
            >
        </div>
        <div class="px-5 pt-5 pb-6">
            <div class="mb-[11px] flex gap-2.5">
                <span class="rounded-full bg-litus-surface px-3 py-0.5 text-[0.56rem] font-bold tracking-[0.12em] text-litus-accent">{{ $post['tag'] }}</span>
                <span class="text-[0.72rem] text-[#b0bcd0]">{{ $post['date'] }}</span>
            </div>
            <h3 class="mb-2 text-[0.9rem] leading-[1.4] font-bold text-litus-navy">{{ $post['title'] }}</h3>
            <p class="mb-3.5 text-[0.78rem] leading-[1.72] text-litus-muted">{{ Str::limit($post['excerpt'], 100) }}…</p>
            <div class="flex items-center gap-1 text-[0.65rem] font-bold text-litus-accent">
                Read More
                <x-litus-icon name="chevron-right" class="h-3 w-3" />
            </div>
        </div>
    </a>
</article>
