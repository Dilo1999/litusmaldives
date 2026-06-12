@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <x-page-hero
        title="Gallery"
        subtitle="A look at our operations across the Maldives."
        crumb="Gallery"
        :image="config('litus.sample_images')[5]"
    />

    @php $samples = config('litus.sample_images'); @endphp

    <section class="py-[72px] pb-24 bg-litus-bg" data-gallery>
        <div class="max-w-7xl mx-auto px-7">
            <div class="flex gap-2.5 flex-wrap mb-12">
                @foreach(['All', 'Cargo', 'Vessels', 'Operations', 'Team'] as $cat)
                    <button
                        type="button"
                        data-gallery-filter="{{ $cat }}"
                        @class([
                            'px-5 py-2.5 font-bold text-[0.7rem] tracking-widest rounded-sm cursor-pointer border-2 transition-colors',
                            'bg-litus-primary text-white border-litus-primary' => $cat === 'All',
                            'bg-transparent text-litus-primary border-litus-primary/20' => $cat !== 'All',
                        ])
                    >{{ strtoupper($cat) }}</button>
                @endforeach
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-2.5">
                @foreach(config('litus.gallery_items') as $i => $item)
                    <div
                        data-filter-item
                        data-category="{{ $item['cat'] }}"
                        data-title="{{ $item['title'] }}"
                        data-image="{{ $samples[$i % count($samples)] }}"
                        style="grid-column: span {{ min($item['span'], 2) }};"
                        @class([
                            'overflow-hidden rounded-md relative cursor-pointer group',
                            'h-[360px]' => $item['tall'],
                            'h-[180px]' => !$item['tall'],
                        ])
                    >
                        <x-litus-sample-img :index="$i" alt="{{ $item['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" />
                        <div class="absolute inset-0 bg-linear-to-t from-litus-primary/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <div class="absolute bottom-4 left-4">
                                <div class="text-litus-primary text-[0.6rem] font-bold tracking-[0.16em] mb-1">{{ strtoupper($item['cat']) }}</div>
                                <div class="text-white font-bold text-[0.88rem]">{{ $item['title'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div data-gallery-lightbox class="hidden fixed inset-0 z-[999] bg-black/92 items-center justify-center p-6">
        <button type="button" data-lightbox-close class="absolute top-6 right-6 bg-litus-primary border-0 text-white w-[42px] h-[42px] rounded-sm cursor-pointer flex items-center justify-center">
            <x-litus-icon name="x" class="w-[18px] h-[18px]" />
        </button>
        <img data-lightbox-img src="{{ config('litus.hero_image') }}" alt="" class="max-w-[88vw] max-h-[80vh] object-contain rounded-md">
        <div data-lightbox-title class="absolute bottom-7 left-1/2 -translate-x-1/2 text-white font-bold text-[0.88rem]"></div>
    </div>
@endsection
