@props(['variant' => 'default'])

@php
    $isSoft = $variant === 'soft';
    $inputClass = $isSoft
        ? 'litus-soft-input'
        : 'w-full rounded-xl border border-litus-navy/12 bg-white px-4 py-3.5 text-[0.88rem] text-litus-navy outline-none transition-colors focus:border-litus-accent';
    $textareaClass = $isSoft
        ? 'litus-soft-input resize-none'
        : 'w-full rounded-xl border border-litus-navy/12 bg-white px-4 py-3.5 text-[0.88rem] text-litus-navy outline-none transition-colors focus:border-litus-accent resize-none';
@endphp

<form action="#" method="POST" class="flex flex-col gap-3" onsubmit="return false;">
    @csrf
    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
        <input type="text" name="name" placeholder="Name" class="{{ $inputClass }}">
        <input type="email" name="email" placeholder="Email Address" class="{{ $inputClass }}">
    </div>
    <div class="grid grid-cols-1 gap-3 sm:grid-cols-2">
        <input type="tel" name="phone" placeholder="Phone" class="{{ $inputClass }}">
        <input type="text" name="subject" placeholder="Subject" class="{{ $inputClass }}">
    </div>
    <textarea name="message" rows="3" placeholder="How can we help you?" class="{{ $textareaClass }}"></textarea>
    <label class="flex cursor-pointer items-center gap-2">
        <input type="checkbox" class="cursor-pointer">
        <span class="text-[0.76rem] text-litus-muted">
            I agree that my data is <span class="text-litus-accent">collected and stored</span>
        </span>
    </label>
    <button
        type="submit"
        class="mt-1 flex cursor-pointer items-center justify-center gap-2 rounded-full border-0 bg-litus-navy py-3.5 text-[0.78rem] font-bold text-white shadow-[0_4px_20px_rgba(14,23,59,0.2)] transition-opacity hover:opacity-85"
    >
        Get in Touch
        <x-litus-icon name="arrow-right" class="h-3.5 w-3.5" />
    </button>
</form>
