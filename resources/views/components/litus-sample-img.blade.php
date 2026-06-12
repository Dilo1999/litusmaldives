@props(['index' => 0])

@php
    $images = config('litus.sample_images', [config('litus.hero_image')]);
    $src = $images[abs((int) $index) % count($images)];
@endphp

<img src="{{ $src }}" {{ $attributes }}>
