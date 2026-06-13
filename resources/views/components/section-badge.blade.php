@props(['text', 'light' => false, 'surface' => 'muted'])

<div {{ $attributes->merge(['class' => 'mb-5 inline-flex items-center gap-2 rounded-full px-3.5 py-1.5 ' . ($surface === 'muted' ? 'bg-litus-surface' : ($surface === 'white' ? 'bg-white shadow-[0_2px_10px_rgba(14,23,59,0.07)]' : ''))]) }}>
    <div @class(['h-1.5 w-1.5 rounded-full', 'bg-litus-accent' => !$light, 'bg-white' => $light])></div>
    <span @class([
        'text-[0.6rem] font-bold tracking-[0.18em]',
        'text-litus-accent' => !$light,
        'text-white' => $light,
    ])>{{ $text }}</span>
</div>
