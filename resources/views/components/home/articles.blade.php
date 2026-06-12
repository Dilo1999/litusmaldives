<section class="py-24 bg-litus-primary">
    <div class="max-w-7xl mx-auto px-7">
        <div class="flex items-end justify-between mb-14 flex-wrap gap-4">
            <div>
                <x-section-label text="LATEST NEWS" :light="true" />
                <h2 class="text-white font-black text-[clamp(2rem,4vw,2.8rem)] leading-tight m-0">Top Latest Articles</h2>
            </div>
            <a href="{{ route('blog') }}" class="flex items-center gap-1.5 text-white font-bold text-[0.7rem] tracking-[0.12em] no-underline hover:opacity-80 transition-opacity">
                VIEW ALL
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach(config('litus.articles') as $i => $article)
                <article class="bg-white/4 border border-white/8 rounded-md overflow-hidden cursor-pointer hover:border-white/40 transition-colors animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.1 }}">
                    <div class="h-[200px] overflow-hidden">
                        <x-litus-sample-img :index="$i" alt="{{ $article['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                    </div>
                    <div class="p-5 pb-6">
                        <div class="flex gap-2.5 mb-3">
                            <span class="px-2.5 py-0.5 bg-white/10 text-white font-bold text-[0.58rem] tracking-[0.14em] rounded-sm">{{ $article['tag'] }}</span>
                            <span class="text-white/30 text-[0.75rem]">{{ $article['date'] }}</span>
                        </div>
                        <h3 class="text-white font-bold text-[0.92rem] leading-snug mb-2.5 m-0">{{ $article['title'] }}</h3>
                        <p class="text-white/42 text-[0.78rem] leading-relaxed mb-4 m-0">{{ $article['excerpt'] }}</p>
                        <div class="flex items-center gap-1 text-white font-bold text-[0.65rem] tracking-[0.12em]">
                            READ MORE
                            <x-litus-icon name="chevron-right" class="w-3 h-3" />
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 px-9 py-3.5 border border-white/50 text-white font-bold text-[0.7rem] tracking-[0.12em] rounded-sm no-underline hover:bg-white hover:text-litus-primary transition-colors">
                VIEW ALL ARTICLES
                <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
            </a>
        </div>
    </div>
</section>
