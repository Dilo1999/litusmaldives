@props(['currentSlug'])

<aside class="sticky top-[100px] flex flex-col gap-5">
    <div class="litus-card flex items-center gap-2.5 rounded-2xl px-5 py-[18px]">
        <input
            type="search"
            placeholder="Search articles…"
            class="flex-1 border-0 bg-transparent text-[0.82rem] text-litus-navy outline-none"
        >
        <x-litus-icon name="search" class="h-4 w-4 text-[#b0bcd0]" />
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-3 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">About</h4>
        <p class="m-0 text-[0.78rem] leading-[1.75] text-litus-muted">
            Litus Maldives is the leading logistics provider in the Maldives, delivering freight, customs brokerage, and supply chain services across all 26 atolls.
        </p>
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-3.5 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">Categories</h4>
        <div class="flex flex-col gap-0.5">
            @foreach(config('blog.categories') as $cat)
                <a
                    href="{{ route('blog') }}"
                    class="flex items-center justify-between border-b border-litus-navy/5 py-2 text-[0.8rem] text-litus-muted no-underline transition-colors hover:text-litus-accent"
                >
                    <span>{{ $cat['name'] }}</span>
                    <span class="rounded-full bg-litus-surface px-2.5 py-0.5 text-[0.65rem] font-bold text-litus-navy">{{ $cat['count'] }}</span>
                </a>
            @endforeach
        </div>
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-4 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">Recent Posts</h4>
        <div class="flex flex-col gap-3.5">
            @foreach(collect(config('blog.posts'))->where('slug', '!=', $currentSlug)->take(4) as $recent)
                <a href="{{ route('blog.show', $recent['slug']) }}" class="flex items-start gap-3 no-underline">
                    <img
                        src="{{ $recent['thumb'] }}"
                        alt="{{ $recent['title'] }}"
                        class="h-12 w-14 shrink-0 rounded-lg object-cover"
                        loading="lazy"
                    >
                    <div>
                        <div class="mb-0.5 text-[0.77rem] leading-[1.35] font-bold text-litus-navy transition-colors hover:text-litus-accent">{{ $recent['title'] }}</div>
                        <div class="text-[0.68rem] text-[#b0bcd0]">{{ $recent['date'] }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-3.5 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">Tags</h4>
        <div class="flex flex-wrap gap-[7px]">
            @foreach(config('blog.all_tags') as $tag)
                <span class="cursor-pointer rounded-full bg-litus-surface px-3 py-1 text-[0.7rem] font-semibold text-litus-muted transition-all hover:bg-litus-accent hover:text-white">{{ $tag }}</span>
            @endforeach
        </div>
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-3.5 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">Share</h4>
        <div class="flex gap-2.5">
            @foreach([
                ['label' => 'f', 'bg' => '#1877F2'],
                ['label' => '𝕏', 'bg' => '#1DA1F2'],
                ['label' => 'in', 'bg' => '#0A66C2'],
                ['label' => 'ig', 'bg' => '#E4405F'],
            ] as $social)
                <button type="button" class="flex h-9 w-9 cursor-pointer items-center justify-center rounded-full border-0 text-[0.65rem] font-bold text-white transition-opacity hover:opacity-80" style="background: {{ $social['bg'] }}">
                    {{ $social['label'] }}
                </button>
            @endforeach
        </div>
    </div>

    <div class="litus-card rounded-2xl px-5 py-[22px]">
        <h4 class="mb-3.5 text-[0.85rem] font-extrabold tracking-[0.1em] text-litus-navy uppercase">Instagram</h4>
        <div class="grid grid-cols-3 gap-1.5">
            @foreach(config('blog.instagram_images') as $img)
                <div class="aspect-square overflow-hidden rounded-lg">
                    <img src="{{ $img }}" alt="Instagram" class="h-full w-full object-cover transition-transform duration-350 hover:scale-[1.08]" loading="lazy">
                </div>
            @endforeach
        </div>
    </div>
</aside>
