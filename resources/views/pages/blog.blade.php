@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    @php($posts = config('blog.posts'))

    <div class="bg-litus-bg">
        <x-page-hero
            eyebrow="INSIGHTS · NEWS · INDUSTRY"
            title="Blog & News"
            subtitle="Insights, updates, and industry news from Litus Maldives."
            :image="config('litus.hero_image')"
        />

        <section class="px-7 pt-12 pb-20" data-blog>
            <div class="mx-auto max-w-[1260px]">
                <div class="mb-10 flex flex-wrap gap-2.5">
                    @foreach(['All', 'Logistics', 'News', 'Insights', 'Industry'] as $cat)
                        <button
                            type="button"
                            data-blog-filter="{{ $cat }}"
                            @class([
                                'cursor-pointer rounded-full border-0 px-[22px] py-[9px] text-[0.72rem] font-bold transition-all duration-200',
                                'bg-litus-navy text-white shadow-[0_4px_14px_rgba(14,23,59,0.2)]' => $cat === 'All',
                                'bg-white text-litus-muted shadow-[0_2px_8px_rgba(14,23,59,0.07)] hover:text-litus-navy' => $cat !== 'All',
                            ])
                        >{{ $cat }}</button>
                    @endforeach
                </div>

                <div data-blog-featured-wrap>
                    @foreach($posts as $i => $post)
                        <x-blog.featured-card
                            :post="$post"
                            @class(['hidden' => $i !== 0])
                        />
                    @endforeach
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 xl:grid-cols-[repeat(auto-fit,minmax(300px,1fr))]">
                    @foreach($posts as $i => $post)
                        <x-blog.grid-card
                            :post="$post"
                            @class(['hidden' => $i === 0])
                        />
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
