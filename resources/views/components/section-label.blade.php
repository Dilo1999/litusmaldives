@props(['text', 'light' => false])

<div class="flex items-center gap-3 mb-4">
    <div @class(['w-8 h-0.5', 'bg-white' => $light, 'bg-litus-primary' => !$light])></div>
    <span @class([
        'font-bold text-[0.62rem] tracking-[0.24em]',
        'text-white' => $light,
        'text-litus-primary' => !$light,
    ])>{{ $text }}</span>
</div>
