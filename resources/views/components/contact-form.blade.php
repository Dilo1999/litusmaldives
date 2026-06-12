@props(['variant' => 'default'])

<form action="#" method="POST" class="flex flex-col gap-3.5" onsubmit="return false;">
    @csrf
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
        <input type="text" name="name" placeholder="Name" class="px-4 py-3.5 bg-white border border-litus-primary/12 rounded-sm text-litus-primary text-[0.88rem] outline-none focus:border-litus-primary transition-colors w-full">
        <input type="email" name="email" placeholder="Email Address" class="px-4 py-3.5 bg-white border border-litus-primary/12 rounded-sm text-litus-primary text-[0.88rem] outline-none focus:border-litus-primary transition-colors w-full">
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
        <input type="tel" name="phone" placeholder="Phone" class="px-4 py-3.5 bg-white border border-litus-primary/12 rounded-sm text-litus-primary text-[0.88rem] outline-none focus:border-litus-primary transition-colors w-full">
        <input type="text" name="subject" placeholder="Subject" class="px-4 py-3.5 bg-white border border-litus-primary/12 rounded-sm text-litus-primary text-[0.88rem] outline-none focus:border-litus-primary transition-colors w-full">
    </div>
    <textarea name="message" rows="4" placeholder="How can we help you?" class="px-4 py-3.5 bg-white border border-litus-primary/12 rounded-sm text-litus-primary text-[0.88rem] outline-none resize-none focus:border-litus-primary transition-colors"></textarea>
    <label class="flex gap-2 items-center cursor-pointer">
        <input type="checkbox" class="cursor-pointer">
        <span class="text-litus-muted text-[0.78rem]">I agree that my data is <span class="text-litus-primary">collected and stored</span></span>
    </label>
    <button type="submit" class="py-4 bg-litus-primary text-white font-bold text-[0.72rem] tracking-[0.14em] rounded-sm border-0 cursor-pointer flex items-center justify-center gap-2 hover:bg-litus-primary-dark transition-colors">
        GET IN TOUCH
        <x-litus-icon name="arrow-right" class="w-3.5 h-3.5" />
    </button>
</form>
