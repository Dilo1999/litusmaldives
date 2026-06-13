@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="bg-litus-bg">
        <x-page-hero
            eyebrow="OUR OPERATIONS IN ACTION"
            title="Gallery"
            subtitle="A look at our operations across the Maldives."
            :image="config('litus.sample_images')[2]"
        />

        @php $samples = config('litus.sample_images'); @endphp

        <section class="px-7 py-[72px] pb-24" data-gallery>
            <div class="mx-auto max-w-[1260px]">
                <div class="mb-12 flex flex-wrap gap-2.5">
                    @foreach(['All', 'Cargo', 'Vessels', 'Operations', 'Team'] as $cat)
                        <button
                            type="button"
                            data-gallery-filter="{{ $cat }}"
                            @class([
                                'cursor-pointer rounded-full border px-5 py-2.5 text-[0.7rem] font-bold tracking-widest transition-colors',
                                'border-litus-accent bg-litus-accent text-white' => $cat === 'All',
                                'border-litus-navy/12 bg-white text-litus-navy hover:border-litus-accent hover:text-litus-accent' => $cat !== 'All',
                            ])
                        >{{ strtoupper($cat) }}</button>
                    @endforeach
                </div>

                <div class="grid grid-cols-1 gap-2.5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach(config('litus.gallery_items') as $i => $item)
                        <div
                            data-filter-item
                            data-category="{{ $item['cat'] }}"
                            data-title="{{ $item['title'] }}"
                            data-image="{{ $samples[$i % count($samples)] }}"
                            style="grid-column: span {{ min($item['span'], 2) }};"
                            @class([
                                'group relative cursor-pointer overflow-hidden rounded-[20px]',
                                'h-[360px]' => $item['tall'],
                                'h-[180px]' => !$item['tall'],
                            ])
                        >
                            <x-litus-sample-img :index="$i" :alt="$item['title']" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" />
                            <div class="absolute inset-0 bg-linear-to-t from-litus-navy/80 to-transparent opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                                <div class="absolute bottom-4 left-4">
                                    <div class="mb-1 text-[0.6rem] font-bold tracking-[0.16em] text-litus-accent">{{ strtoupper($item['cat']) }}</div>
                                    <div class="text-[0.88rem] font-bold text-white">{{ $item['title'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <div data-gallery-lightbox class="fixed inset-0 z-[999] hidden items-center justify-center bg-black/92 p-6">
            <button type="button" data-lightbox-close class="absolute top-6 right-6 flex h-[42px] w-[42px] cursor-pointer items-center justify-center rounded-md border-0 bg-litus-navy text-white">
                <x-litus-icon name="x" class="h-[18px] w-[18px]" />
            </button>
            <img data-lightbox-img src="{{ config('litus.hero_image') }}" alt="" class="max-h-[80vh] max-w-[88vw] rounded-md object-contain">
            <div data-lightbox-title class="absolute bottom-7 left-1/2 -translate-x-1/2 text-[0.88rem] font-bold text-white"></div>
        </div>
    </div>
@endsection
