@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <x-page-hero
        title="Blog & News"
        subtitle="Insights, updates and industry news from Litus Maldives."
        crumb="Blog"
        :image="config('litus.sample_images')[6]"
    />

    @php
        $posts = config('litus.blog_posts');
        $featured = $posts[0];
        $rest = array_slice($posts, 1);
    @endphp

    <section class="py-[72px] pb-24 bg-litus-bg" data-blog>
        <div class="max-w-7xl mx-auto px-7">
            <div class="flex gap-2.5 flex-wrap mb-12">
                @foreach(['All', 'Logistics', 'News', 'Insights', 'Industry'] as $cat)
                    <button
                        type="button"
                        data-blog-filter="{{ $cat }}"
                        @class([
                            'px-5 py-2.5 font-bold text-[0.7rem] tracking-widest rounded-sm cursor-pointer border-2 transition-colors',
                            'bg-litus-primary text-white border-litus-primary' => $cat === 'All',
                            'bg-transparent text-litus-primary border-litus-primary/20' => $cat !== 'All',
                        ])
                    >{{ strtoupper($cat) }}</button>
                @endforeach
            </div>

            <div data-blog-featured data-tag="{{ $featured['tag'] }}" class="grid grid-cols-1 lg:grid-cols-[1.4fr_1fr] gap-0 mb-12 border border-litus-primary/10 rounded-md overflow-hidden bg-white animate-on-scroll" data-animate="fadeInUp">
                <div class="h-[380px] overflow-hidden">
                    <x-litus-sample-img :index="0" alt="{{ $featured['title'] }}" class="w-full h-full object-cover" />
                </div>
                <div class="p-10 flex flex-col justify-center">
                    <div class="flex gap-3 mb-5">
                        <span class="px-3 py-0.5 bg-litus-primary/10 text-litus-primary font-bold text-[0.58rem] tracking-[0.14em] rounded-sm">{{ $featured['tag'] }}</span>
                        <span class="text-litus-muted text-[0.75rem]">{{ $featured['date'] }}</span>
                    </div>
                    <h2 class="text-litus-primary font-black text-2xl leading-snug mb-4">{{ $featured['title'] }}</h2>
                    <p class="text-litus-muted text-[0.88rem] leading-relaxed mb-7">{{ $featured['excerpt'] }}</p>
                    <div class="flex items-center gap-1.5 text-litus-primary font-bold text-[0.7rem] tracking-[0.12em] cursor-pointer">
                        READ MORE
                        <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach($rest as $i => $post)
                    <article data-blog-item data-tag="{{ $post['tag'] }}" class="bg-white border border-litus-primary/8 rounded-md overflow-hidden cursor-pointer hover:border-litus-primary hover:-translate-y-1 hover:shadow-[0_8px_32px_rgba(11,36,118,0.1)] transition-all animate-on-scroll" data-animate="fadeInUp" data-delay="{{ $i * 0.08 }}">
                        <div class="h-[180px] overflow-hidden">
                            <x-litus-sample-img :index="$i + 1" alt="{{ $post['title'] }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500" />
                        </div>
                        <div class="p-5 pb-6">
                            <div class="flex gap-2.5 mb-3">
                                <span class="px-2.5 py-0.5 bg-litus-primary/10 text-litus-primary font-bold text-[0.56rem] tracking-[0.14em] rounded-sm">{{ $post['tag'] }}</span>
                                <span class="text-litus-muted text-[0.72rem]">{{ $post['date'] }}</span>
                            </div>
                            <h3 class="text-litus-primary font-bold text-[0.9rem] leading-snug mb-2.5">{{ $post['title'] }}</h3>
                            <p class="text-litus-muted text-[0.78rem] leading-relaxed mb-4">{{ Str::limit($post['excerpt'], 100) }}…</p>
                            <div class="flex items-center gap-1 text-litus-primary font-bold text-[0.65rem] tracking-[0.12em]">
                                READ MORE
                                <x-litus-icon name="chevron-right" class="w-3 h-3" />
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
