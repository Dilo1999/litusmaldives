<section class="py-[72px] bg-white border-b border-litus-primary/7">
    <div class="max-w-7xl mx-auto px-7">
        <div class="text-center mb-13">
            <x-section-label text="TRUSTED BY LEADING BRANDS" />
            <h2 class="text-litus-primary font-black text-3xl m-0">We've Partnered With</h2>
        </div>
        <div class="flex flex-wrap items-center justify-center gap-x-15 gap-y-4">
            @foreach(config('litus.partners') as $partner)
                <span class="text-litus-primary/18 font-black tracking-[0.24em] text-lg cursor-default hover:text-litus-primary transition-colors">{{ $partner }}</span>
            @endforeach
        </div>
    </div>
</section>
