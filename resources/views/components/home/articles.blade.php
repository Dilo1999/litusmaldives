<section class="relative py-[50px]">
    <div class="litus-orb -left-20 bottom-[-60px] h-[320px] w-[320px] opacity-35"></div>

    <div class="relative mx-auto max-w-[1260px] px-7">
        <div class="mb-11 flex flex-wrap items-end justify-between gap-4">
            <div>
                <x-section-badge text="LATEST NEWS" surface="white" />
                <h2 class="m-0 text-[clamp(1.7rem,3vw,2.4rem)] leading-[1.2] font-black text-litus-navy">Top Latest Articles</h2>
            </div>
            <x-arrow-link :href="route('blog')" variant="text" label="View All" />
        </div>

        <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
            @foreach(collect(config('blog.posts'))->take(3) as $i => $article)
                <a href="{{ route('blog.show', $article['slug']) }}" class="litus-card group block cursor-pointer overflow-hidden no-underline transition-all duration-250 hover:-translate-y-1.5 hover:shadow-[0_12px_40px_rgba(6,182,212,0.14),0_2px_8px_rgba(14,23,59,0.06)]">
                    <div class="h-[190px] overflow-hidden">
                        <img src="{{ $article['hero'] }}" alt="{{ $article['title'] }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.06]" loading="lazy">
                    </div>
                    <div class="px-[22px] pt-[22px] pb-[26px]">
                        <div class="mb-3 flex gap-2.5">
                            <span class="rounded-full bg-litus-surface px-3 py-0.5 text-[0.58rem] font-bold tracking-[0.12em] text-litus-accent">{{ $article['tag'] }}</span>
                            <span class="text-[0.72rem] text-[#b0bcd0]">{{ $article['date'] }}</span>
                        </div>
                        <h3 class="mb-2.5 text-[0.92rem] leading-snug font-bold text-litus-navy">{{ $article['title'] }}</h3>
                        <p class="mb-4 text-[0.78rem] leading-[1.72] text-litus-muted">{{ $article['excerpt'] }}</p>
                        <div class="flex items-center gap-1 text-[0.68rem] font-bold text-litus-accent">
                            Read More
                            <x-litus-icon name="chevron-right" class="h-3 w-3" />
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="mt-10 text-center">
            <x-arrow-link :href="route('blog')" variant="ghost" label="View All Articles" />
        </div>
    </div>
</section>
