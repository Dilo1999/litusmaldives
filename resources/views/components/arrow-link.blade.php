@props([
    'href',
    'variant' => 'dark',
    'label' => null,
])

@php
$variants = [
    'dark' => 'inline-flex items-center gap-2 rounded-full bg-litus-navy px-8 py-3.5 text-[0.78rem] font-bold text-white no-underline shadow-[0_4px_20px_rgba(14,23,59,0.2)] transition-opacity hover:opacity-85',
    'accent' => 'inline-flex items-center gap-2 rounded-full bg-litus-accent px-8 py-3.5 text-[0.78rem] font-bold text-white no-underline shadow-[0_4px_16px_rgba(6,182,212,0.35)] transition-opacity hover:opacity-85',
    'outline' => 'inline-flex items-center gap-2 rounded-full border-[1.5px] border-litus-navy/12 bg-white px-7 py-3 text-[0.78rem] font-bold text-litus-navy no-underline shadow-[0_2px_12px_rgba(14,23,59,0.07)] transition-all hover:border-litus-accent hover:text-litus-accent',
    'ghost' => 'inline-flex items-center gap-2 rounded-full border-[1.5px] border-litus-navy/10 bg-white px-7 py-3 text-[0.78rem] font-bold text-litus-navy no-underline shadow-[0_2px_12px_rgba(14,23,59,0.07)] transition-all hover:border-litus-accent hover:text-litus-accent',
    'text' => 'inline-flex items-center gap-1.5 text-[0.78rem] font-bold text-litus-accent no-underline transition-all hover:gap-2.5',
];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $variants[$variant] ?? $variants['dark']]) }}>
    {{ $label ?? $slot }}
    <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
</a>
